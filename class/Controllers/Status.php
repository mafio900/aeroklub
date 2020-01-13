<?php
namespace Controllers;
use \Tools\FlashMessage;
/**
 * Kontroller statusów rezerwacji
 */
class Status extends GlobalController
{

    /**
     * Informacje wszystkich statusach
     * @return array
     */
    public function showAll()
    {
        $this->view->setTemplate('Status/showAll');
        $this->view->addCSSSet(array('external/datatables'));
        $this->view->addJSSet(array('external/datatables',
                                    'dataTables',
                                    'modal/load-modal',
                                    'modal/delete-confirm',
                                    'modal/status',
                                    'external/jquery.validate',
                                    'external/jquery.validate.add',
                                    'external/jquery.validate.polish',
                                    'validation',
                                    'validation/status'));
        $model = $this->createModel('Status');
        $result['data'] = $model->selectAll();

        return $result;
    }

    /**
     * Informacje o statusie
     * @param  int $id
     * @return array
     */
    public function showOne($id)
    {
        $this->view->setTemplate('Status/showOne');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array('external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/status'));
        $model = $this->createModel('Status');
        $result['data'] = $model->selectOneById($id);
        return $result;
    }

    /**
     * Usuwanie statusu
     * @param  int $id
     * @return array
     */
    public function delete($id)
    {
        $counter = $this->deleteOne($id);
        FlashMessage::addMessage($counter, 'delete');
        $this->redirect('status/');
    }

    /**
     * Usuwanie kilku statusów na raz
     */
    public function deletePlenty()
    {
        $counter = $this->deleteGiven($_POST['ids']);
        FlashMessage::addMessage($counter, 'delete');
        $this->redirect('status/');
    }

    /**
     * Formularz dodawania producenta
     * @return array
     */
    public function form()
    {
        $this->view->setTemplate('Status/addForm');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array('external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/status'));
    }

    /**
     * Dodawanie producenta
     * @return void
     */
    public function add()
    {
        $this->check(['StatusNazwa'], $_POST);
        if($_POST['StatusNazwa']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('Status');
        $id = $model->insert($_POST['StatusNazwa']);
        FlashMessage::addMessage($id, 'add');
        $this->redirect('status/');
    }

    /**
     * Edytowanie producenta
     * @return void
     */
    public function edit()
    {
        $this->check(['id', 'StatusNazwa'], $_POST);
        if($_POST['StatusNazwa']=='' && $_POST['id']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('Status');
        $id = $model->update($_POST['id'], $_POST['StatusNazwa']);
        FlashMessage::addMessage($id, 'update');
        $this->redirect("status/");
    }

}
