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

    public static function addItem($IdItem) {
        // sprawdzenie istniejącej sesji
        if(parent::check() === true && parent::is($basketName))
        {
            $basket = parent::get($basketName);
            $basket[] = $IdItem
            self::clearBasket();
            parent::set(self::$basketName, $basket);
        }
        else if(parent::check() === true)
        {
            $basket = array($IdItem);
            parent::set(self::$basketName, $basket);
        }
    }

    public static function removeItem($IdItem) {
        $basket = parent::get($basketName);
        foreach ($basket as $key => $value) {
            if($value == $IdItem){
                unset($basket[$key]);
                self::clearBasket();
                parent::set(self::$basketName, $basket);
                break;
            }
        }
    }

    public static function clearBasket(){
        parent::clear($basketName);
    }

}
