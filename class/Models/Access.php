<?php
namespace Models;

use PDO;

/**
* Obsługa procesu logowania
*/
class Access extends PDODatabase {
    /**
    * logowanie do systemu
    */
    public function login($login, $password) {
        $data = null;
        try	{
            $query = 'SELECT * FROM `user` WHERE `Login` = :login';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':login', $login, PDO::PARAM_STR);
            if($stmt->execute()) {
                $data = $stmt->fetchAll()[0];
                //d($data);
            }
            $stmt->closeCursor();
        } catch(\PDOException $e) {
            throw new \Exceptions\Query($e);
        }

        if($data){
            // Poprawne zalogowanie się użytkownika
            if(password_verify($password, $data['Password'])){
                //zainicjalizowanie sesji
                \Tools\Access::login($login, $data['Nazwisko'].' '.$data['Imie'] , $data['id']);
                return true;
            }
        }
        return false;
    }

    /**
    * Wylogowanie użytkownika z systemu
    */
    public function logout(){
        \Tools\Access::logout();
    }
}
