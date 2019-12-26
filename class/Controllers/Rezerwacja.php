<?php
namespace Controllers;

/**
 * Kontroller rezerwacji
 */
class Rezerwacja extends GlobalController
{

    /**
     * Informacje wszystkich rezerwacjach
     * @return array
     */
    public function showAll()
    {
        $this->view->setTemplate('Rezerwacja/showAll');
        $this->view->addCSSSet(array('external/datatables'));
        $this->view->addJSSet(array('external/datatables', 'dataTables'));
        $model = $this->createModel('Rezerwacja');
        $result['data'] = $model->selectAll();

        //$model = $this->createModel('Status');
        //$result['statusy'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('User');
        $result['users'] = $model->transferByColumn($model->selectAll());
        $model = $this->createModel('Status');
        $result['statusy'] = $model->transferByColumn($model->selectAll());

        return $result;
    }

    /**
     * Informacje o rezerwacji
     * @param  int $id
     * @return array
     */
    public function showOne($id)
    {
        $this->view->setTemplate('Rezerwacja/showOne');
        $this->view->addCSSSet(array('external/datatables', 'external/select2', 'external/daterangepicker'));
        $this->view->addJSSet(array('external/datatables','external/select2', 'external/pl', 'external/moment', 'external/daterangepicker', 'dataTables', 'select2', 'datapicker', 'external/jquery.validate', 'external/jquery.validate.add', 'external/jquery.validate.polish', 'external/date-validator', 'validation', 'validation/rezerwacja'));
        $model = $this->createModel('Rezerwacja');
        $result['data'] = $model->selectOneById($id);

        $model = $this->createModel('Status');
        $result['statusy'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('RezUsluga');
        $result['rezuslugi'] = $model->transferByColumn($model->selectAllOrderBy(null, 'ASC', 'IdRezerwacja', $id, null));

        $model = $this->createModel('Samolot');
        $result['samoloty'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('Usluga');
        $result['uslugi'] = $model->transferByColumn($model->selectAll());

        $model = $this->createModel('User');
        $result['pracownicy'] = $model->transferByColumn($model->selectAllOrderBy(null, 'ASC', 'Ranga', 'Pracownik', null));
        $result['klienci'] = $model->transferByColumn($model->selectAllOrderBy(null, 'ASC', 'Ranga', 'Klient', null));

        return $result;
    }

    /**
     * Usuwanie rezerwacji
     * @param  int $id
     * @return array
     */
    public function delete($id)
    {
        $this->deleteOne($id);
        $this->redirect('rezerwacja/');
    }

    /**
     * Usuwanie kilku rezerwacji na raz
     */
    public function deletePlenty()
    {
        $this->deleteGiven($_POST['ids']);
        $this->redirect('rezerwacja/');
    }

    /**
     * Formularz dodawania rezerwacji
     * @return array
     */
    public function form()
    {
        $this->view->setTemplate('Rezerwacja/addForm');
        $this->view->addCSSSet(array('external/select2', 'external/daterangepicker'));
        $this->view->addJSSet(array('external/select2', 'external/pl', 'external/moment', 'external/daterangepicker', 'select2', 'datapicker', 'external/jquery.validate', 'external/jquery.validate.add', 'external/date-validator', 'validation', 'validation/rezerwacja'));

        $model = $this->createModel('User');
        $result['pracownicy'] = $model->transferByColumn($model->selectAllOrderBy(null, 'ASC', 'Ranga', 'Pracownik', null));
        $result['klienci'] = $model->transferByColumn($model->selectAllOrderBy(null, 'ASC', 'Ranga', 'Klient', null));

        return $result;
    }

    /**
     * Dodawanie rezerwacji
     * @return void
     */
    public function add()
    {
        $this->check(['TerminRealizacji', 'IdKlient', 'IdPracownik'], $_POST);
        if($_POST['TerminRealizacji']=='' && $_POST['IdKlient']=='' && $_POST['IdPracownik']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('Rezerwacja');
        $id = $model->insert($_POST['TerminRealizacji'], $_POST['IdKlient'], $_POST['IdPracownik']);
        $this->redirect('rezerwacja/'.$id);
    }

    /**
     * Edytowanie rezerwacji
     * @return void
     */
    public function edit()
    {
        $this->check(['id', 'TerminRealizacji', 'KwotaLaczna', 'IdStatus', 'IdKlient', 'IdPracownik'], $_POST);
        if($_POST['TerminRealizacji']=='' && $_POST['KwotaLaczna']=='' && $_POST['IdStatus']=='' && $_POST['IdKlient']=='' && $_POST['IdPracownik']=='' && $_POST['id']=='')
        {
            throw new \Exceptions\EmptyValue;
        }
        $model = $this->createModel('Rezerwacja');
        $model->update($_POST['id'], $_POST['TerminRealizacji'], $_POST['KwotaLaczna'], $_POST['IdStatus'], $_POST['IdKlient'], $_POST['IdPracownik']);
        $this->redirect("rezerwacja/".$_POST['id']);
    }

}
