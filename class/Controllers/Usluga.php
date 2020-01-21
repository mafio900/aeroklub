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
        $counter = $this->deleteOne($id);
        FlashMessage::addMessage($counter, 'delete');
        $this->redirect('usluga/');
    }

    /**
     * Usuwanie kilku usług na raz
     */
    public function deletePlenty()
    {
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
        $model = $this->createModel('Usluga');
        $id = $model->insert($_POST['UslugaNazwa'], $_POST['CenaJedn'], $_POST['JednMiary'], $_POST['Opis']);
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
        $model = $this->createModel('Usluga');
        $id = $model->update($_POST['id'], $_POST['UslugaNazwa'], $_POST['CenaJedn'], $_POST['JednMiary'], $_POST['Opis']);
        FlashMessage::addMessage($id, 'update');
        $this->redirect("usluga/");
    }

}
