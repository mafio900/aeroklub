<?php
namespace Controllers;
use \Tools\FlashMessage;
/**
 * Kontroller samolotów
 */
class Samolot extends GlobalController
{

    /**
     * Informacje wszystkich samolotach
     * @return array
     */
    public function showAll()
    {
        $this->view->setTemplate('Samolot/showAll');
        $this->view->addCSSSet(array('external/datatables', 'external/select2'));
        $this->view->addJSSet(array('external/datatables',
                                    'dataTables',
                                    'external/select2',
                                    'external/pl',
                                    'select2',
                                    'modal/load-modal',
                                    'modal/delete-confirm',
                                    'modal/samolot',
                                    'external/jquery.validate',
                                    'external/jquery.validate.add',
                                    'external/jquery.validate.polish',
                                    'validation',
                                    'validation/samolot'));
        $model = $this->createModel('Samolot');
        $result['data'] = $model->selectAll();
        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());
        return $result;
    }

    /**
     * Informacje o statusie
     * @param  int $id
     * @return array
     */
    public function showOne($id)
    {
        $this->view->setTemplate('Samolot/showOne');
        $this->view->addCSSSet(array('external/select2'));
        $this->view->addJSSet(array('external/select2', 'external/pl', 'select2', 'external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/samolot'));
        $model = $this->createModel('Samolot');
        $result['data'] = $model->selectOneById($id);
        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());
        return $result;
    }

    public function ajaxAddForm($id){
        $this->view->setTemplate('ajaxModals/addSamolot');
        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());
        return $result;
    }

    public function ajaxEditForm($id)
    {
        $this->view->setTemplate('ajaxModals/editSamolot');
        $model = $this->createModel('Samolot');
        $result['data'] = $model->selectOneById($id);
        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());
        return $result;
    }

    /**
     * Usuwanie statusu
     * @param  int $id
     * @return array
     */
    public function delete($id)
    {
        $model = $this->createModel('Samolot');
        $samolot = $model->selectOneById($id);
        unlink("./images/flota/".$samolot['ZdjecieNazwa'].'.'.$samolot['Rozszerzenie']);
        $counter = $this->deleteOne($id);
        FlashMessage::addMessage($counter, 'delete');
        $this->redirect('samolot/');
    }

    /**
     * Usuwanie kilku samolotów na raz
     */
    public function deletePlenty()
    {
        $model = $this->createModel('Samolot');
        $samoloty = $model->transferByColumn($model->selectAll());
        foreach($_POST['ids'] as $id){
            unlink("./images/flota/".$samoloty[$id]['ZdjecieNazwa'].'.'.$samoloty[$id]['Rozszerzenie']);
        }
        $counter = $this->deleteGiven($_POST['ids']);
        FlashMessage::addMessage($counter, 'delete');
        $this->redirect('samolot/');
    }

    /**
     * Formularz dodawania producenta
     * @return array
     */
    public function form()
    {
        $this->view->setTemplate('Samolot/addForm');
        $this->view->addCSSSet(array('external/select2'));
        $this->view->addJSSet(array('external/select2', 'external/pl', 'select2', 'external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/samolot'));
        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());
        return $result;
    }

    /**
     * Dodawanie producenta
     * @return void
     */
    public function add()
    {
        $this->check(['IdProducent', 'Model', 'Rejestracja', 'Opis', 'ZdjecieNazwa'], $_POST);
        $id = $_FILES['Zdjecie']['error'];
        $typ = $_FILES['Zdjecie']['type'];
        if($id==0){
            if($typ=="image/png" || $typ=="image/jpeg"){
                $rozszerzenie = $_FILES['Zdjecie']['type']=="image/png" ? "png" : "jpg";
                $lokalizacja = "./images/flota/".$_POST['ZdjecieNazwa'].'.'.$rozszerzenie;
                if(is_uploaded_file($_FILES['Zdjecie']['tmp_name'])){
                    if(move_uploaded_file($_FILES['Zdjecie']['tmp_name'], $lokalizacja)){
                        $model = $this->createModel('Samolot');
                        $id = $model->insert($_POST['IdProducent'], $_POST['Model'], $_POST['Rejestracja'], $_POST['Opis'], $_POST['ZdjecieNazwa'], $rozszerzenie);
                    }
                }
            }
        }
        if($id<=0) {
            FlashMessage::addMessage(-1, 'file');
        }
        FlashMessage::addMessage($id, 'add');
        $this->redirect('samolot/');
    }

    /**
     * Edytowanie producenta
     * @return void
     */
    public function edit()
    {
        $this->check(['id', 'IdProducent', 'Model', 'Rejestracja', 'Opis'], $_POST);
        $id = $_FILES['Zdjecie']['error'];
        $typ = $_FILES['Zdjecie']['type'];
        $flag = true;
        $rozszerzenie = null;
        $model = $this->createModel('Samolot');
        $samolot = $model->selectOneById($_POST['id']);
        if($id==0){
            if($typ=="image/png" || $typ=="image/jpeg" || $typ=="image/jpg"){
                $nazwa = $samolot['ZdjecieNazwa'];
                $rozszerzenie = $_FILES['Zdjecie']['type']=="image/png" ? "png" : "jpg";
                $lokalizacja = "./images/flota/".$nazwa.'.'.$rozszerzenie;
                if($rozszerzenie!=$samolot['Rozszerzenie']){
                    unlink("./images/flota/".$nazwa.'.'.$samolot['Rozszerzenie']);
                }
                if(is_uploaded_file($_FILES['Zdjecie']['tmp_name'])){
                    if(!move_uploaded_file($_FILES['Zdjecie']['tmp_name'], $lokalizacja)){
                        $flag = false;
                    }
                }
                else {
                    $flag = false;
                }
            }
        }
        if($flag){
            if($rozszerzenie==null){
                $rozszerzenie = $samolot['Rozszerzenie'];
            }
            $id = $model->update($_POST['id'], $_POST['IdProducent'], $_POST['Model'], $_POST['Rejestracja'], $_POST['Opis'], $rozszerzenie);
        }
        else {
            FlashMessage::addMessage(-1, 'file');
            $id = -1;
        }
        FlashMessage::addMessage($id, 'update');
        $this->redirect("samolot/");
    }

}
