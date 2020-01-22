<?php
namespace Tools;
use PhpRbac\Rbac;

/**
* Klasa do obsługi sesji z Koszykiem
*/
class Basket extends Session {
    // klucze sesji
    public static 	$basketName 		= 'basket';

    private function __construct() {}

    public static function addItem($IdUsluga, $Ilosc) {
        // sprawdzenie istniejącej sesji
        if(parent::check() === true && parent::is(self::$basketName))
        {
            $basket = parent::get(self::$basketName);
            $newUsluga = array($IdUsluga, $Ilosc);
            $basket[] = $newUsluga;
            parent::clear(self::$basketName);
            parent::set(self::$basketName, $basket);
        }
        else if(parent::check() === true)
        {
            $basket = array(array($IdUsluga, $Ilosc));
            parent::set(self::$basketName, $basket);
        }
    }

    public static function removeItem($IdUsluga) {
        $basket = parent::get(self::$basketName);
        foreach ($basket as $key => $value) {
            if($value[0] == $IdUsluga){
                unset($basket[$key]);
                parent::clear(self::$basketName);
                parent::set(self::$basketName, $basket);
                break;
            }
        }
    }

}
