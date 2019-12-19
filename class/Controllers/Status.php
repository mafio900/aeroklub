<?php
namespace Controllers;

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
        $this->view->addJSSet(array('external/datatables', 'dataTables'));
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
        $result['data'] = $model->selecteOneById($id);
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
        $this->redirect('status/');
    }

    /**
     * Usuwanie kilku statusów na raz
     */
    public function deletePlenty()
    {
        $this->deleteGiven($_POST['ids']);
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
        $model->insert($_POST['StatusNazwa']);
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
        $model->update($_POST['id'], $_POST['StatusNazwa']);
        $this->redirect("status/".$_POST['id']);
    }

}
