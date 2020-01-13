<?php
namespace Controllers;
use \Tools\FlashMessage;
/**
 * Kontroller producentów
 */
class Producent extends GlobalController
{
    /**
     * Informacje wszystkich producentach
     * @return array
     * @throws \Exceptions\Application
     */
    public function showAll()
    {
        $this->view->setTemplate('Producent/showAll');
        $this->view->addCSSSet(array('external/datatables'));
        $this->view->addJSSet(array('external/datatables',
                                    'dataTables',
                                    'modal/load-modal',
                                    'modal/producent',
                                    'external/jquery.validate',
                                    'external/jquery.validate.add',
                                    'external/jquery.validate.polish',
                                    'validation',
                                    'validation/producent'));

        $model = $this->createModel('Producent');
        $result['data'] = $model->selectAll();

        return $result;
    }

    /**
     * Informacje o producencie
     * @param int $id
     * @return array
     * @throws \Exceptions\Application
     */
    public function showOne($id)
    {
        $this->view->setTemplate('Producent/showOne');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array('external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/producent'));
        $model = $this->createModel('Producent');
        $result['data'] = $model->selectOneById($id);
        return $result;
    }

    /**
     * Usuwanie producenta
     * @param  int $id
     */
    public function delete($id)
    {
        $this->deleteOne($id);
        $this->redirect('producent/');
    }

    /**
     * Usuwanie kilku producentów na raz
     */
    public function deletePlenty()
    {
        $this->deleteGiven($_POST['ids']);
        $this->redirect('producent/');
    }

    /**
     * Formularz dodawania producenta
     * @return array
     */
    public function form()
    {
        $this->view->setTemplate('Producent/addForm');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array('external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/producent'));
    }

    /**
     * Dodawanie producenta
     * @return void
     * @throws \Exceptions\Application
     * @throws \Exceptions\EmptyValue
     */
    public function add()
    {
        $this->check(['ProducentNazwa'], $_POST);
        if($_POST['ProducentNazwa']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('Producent');
        $id = $model->insert($_POST['ProducentNazwa']);
        FlashMessage::addMessage($id, 'add');
        $this->redirect('producent/');
    }

    /**
     * Edytowanie producenta
     * @return void
     * @throws \Exceptions\Application
     * @throws \Exceptions\EmptyValue
     */
    public function edit()
    {
        $this->check(['id', 'ProducentNazwa'], $_POST);
        if($_POST['ProducentNazwa']=='' && $_POST['id']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('Producent');
        $model->update($_POST['id'], $_POST['ProducentNazwa']);
        $this->redirect("producent/");
    }

}
