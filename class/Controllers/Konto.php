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
}
