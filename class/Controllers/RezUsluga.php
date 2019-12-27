<?php
namespace Controllers;

/**
 * Kontroller tabeli rezusluga
 */
class RezUsluga extends GlobalController
{

    public function ajaxAddForm($id)
    {
        $this->view->setTemplate('ajaxModals/addRezUsluga');

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
        $idRez = $model->selectOneById($id)['IdRezerwacja'];
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
        $idRez = $model->selectOneById($_POST['id'])['IdRezerwacja'];
        $this->redirect('rezerwacja/'.$idRez);
    }

    public function ajaxEditForm($id)
    {
        $this->view->setTemplate('ajaxModals/editRezUsluga');

        $model = $this->createModel('RezUsluga');
        $result['data'] = $model->selectOneById($id);

        $model = $this->createModel('Samolot');
        $result['samoloty'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('Usluga');
        $result['uslugi'] = $model->transferByColumn($model->selectAll());

        return $result;
    }

}
