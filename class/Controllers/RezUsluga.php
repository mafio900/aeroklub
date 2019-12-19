<?php
namespace Controllers;

/**
 * Kontroller tabeli rezusluga
 */
class RezUsluga extends GlobalController
{

    public function form($id)
    {
        $this->view->setTemplate('RezUsluga/addForm');
        $this->view->addCSSSet(array('external/select2'));
        $this->view->addJSSet(array('external/select2', 'external/pl', 'select2', 'external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/rezusluga'));

        $model = $this->createModel('Usluga');
        $result['uslugi'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('Samolot');
        $result['samoloty'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());

        $result['data'] = array('id' => $id);
        return $result;
    }

    /**
     * Usuwanie z tabeli rezusluga
     * @param  int $id
     * @return array
     */
    public function delete($id)
    {
        $model = $this->createModel('RezUsluga');
        $idRez = $model->selecteOneById($id)['IdRezerwacja'];
        $this->deleteOne($id);
        $this->redirect('rezerwacja/'.$idRez);
    }

    /**
     * Usuwanie kilku rezerwacji na raz
     */
    public function deletePlenty($id)
    {
        $this->deleteGiven($_POST['ids']);
        $this->redirect('rezerwacja/'.$id);
    }

    /**
     * Dodawanie producenta
     * @return void
     */
    public function add()
    {
        $this->check([`id`, `IdUsluga`, `Ilosc`, `IdSamolot`], $_POST);
        if($_POST['id']=='' && $_POST['IdUsluga']=='' && $_POST['Ilosc']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('RezUsluga');
        $model->insert($_POST['id'], $_POST['IdUsluga'], $_POST['Ilosc'], $_POST['IdSamolot']);
        $this->redirect('rezerwacja/'.$_POST['id']);
    }

    /**
     * Edytowanie producenta
     * @return void
     */
    public function edit()
    {
        $this->check(['id', `IdUsluga`, `Ilosc`, `IdSamolot`], $_POST);
        if($_POST['IdUsluga']=='' && $_POST['Ilosc']=='' && $_POST['id']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('RezUsluga');
        $model->update($_POST['id'], $_POST['IdUsluga'], $_POST['Ilosc'], $_POST['IdSamolot']);
        $this->redirect('rezusluga/formedytuj/'.$_POST['id']);
    }

    public function editForm($id)
    {
        $this->view->setTemplate('RezUsluga/editForm');
        $this->view->addCSSSet(array('external/select2'));
        $this->view->addJSSet(array('external/select2', 'external/pl', 'select2', 'external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'validation', 'validation/rezusluga'));

        $model = $this->createModel('RezUsluga');
        $result['data'] = $model->selecteOneById($id);

        $model = $this->createModel('Samolot');
        $result['samoloty'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('Usluga');
        $result['uslugi'] = $model->transferByColumn($model->selectAll());

        return $result;
    }

}
