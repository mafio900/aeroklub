<?php
namespace Controllers;
use \Tools\FlashMessage;

class Flota extends GlobalController
{

    public function showAll()
    {
        $this->view->setTemplate('Flota/page');
        $this->view->addCSSSet(array('flotaPage'));
        $this->view->addJSSet(array('external/parallax', 'flotaPage'));
        $model = $this->createModel('Samolot');
        $result['data'] = $model->selectAll();
        $model = $this->createModel('Producent');
        $result['producenci'] = $model->transferByColumn($model->selectAll());
        return $result;
    }

}
