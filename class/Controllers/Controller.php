<?php
namespace Controllers;

use \Config\Application\Config as Conf;

abstract class Controller
{
    /**
    * funkcja przekierowywująca akcję na inną
    * @param  string $url adres przekierowania
    */
    public function redirect($url)
    {
        \Tools\Session::set('warning', \Tools\FlashMessage::getWarning());
        \Tools\Session::set('success', \Tools\FlashMessage::getSuccess());
        if(preg_match('/^http:/', $url) === 1)
            header('location: '.$url);
        else
            header('location: '.Conf::$protocol.$_SERVER["SERVER_NAME"].':'.Conf::$port.'/'.Conf::$subdir.$url);
        exit(0);
    }

    /**
    * zwraca nowy obiekt modelu
    * @param  string $name nazwa typu modelu
    * @return Model obiekt modelu
    */
    public function createModel($name)
    {
        $fullname = 'Models\\'.$name;
        if(!class_exists($fullname))
            throw new \Exceptions\Application();
        return new $fullname();

    }
    /**
    * zwraca nowy obiekt widoku
    * @param  string $name nazwa typu widoku
    * @return View obiekt widoku
    */
    public function createView($name, $controller)
    {
        $fullname = 'Views\\'.$name;
        if(!class_exists($fullname))
            throw new \Exceptions\Application();
        $view = new $fullname($controller);
        $view->setAssets();
        return $view;
    }

    /**
    * sprawdza, czy tablica inputArray posiada ustawione wszystkie klucze
    * @param  array $keys       tablica kluczy
    * @param  array $inputArray sprawdzana tablica
    * @return array             uzupełniona tablica
    */
    protected function check($keys, &$inputArray)
    {
        if(is_array($inputArray)) {
            foreach ($keys as $value) {
                if(!array_key_exists($value, $inputArray))
                    $inputArray[$value] = null;
            }
        }
    }

    /**
    * filtrowanie danych wejściowych pod kątem niebezpiecznych danych
    * @param  mixed $var
    * @return mixed
    */
    public function protectXss($var) {
        if(\is_array($var))
        foreach ($var as &$value) {
        $value = $this->protectXss($value);
        }
        else
        $var = $this->checkVariable($var);
        return $var;
    }

    /**
    * filtrowanie stringów pod kątem niebezpiecznych danych
    * @param  string $var
    * @return string
    */
    public function checkVariable($var) {
        return \is_string($var) ? \htmlspecialchars($var) : $var;
    }

    public function getPost($key, $default = null) {
        return isset($_POST[$key]) ? $this->protectXss($_POST[$key]) : $default;
    }

    public function getGet($key, $default = null) {
        return isset($_GET[$key]) ? $this->protectXss($_GET[$key]) : $default;
    }

}
