<?php
namespace Controllers;

class Home extends GlobalController
{

    public function showAll()
    {
        $this->view->setTemplate('Home/page');
        $this->view->addCSSSet(array('homePage'));
        $this->view->addJSSet(array('external/parallax', 'home'));
    }

}
