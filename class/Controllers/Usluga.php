<?php
namespace Controllers;
use \Tools\FlashMessage;
/**
 * Kontroller uslugi
 */
class Usluga extends GlobalController
{

    /**
     * Informacje wszystkich uslugach
     * @return array
     */
    public function showAll()
    {
        $this->view->setTemplate('Usluga/showAll');
        $this->view->addCSSSet(array('external/datatables'));
        $this->view->addJSSet(array('external/datatables',
                                    'dataTables',
                                    'modal/load-modal',
                                    'modal/delete-confirm',
                                    'modal/usluga',
                                    'external/jquery.validate',
                                    'external/jquery.validate.add',
                                    'external/jquery.validate.polish',
                                    'validation',
                                    'validation/usluga'));
        $model = $this->createModel('Usluga');
        $result['data'] = $model->selectAll();

        return $result;
    }

    /**
     * Informacje o usludze
     * @param  int $id
     * @return array
     */
    public function showOne($id)
    {
        $this->view->setTemplate('Usluga/showOne');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array('external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/usluga'));
        $model = $this->createModel('Usluga');
        $result['data'] = $model->selectOneById($id);
        return $result;
    }

    /**
     * Usuwanie uslugi
     * @param  int $id
     * @return array
     */
    public function delete($id)
    {
        $model = $this->createModel('Usluga');
        $usluga = $model->selectOneById($id);
        unlink("./images/oferty/".$usluga['ZdjecieNazwa'].'.'.$usluga['Rozszerzenie']);
        $counter = $this->deleteOne($id);
        FlashMessage::addMessage($counter, 'delete');
        $this->redirect('usluga/');
    }

    /**
     * Usuwanie kilku usług na raz
     */
    public function deletePlenty()
    {
        $model = $this->createModel('Usluga');
        $usluga = $model->transferByColumn($model->selectAll());
        foreach($_POST['ids'] as $id){
            unlink("./images/oferty/".$usluga[$id]['ZdjecieNazwa'].'.'.$usluga[$id]['Rozszerzenie']);
        }
        $counter = $this->deleteGiven($_POST['ids']);
        FlashMessage::addMessage($counter, 'delete');
        $this->redirect('usluga/');
    }

    /**
     * Formularz dodawania uslugi
     * @return array
     */
    public function form()
    {
        $this->view->setTemplate('Usluga/addForm');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array('external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/usluga'));
    }

    /**
     * Dodawanie uslugi
     * @return void
     */
    public function add()
    {
        $this->check(['UslugaNazwa', 'CenaJedn', 'JednMiary', 'Opis'], $_POST);
        $id = $_FILES['Zdjecie']['error'];
        $typ = $_FILES['Zdjecie']['type'];
        if($id==0){
            if($typ=="image/png" || $typ=="image/jpeg"){
                $rozszerzenie = $_FILES['Zdjecie']['type']=="image/png" ? "png" : "jpg";
                $lokalizacja = "./images/oferty/".$_POST['ZdjecieNazwa'].'.'.$rozszerzenie;
                if(is_uploaded_file($_FILES['Zdjecie']['tmp_name'])){
                    if(move_uploaded_file($_FILES['Zdjecie']['tmp_name'], $lokalizacja)){
                        $model = $this->createModel('Usluga');
                        $id = $model->insert($_POST['UslugaNazwa'], $_POST['CenaJedn'], $_POST['JednMiary'], $_POST['Opis'], $_POST['ZdjecieNazwa'], $rozszerzenie);
                    }
                }
            }
        }
        if($id<=0) {
            FlashMessage::addMessage(-1, 'file');
        }
        FlashMessage::addMessage($id, 'add');
        $this->redirect('usluga/');
    }

    /**
     * Edytowanie producenta
     * @return void
     */
    public function edit()
    {
        $this->check(['id', 'UslugaNazwa', 'CenaJedn', 'JednMiary', 'Opis'], $_POST);
        $id = $_FILES['Zdjecie']['error'];
        $typ = $_FILES['Zdjecie']['type'];
        $flag = true;
        $rozszerzenie = null;
        $model = $this->createModel('Usluga');
        $usluga = $model->selectOneById($_POST['id']);
        if($id==0){
            if($typ=="image/png" || $typ=="image/jpeg" || $typ=="image/jpg"){
                $nazwa = $usluga['ZdjecieNazwa'];
                $rozszerzenie = $_FILES['Zdjecie']['type']=="image/png" ? "png" : "jpg";
                $lokalizacja = "./images/oferty/".$nazwa.'.'.$rozszerzenie;
                if($rozszerzenie!=$usluga['Rozszerzenie']){
                    unlink("./images/flota/".$nazwa.'.'.$usluga['Rozszerzenie']);
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
            $id = $model->update($_POST['id'], $_POST['UslugaNazwa'], $_POST['CenaJedn'], $_POST['JednMiary'], $_POST['Opis'], $rozszerzenie);
        }
        else {
            FlashMessage::addMessage(-1, 'file');
            $id = -1;
        }
        FlashMessage::addMessage($id, 'update');
        $this->redirect("usluga/");
    }

}
