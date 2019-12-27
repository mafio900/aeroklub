<?php
namespace Config\Application;

/**
* Klasa konfiguracyjna przyjaznych adresów
*/
final class Routing {
    public static $routes = [
    ['GET','/', array('controller' => 'User', 'action' => 'showAll'), 'home'],
    //konfiguracja User
    ['GET','/user/?', array('controller' => 'User', 'action' => 'showAll'), 'user'],
    ['GET','/user/[i:id]/?', array('controller' => 'User', 'action' => 'ajaxEditForm'), 'user_showOne'],
    ['GET','/user/usun/[i:id]?', array('controller' => 'User', 'action' => 'delete'), 'user_delete'],
    ['POST','/user/usunwiele/?', array('controller' => 'User', 'action' => 'deletePlenty'), 'user_usunwiele'],
    ['POST','/user/edytuj/?', array('controller' => 'User', 'action' => 'edit'), 'user_edit'],
    ['GET','/user/formularz/?', array('controller' => 'User', 'action' => 'ajaxAddForm'), 'user_form'],
    ['POST','/user/dodaj/?', array('controller' => 'User', 'action' => 'add'), 'user_add'],
    //konfiguracja Producent
    ['GET','/producent/?', array('controller' => 'Producent', 'action' => 'showAll'), 'producent'],
    ['GET','/producent/[i:id]/?', array('controller' => 'Producent', 'action' => 'ajaxEditForm'), 'producent_showOne'],
    ['GET','/producent/usun/[i:id]?', array('controller' => 'Producent', 'action' => 'delete'), 'producent_delete'],
    ['POST','/producent/usunwiele/?', array('controller' => 'Producent', 'action' => 'deletePlenty'), 'producent_usunwiele'],
    ['POST','/producent/edytuj/?', array('controller' => 'Producent', 'action' => 'edit'), 'producent_edit'],
    ['GET','/producent/formularz/?', array('controller' => 'Producent', 'action' => 'ajaxAddForm'), 'producent_form'],
    ['POST','/producent/dodaj/?', array('controller' => 'Producent', 'action' => 'add'), 'producent_add'],
    //konfiguracja Samolot
    ['GET','/samolot/?', array('controller' => 'Samolot', 'action' => 'showAll'), 'samolot'],
    ['GET','/samolot/[i:id]/?', array('controller' => 'Samolot', 'action' => 'ajaxEditForm'), 'samolot_showOne'],
    ['GET','/samolot/usun/[i:id]?', array('controller' => 'Samolot', 'action' => 'delete'), 'samolot_delete'],
    ['POST','/samolot/usunwiele/?', array('controller' => 'Samolot', 'action' => 'deletePlenty'), 'samolot_usunwiele'],
    ['POST','/samolot/edytuj/?', array('controller' => 'Samolot', 'action' => 'edit'), 'samolot_edit'],
    ['GET','/samolot/formularz/?', array('controller' => 'Samolot', 'action' => 'ajaxAddForm'), 'samolot_form'],
    ['POST','/samolot/dodaj/?', array('controller' => 'Samolot', 'action' => 'add'), 'samolot_add'],
    //konfiguracja Status
    ['GET','/status/?', array('controller' => 'Status', 'action' => 'showAll'), 'status'],
    ['GET','/status/[i:id]/?', array('controller' => 'Status', 'action' => 'ajaxEditForm'), 'status_showOne'],
    ['GET','/status/usun/[i:id]?', array('controller' => 'Status', 'action' => 'delete'), 'status_delete'],
    ['POST','/status/usunwiele/?', array('controller' => 'Status', 'action' => 'deletePlenty'), 'status_usunwiele'],
    ['POST','/status/edytuj/?', array('controller' => 'Status', 'action' => 'edit'), 'status_edit'],
    ['GET','/status/formularz/?', array('controller' => 'Status', 'action' => 'ajaxAddForm'), 'status_form'],
    ['POST','/status/dodaj/?', array('controller' => 'Status', 'action' => 'add'), 'status_add'],
    //konfiguracja Usluga
    ['GET','/usluga/?', array('controller' => 'Usluga', 'action' => 'showAll'), 'usluga'],
    ['GET','/usluga/[i:id]/?', array('controller' => 'Usluga', 'action' => 'ajaxEditForm'), 'usluga_showOne'],
    ['GET','/usluga/usun/[i:id]?', array('controller' => 'Usluga', 'action' => 'delete'), 'usluga_delete'],
    ['POST','/usluga/usunwiele/?', array('controller' => 'Usluga', 'action' => 'deletePlenty'), 'usluga_usunwiele'],
    ['POST','/usluga/edytuj/?', array('controller' => 'Usluga', 'action' => 'edit'), 'usluga_edit'],
    ['GET','/usluga/formularz/?', array('controller' => 'Usluga', 'action' => 'ajaxAddForm'), 'usluga_form'],
    ['POST','/usluga/dodaj/?', array('controller' => 'Usluga', 'action' => 'add'), 'usluga_add'],
    //konfiguracja Rezerwacja
    ['GET','/rezerwacja/?', array('controller' => 'Rezerwacja', 'action' => 'showAll'), 'rezerwacja'],
    ['GET','/rezerwacja/[i:id]/?', array('controller' => 'Rezerwacja', 'action' => 'showOne'), 'rezerwacja_showOne'],
    ['GET','/rezerwacja/usun/[i:id]?', array('controller' => 'Rezerwacja', 'action' => 'delete'), 'rezerwacja_delete'],
    ['POST','/rezerwacja/usunwiele/?', array('controller' => 'Rezerwacja', 'action' => 'deletePlenty'), 'rezerwacja_usunwiele'],
    ['POST','/rezerwacja/edytuj/?', array('controller' => 'Rezerwacja', 'action' => 'edit'), 'rezerwacja_edit'],
    ['GET','/rezerwacja/formularz/?', array('controller' => 'Rezerwacja', 'action' => 'ajaxAddForm'), 'rezerwacja_form'],
    ['POST','/rezerwacja/dodaj/?', array('controller' => 'Rezerwacja', 'action' => 'add'), 'rezerwacja_add'],
    //konfiguracja RezUsluga
    ['GET','/rezusluga/usun/[i:id]?', array('controller' => 'RezUsluga', 'action' => 'delete'), 'rezusluga_delete'],
    ['POST','/rezusluga/usunwiele/[i:id]?', array('controller' => 'RezUsluga', 'action' => 'deletePlenty'), 'rezusluga_usunwiele'],
    ['POST','/rezusluga/edytuj/?', array('controller' => 'RezUsluga', 'action' => 'edit'), 'rezusluga_edit'],
    ['GET','/rezusluga/formularz/[i:id]?', array('controller' => 'RezUsluga', 'action' => 'ajaxAddForm'), 'rezusluga_form'],
    ['GET','/rezusluga/formedytuj/[i:id]?', array('controller' => 'RezUsluga', 'action' => 'ajaxEditForm'), 'rezusluga_editForm'],
    ['POST','/rezusluga/dodaj/?', array('controller' => 'RezUsluga', 'action' => 'add'), 'rezusluga_add'],

    //testy
    ['GET','/test/[i:id]?', array('controller' => 'Producent', 'action' => 'showJson'), 'producent_json']

    ];
}
