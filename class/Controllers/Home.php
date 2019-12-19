<?php
namespace Controllers;

/**
 * Kontroller rezerwacji
 */
class Home extends GlobalController
{

    /**
     * Informacje wszystkich rezerwacjach
     * @return array
     */
    public function showAll()
    {
        $this->view->setTemplate('Home/page');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array());
    }

}
