<?php
namespace Views;

class ClientView extends View {
    public function  __construct($name){
        parent::__construct();
        $this->templateFolder = "";
        $this->set('active', $name);
        array_push($this->globalJS, 'external/jquery', 'external/jquery-ui', 'external/popper', 'external/bootstrap');
        array_push($this->globalCSS, 'external/bootstrap', 'external/jquery-ui', 'external/font-awesome', 'clientGlobal');
    }
}
