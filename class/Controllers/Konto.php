<?php
namespace Controllers;
use \Tools\FlashMessage;

class Konto extends GlobalController
{

    public function showAll()
    {
        $this->view->setTemplate('Konto/page');
        $this->view->addCSSSet(array('inputs', 'kontoPage'));
        $this->view->addJSSet(array('external/jquery.validate',
                                    'external/jquery.validate.add',
                                    'external/jquery.validate.polish',
                                    'validation',
                                    'validation/regform',
                                    'regform'));
        $model = $this->createModel('User');
        $result['data'] = $model->selectOneById(\Tools\Access::get(\Tools\Access::$id));

        return $result;
    }

    public function showRezerwacje()
    {
        $this->view->setTemplate('Konto/rezerwacje');
        $this->view->addCSSSet(array('inputs',
                                    'kontoRezerwacje'));

        $this->view->addJSSet(array('modal/load-modal',
                                    'modal/kontorezerwacje'));
        $model = $this->createModel('Rezerwacja');
        $result['data'] = $model->selectAllOrderBy(null, 'ASC', 'IdKlient', \Tools\Access::get(\Tools\Access::$id));

        $model = $this->createModel('Status');
        $result['statusy'] = $model->transferByColumn($model->selectAll());

        return $result;
    }

    public function ajaxShowRezerwacja($id)
    {
        $model = $this->createModel('Rezerwacja');
        $rezerwacja = $model->selectOneById($id);

        if(\Tools\Access::get(\Tools\Access::$id) == $rezerwacja['IdKlient']){
            $this->view->setTemplate('ajaxModals/showRezerwacja');
            $result['data'] = $rezerwacja;
            $model = $this->createModel('Status');
            $result['statusy'] = $model->transferByColumn($model->selectAll());
            $model = $this->createModel('RezUsluga');
            $result['rezuslugi'] = $model->selectAllOrderBy(null, 'ASC', 'IdRezerwacja', $id);
            $model = $this->createModel('Usluga');
            $result['uslugi'] = $model->transferByColumn($model->selectAll());
            return $result;
        }
        else{
            $this->view->setTemplate('ajaxModals/notAllow');
        }
    }

    public function showBasket()
    {
        $this->view->setTemplate('Konto/basket');
        $this->view->addCSSSet(array('external/select2',
                                    'inputs',
                                    'kontoRezerwacje'));

        $this->view->addJSSet(array('external/select2',
                                    'external/pl',
                                    'select2',
                                    'modal/load-modal',
                                    'modal/kontobasket'));

        if(\Tools\Session::is(\Tools\Basket::$basketName)){
            $result['data'] = \Tools\Session::get(\Tools\Basket::$basketName);
            $model = $this->createModel('Usluga');
            $result['uslugi'] = $model->transferByColumn($model->selectAll());
            return $result;
        }
    }

    public function ajaxAddForm($id)
    {
        $this->view->setTemplate('ajaxModals/addBasket');
        $model = $this->createModel('Usluga');
        $result['uslugi'] = $model->transferByColumn($model->selectAll());
        return $result;
    }

    public function addBasket()
    {
        $this->check(['IdUsluga', 'Ilosc'], $_POST);
        \Tools\Basket::addItem($_POST['IdUsluga'], $_POST['Ilosc']);
        $this->redirect('konto/basket');
    }

    public function ajaxFinishForm($id)
    {
        $this->view->setTemplate('ajaxModals/finishBasket');
    }

    public function finishBasket()
    {
        $this->check(['TerminRealizacji'], $_POST);
        $model = $this->createModel('Rezerwacja');
        $id = $model->insert($_POST['TerminRealizacji'], \Tools\Session::get(\Tools\Access::$id), 1);
        if($id > 0){
            $basket = \Tools\Session::get(\Tools\Basket::$basketName);
            $model = $this->createModel('RezUsluga');
            $counter = 0;
            foreach ($basket as $key => $value) {
                $e = $model->insert($id, $value['0'], $value['1'], null);
                if($e <= 0){
                    $model = $this->createModel('Rezerwacja');
                    $model->deleteOneById($id);
                    FlashMessage::addMessage($e, 'finishBacket');
                    $this->redirect('konto/basket');
                }
                $counter++;
            }
            if($counter==0){
                $model = $this->createModel('Rezerwacja');
                $model->deleteOneById($id);
                FlashMessage::addMessage($counter, 'finishBacket');
                $this->redirect('konto/basket');
            }
            $this->clearBasket();
            FlashMessage::addMessage($counter, 'finishBacket');
            $this->redirect('konto/rezerwacje');
        }
        else{
            FlashMessage::addMessage($id, 'finishBacket');
            $this->redirect('konto/basket');
        }
        $this->redirect('konto/rezerwacje');
    }

    public function clearBasket()
    {
        \Tools\Session::clear(\Tools\Basket::$basketName);
    }

    public function clearOneFromBasket($IdUsluga)
    {
        \Tools\Basket::removeItem($IdUsluga);
        $this->redirect('konto/basket');
    }

    public function changePasswordForm()
    {
        $this->view->setTemplate('Konto/passwordForm');
        $this->view->addCSSSet(array('inputs', 'kontoPage'));
        $this->view->addJSSet(array('external/jquery.validate',
                                    'external/jquery.validate.add',
                                    'external/jquery.validate.polish',
                                    'validation',
                                    'validation/kontoHaslo',
                                    'kontoHaslo'));
    }

    public function edit()
    {
        $this->check(['id', 'Imie', 'Nazwisko', 'Pesel', 'Ulica', 'NrDomu', 'NrLokalu', 'Miejscowosc', 'KodPocztowy', 'NrTelefonu', 'Email', 'Password'], $_POST);
        $model = $this->createModel('User');
        $user = $model->selectOneById(\Tools\Access::get(\Tools\Access::$id));
        $id = -1;
        if(password_verify($_POST['Password'], $user['Password'])){
            $id = $model->update(\Tools\Access::get(\Tools\Access::$id), $_POST['Imie'], $_POST['Nazwisko'], $_POST['Pesel'],
            $_POST['Ulica'], $_POST['NrDomu'], $_POST['NrLokalu'], $_POST['Miejscowosc'],
            $_POST['KodPocztowy'], $_POST['NrTelefonu'], $_POST['Email'], \Tools\Access::get(\Tools\Access::$rank), \Tools\Access::get(\Tools\Access::$login), $_POST['Password']);
        }
        FlashMessage::addMessage($id, 'updateKonto');
        $this->redirect('konto');
    }

    public function changePassword()
    {
        $this->check(['PasswordOld', 'PasswordNew'], $_POST);
        $model = $this->createModel('User');
        $user = $model->selectOneById(\Tools\Access::get(\Tools\Access::$id));
        $id = -1;
        if(password_verify($_POST['PasswordOld'], $user['Password'])){
            $id = $model->updatePassword(\Tools\Access::get(\Tools\Access::$id), $_POST['PasswordNew']);
        }
        FlashMessage::addMessage($id, 'updateHaslo');
        $this->redirect('konto/haslo');
    }
}
