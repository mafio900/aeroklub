<?php
namespace Controllers;

class Flota extends GlobalController
{

    public function showAll()
    {
        $this->view->setTemplate('Home/page');
        $this->view->addCSSSet(array('homePage'));
        $this->view->addJSSet(array('external/parallax', 'home'));
    }

}
