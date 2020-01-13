<?php

namespace Controllers;

class Main extends GlobalController
{
    function __construct()
    {
        try {
            \Tools\Session::initialize();
            // Routing aplikacji
            $router = \Tools\Router::getRouter();
            $match = $router->match();
            // Kontroler / akcja / parametr_id
            $controller = isset($match['target']['controller'])  ? $match['target']['controller'] : 'User';
            $action     = isset($match['target']['action'])      ? $match['target']['action']     : 'showAll';
            $id         = isset($match['params']['id'])          ? $match['params']['id']         : null;
            // Dodanie do nazwy kontrolera przestrzeni nazw
            $fullController = 'Controllers\\'.$controller;
            // Utworzenie kontrolera (jeśli istnieje)
            if (!class_exists($fullController)) {
                throw new \Exceptions\Application();
            }
            $appController = new $fullController();
            // Utworzenie obiektu widoku

            $appController->view = $this->createView('AdminView', $controller);

            if (\Tools\Access::islogin() !== true) {
              // Logowanie do systemu lub rejestracja
              if ($controller === 'Access' && (
                      $action === 'login'   ||
                      $action === 'add'     ||
                      $action === 'regForm' ||
                      $action === 'logForm' )) {
                  $result = $appController->$action();
              } else {
                  //\Tools\FlashMessage::addWarning(\Messages\Warning::$nologin);
                  if (preg_match('/^ajax/', $action) === 1) // Zapytanie asynchroniczne
                    $appController->view->setTemplate('ajaxModals/notAllow');
                  else // To nie jest zapytanie asynchroniczne
                    $this->redirect('formularz-logowania/');
              }
        	}
            else {
                // Sprawdzamy, czy akcja kontrolera istnieje
                if (!method_exists($appController, $action)) {
                    throw new \Exceptions\Application();
                }
                // Uruchamiamy akcję kontrolera
                $result = $appController->$action($id);
                $appController->view->set('name', $_SESSION['name']);
            }

            // Przekazujemy zwrócone dane do widoku
            $appController->view->setData($result);
            // Renderujemy widok
            $appController->view->render();
        } catch(\Exceptions\DatabaseConnection $e) {
            d($e);
            //$this->redirect('404.html');
        } catch(\Exceptions\General $e) {
            d($e);
            //$this->redirect('404.html');
        } catch(\Exception $e) {
            //$this->redirect('404.html');
        }
    }

}
