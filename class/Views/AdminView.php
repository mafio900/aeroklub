<?php
namespace Views;

class AdminView extends View {
    public function  __construct($name){
        parent::__construct();
        $this->templateFolder = "Admin";
        $this->set('active', $name);
        array_push($this->globalJS, 'external/jquery', 'external/jquery-ui', 'external/popper', 'external/bootstrap');
        array_push($this->globalCSS, 'external/bootstrap', 'external/jquery-ui', 'external/font-awesome', 'adminGlobal');
    }

    public function render()
    {
        if(!isset($this->template)) {
        	throw new \Exceptions\TemplateNotFound();
        }
        $this->set('jsFile', $this->js);
        $this->set('cssFile', $this->css);
        //d($this->template);
        try {
        	if(is_file($this->template)) {
        		$this->smarty->display($this->template);
            } else {
	             throw new \Exceptions\TemplateNotFound(null, $this->template);
        	}
        }
        catch(\Exception $e) {
        	//throw new \Exceptions\TemplateNotFound($e, $this->template);
            \Tools\FlashMessage::addMessage(-1, 'templateNotFound');
            \Controllers\Controller::redirect('user/');
        }
    }
}
