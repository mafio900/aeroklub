<?php
namespace Controllers;

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
        $this->deleteOne($id);
        $this->redirect('samolot/');
    }

    /**
     * Usuwanie kilku samolotów na raz
     */
    public function deletePlenty()
    {
        $this->deleteGiven($_POST['ids']);
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
        $this->check(['IdProducent', 'Model', 'Rejestracja', 'Opis'], $_POST);
        if($_POST['IdProducent']=='' && $_POST['Model']=='' && $_POST['Rejestracja']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('Samolot');
        $model->insert($_POST['IdProducent'], $_POST['Model'], $_POST['Rejestracja'], $_POST['Opis']);
        $this->redirect('samolot/');
    }

    /**
     * Edytowanie producenta
     * @return void
     */
    public function edit()
    {
        $this->check(['id', 'IdProducent', 'Model', 'Rejestracja', 'Opis'], $_POST);
        if($_POST['id']=='' && $_POST['IdProducent']=='' && $_POST['Model']=='' && $_POST['Rejestracja']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('Samolot');
        $model->update($_POST['id'], $_POST['IdProducent'], $_POST['Model'], $_POST['Rejestracja'], $_POST['Opis']);
        $this->redirect("samolot/");
    }

}
