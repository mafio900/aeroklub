<?php
namespace Controllers;

class Oferty extends GlobalController
{

    public function showAll()
    {
        $this->view->setTemplate('Oferty/page');
        $this->view->addCSSSet(array('ofertyPage'));
        $this->view->addJSSet(array());
        
        $model = $this->createModel('Usluga');
        $result['data'] = $model->selectAll();

        return $result;
    }

}
