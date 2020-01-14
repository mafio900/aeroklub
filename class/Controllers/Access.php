<?php
namespace Controllers;

use \Tools\FlashMessage;

class Access extends Controller {
    // formularz logowania
    public function logForm(){
        $this->view->setTemplate('Access/logForm');
    }
    // loguje do systemu
    public function login(){
        $model = $this->createModel('Access');
        if($this->getPost('login')  !== null && $this->getPost('password') !== null) {
            $ranga = $model->login($this->getPost('login'), $this->getPost('password'));
            if($ranga == 'Klient' ){
                $this->redirect('');
            }
            else if($ranga == 'Pracownik'){
                $this->redirect('user/');
            }
        }
        FlashMessage::addMessage(-1, 'login');
        $this->redirect('formularz-logowania/');
    }
    // wylogowywuje z systemu
    public function logout(){
        $this->createModel('Access')->logout();
        $this->redirect('');
    }
}
