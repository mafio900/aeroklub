<?php
namespace Controllers;

use \Tools\FlashMessage;

class Access extends Controller {
    // formularz logowania
    public function logForm(){
        $this->view->setTemplate('Access/logForm');
        $this->view->addCSSSet(array('inputs'));
        $this->view->addJSSet(array('external/jquery.validate',
                                    'external/jquery.validate.add',
                                    'external/jquery.validate.polish',
                                    'validation',
                                    'validation/logform',
                                    'logform'));
    }
    // formularz rejestracji
    public function regForm(){
        $this->view->setTemplate('Access/regForm');
        $this->view->addCSSSet(array('inputs'));
        $this->view->addJSSet(array('external/jquery.validate',
                                    'external/jquery.validate.add',
                                    'external/jquery.validate.polish',
                                    'validation',
                                    'validation/regform',
                                    'regform'));
    }
    // loguje do systemu
    public function login(){
        $model = $this->createModel('Access');
        if($this->getPost('Login')  !== null && $this->getPost('Password') !== null) {
            $ranga = $model->login($this->getPost('Login'), $this->getPost('Password'));
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

    public function register(){
        $this->check(['Imie', 'Nazwisko', 'Pesel', 'Ulica', 'NrDomu', 'NrLokalu', 'Miejscowosc', 'KodPocztowy', 'NrTelefonu', 'Email', 'Ranga', 'Login', 'Password'], $_POST);
        $model = $this->createModel('User');
        $id = $model->insert($_POST['Imie'], $_POST['Nazwisko'], $_POST['Pesel'], $_POST['Ulica'], $_POST['NrDomu'], $_POST['NrLokalu'], $_POST['Miejscowosc'],
        $_POST['KodPocztowy'], $_POST['NrTelefonu'], $_POST['Email'], 'Klient', $_POST['Login'], $_POST['Password']);
        if($id<=0){
            $id = -1;
            FlashMessage::addMessage($id, 'register');
            $this->redirect('formularz-rejestracji/');
        }
        else{
            FlashMessage::addMessage($id, 'register');
            $this->redirect('formularz-logowania/');
        }
    }

    public function checkLogin(){
        $this->check(['Login'], $_POST);
        $c = $this->createModel('Access')->checkLogin($_POST['Login']);
        $this->view->setTemplate('blank');
        if($c){
            echo json_encode(array('id' => 1));
        }
        else{
            echo json_encode(array('id' => 0));
        }
    }

    // wylogowywuje z systemu
    public function logout(){
        $this->createModel('Access')->logout();
        $this->redirect('');
    }
}
