<?php
namespace Models;

use PDO;

/**
 * Model użytkowników
 */
class User extends PDODatabase
{
    public function __construct()
    {
        $this->table = 'user';
        parent::__construct();
    }

    /**
    * Metoda wstawiania do bazy danych użytkowników
    * @param  string $name
    * @return array
    */
    public function insert($imie, $nazwisko, $pesel, $ulica, $nrDomu, $nrLokalu, $miejscowosc, $kodPocztowy, $nrTelefonu, $email, $ranga, $login, $password)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        $peselFlag = false;
        if(isset($pesel) && preg_match('/^[0-9]{11}$/', $pesel)){
            $p = str_split($pesel);
            $sum = (
                1*$p[0] +
                3*$p[1] +
                7*$p[2] +
                9*$p[3] +
                1*$p[4] +
                3*$p[5] +
                7*$p[6] +
                9*$p[7] +
                1*$p[8] +
                3*$p[9]
            )%10;
            if($sum == 0)
                $sum = 10;
            $sum = 10 - $sum;
            if($sum == $p[10])
                $peselFlag = true;
        }
        if( !$peselFlag ||
            !isset($imie) ||
            $imie == '' ||
            strlen($imie) > 50 ||
            !preg_match('/^[^\s][a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ]*$/', $imie) ||
            !isset($nazwisko) ||
            $nazwisko == '' ||
            strlen($nazwisko) > 50 ||
            !preg_match('/^[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃÄäÖöÜüß]{2,}\s?(-?\s?[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃÄäÖöÜüß]{2,})?$/', $nazwisko) ||
            !isset($ulica) ||
            $ulica == '' ||
            strlen($ulica) > 50 ||
            !preg_match('/^[^\s][a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $ulica) ||
            !isset($nrDomu) ||
            $nrDomu == '' ||
            strlen($nrDomu) > 10 ||
            !preg_match('/^[0-9]{1}[a-zA-Z0-9ąĄęĘóśŚÓłŁżŻźŹćĆńŃ\-\s\/]*$/', $nrDomu) ||
            ($nrLokalu != '' && strlen($nrLokalu) > 10 ) ||
            ($nrLokalu != '' && !preg_match('/^[0-9]{1}[a-zA-Z0-9ąĄęĘóśŚÓłŁżŻźŹćĆńŃ\-\s\/]*$/', $nrLokalu) ) ||
            !isset($miejscowosc) ||
            $miejscowosc == '' ||
            strlen($miejscowosc) > 50 ||
            !preg_match('/^[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃÄäÖöÜüß]{2,}((\s?-\s?|\s)[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃÄäÖöÜüß]{2,}\.?)*$/', $miejscowosc) ||
            !isset($kodPocztowy) ||
            $kodPocztowy == '' ||
            !preg_match('/^[0-9]{2}-[0-9]{3}$/', $kodPocztowy) ||
            !isset($nrTelefonu) ||
            $nrTelefonu == '' ||
            !preg_match('/^(?:(?:(?:\+|00)?48)|(?:\(\+?48\)))?(?:1[2-8]|2[2-69]|3[2-49]|4[1-68]|5[0-9]|6[0-35-9]|[7-8][1-9]|9[145])\d{7}$/', $nrTelefonu) ||
            !isset($ranga) ||
            $ranga == '' ||
            strlen($ranga) > 20 ||
            !preg_match('/^[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ]+$/', $ranga) ||
            !isset($login) ||
            $login == '' ||
            strlen($login) > 30 ||
            !preg_match('/^[^\s][0-9a-zA-Z]*$/', $login) ||
            !isset($password) ||
            $password == '' ||
            (strlen($password) > 30 || strlen($password) < 4) ||
            !preg_match('/^[^\s][0-9a-zA-Z\_\!\@\#\$\%\^\&\*\-]*$/', $password)
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
        try	{
            $query = 'INSERT INTO `'.$this->table.'` (`Imie`, `Nazwisko`, `Pesel`, `Ulica`, `NrDomu`, `NrLokalu`, `Miejscowosc`, `KodPocztowy`, `NrTelefonu`, `Email`, `Ranga`, `Login`, `Password`)';
            $query .= ' VALUES (:imie, :nazwisko, :pesel, :ulica, :nrDomu, :nrLokalu, :miejscowosc, :kodPocztowy, :nrTelefonu, :email, :ranga, :login, :password)';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':imie', $imie, PDO::PARAM_STR);
            $stmt->bindValue(':nazwisko', $nazwisko, PDO::PARAM_STR);
            $stmt->bindValue(':pesel', $pesel, PDO::PARAM_STR);
            $stmt->bindValue(':ulica', $ulica, PDO::PARAM_STR);
            $stmt->bindValue(':nrDomu', $nrDomu, PDO::PARAM_STR);
            $stmt->bindValue(':nrLokalu', $nrLokalu, PDO::PARAM_STR);
            $stmt->bindValue(':miejscowosc', $miejscowosc, PDO::PARAM_STR);
            $stmt->bindValue(':kodPocztowy', $kodPocztowy, PDO::PARAM_STR);
            $stmt->bindValue(':nrTelefonu', $nrTelefonu, PDO::PARAM_STR);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->bindValue(':ranga', $ranga, PDO::PARAM_STR);
            $stmt->bindValue(':login', $login, PDO::PARAM_STR);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindValue(':password', $hash, PDO::PARAM_STR);
            if($stmt->execute()) {
                $id = $this->pdo->lastInsertId();
        }
        $stmt->closeCursor();
        } catch(\PDOException $e) {
            //throw new \Exceptions\Query($e);
            return -1;
        }
        return $id;
    }

    /**
    * Metoda edytowania statusu w bazie danych
    * @param  int $id
    * @param  string $name
    * @return int
    */
    public function update($id, $imie, $nazwisko, $pesel, $ulica, $nrDomu, $nrLokalu, $miejscowosc, $kodPocztowy, $nrTelefonu, $email, $ranga, $login, $password)
    {
        $this->testConnection();
        $this->testTable($this->table);
        $peselFlag = false;
        if(isset($pesel) && preg_match('/^[0-9]{11}$/', $pesel)){
            $p = str_split($pesel);
            $sum = (
                1*$p[0] +
                3*$p[1] +
                7*$p[2] +
                9*$p[3] +
                1*$p[4] +
                3*$p[5] +
                7*$p[6] +
                9*$p[7] +
                1*$p[8] +
                3*$p[9]
            )%10;
            if($sum == 0)
                $sum = 10;
            $sum = 10 - $sum;
            if($sum == $p[10])
                $peselFlag = true;
        }
        if( !$peselFlag ||
            !isset($id) ||
            $id == '' ||
            !is_numeric($id) ||
            !isset($imie) ||
            $imie == '' ||
            strlen($imie) > 50 ||
            !preg_match('/^[^\s][a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ]*$/', $imie) ||
            !isset($nazwisko) ||
            $nazwisko == '' ||
            strlen($nazwisko) > 50 ||
            !preg_match('/^[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃÄäÖöÜüß]{2,}\s?(-?\s?[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃÄäÖöÜüß]{2,})?$/', $nazwisko) ||
            !isset($ulica) ||
            $ulica == '' ||
            strlen($ulica) > 50 ||
            !preg_match('/^[^\s][a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $ulica) ||
            !isset($nrDomu) ||
            $nrDomu == '' ||
            strlen($nrDomu) > 10 ||
            !preg_match('/^[0-9]{1}[a-zA-Z0-9ąĄęĘóśŚÓłŁżŻźŹćĆńŃ\-\s\/]*$/', $nrDomu) ||
            ($nrLokalu != '' && strlen($nrLokalu) > 10 ) ||
            ($nrLokalu != '' && !preg_match('/^[0-9]{1}[a-zA-Z0-9ąĄęĘóśŚÓłŁżŻźŹćĆńŃ\-\s\/]*$/', $nrLokalu) ) ||
            !isset($miejscowosc) ||
            $miejscowosc == '' ||
            strlen($miejscowosc) > 50 ||
            !preg_match('/^[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃÄäÖöÜüß]{2,}((\s?-\s?|\s)[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃÄäÖöÜüß]{2,}\.?)*$/', $miejscowosc) ||
            !isset($kodPocztowy) ||
            $kodPocztowy == '' ||
            !preg_match('/^[0-9]{2}-[0-9]{3}$/', $kodPocztowy) ||
            !isset($nrTelefonu) ||
            $nrTelefonu == '' ||
            !preg_match('/^(?:(?:(?:\+|00)?48)|(?:\(\+?48\)))?(?:1[2-8]|2[2-69]|3[2-49]|4[1-68]|5[0-9]|6[0-35-9]|[7-8][1-9]|9[145])\d{7}$/', $nrTelefonu) ||
            !isset($ranga) ||
            $ranga == '' ||
            strlen($ranga) > 20 ||
            !preg_match('/^[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ]+$/', $ranga) ||
            !isset($login) ||
            $login == '' ||
            strlen($login) > 30 ||
            !preg_match('/^[^\s][0-9a-zA-Z]*$/', $login) ||
            !isset($password) ||
            $password == '' ||
            (strlen($password) > 30 || strlen($password) < 4) ||
            !preg_match('/^[^\s][0-9a-zA-Z\_\!\@\#\$\%\^\&\*\-]*$/', $password)
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            $query .= ' SET Imie = :imie, Nazwisko = :nazwisko, Pesel = :pesel, Ulica = :ulica, NrDomu = :nrDomu, NrLokalu = :nrLokalu, Miejscowosc = :miejscowosc,
            KodPocztowy = :kodPocztowy, NrTelefonu = :nrTelefonu, Email = :email, Ranga = :ranga, Login = :login, Password = :password';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':imie', $imie, PDO::PARAM_STR);
            $stmt->bindValue(':nazwisko', $nazwisko, PDO::PARAM_STR);
            $stmt->bindValue(':pesel', $pesel, PDO::PARAM_STR);
            $stmt->bindValue(':ulica', $ulica, PDO::PARAM_STR);
            $stmt->bindValue(':nrDomu', $nrDomu, PDO::PARAM_STR);
            $stmt->bindValue(':nrLokalu', $nrLokalu, PDO::PARAM_STR);
            $stmt->bindValue(':miejscowosc', $miejscowosc, PDO::PARAM_STR);
            $stmt->bindValue(':kodPocztowy', $kodPocztowy, PDO::PARAM_STR);
            $stmt->bindValue(':nrTelefonu', $nrTelefonu, PDO::PARAM_STR);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->bindValue(':ranga', $ranga, PDO::PARAM_STR);
            $stmt->bindValue(':login', $login, PDO::PARAM_STR);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindValue(':password', $hash, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            if($stmt->execute()) {
                $id = $stmt->rowCount();
            }
            $stmt->closeCursor();
        } catch(\PDOException $e) {
            //throw new \Exceptions\Query($e);
            return -1;
        }
        return $id;
    }

    public function updatePassword($id, $password)
    {
        $this->testConnection();
        $this->testTable($this->table);
        if( !isset($id) ||
            $id == '' ||
            !is_numeric($id) ||
            !isset($password) ||
            $password == '' ||
            (strlen($password) > 30 || strlen($password) < 4) ||
            !preg_match('/^[^\s][0-9a-zA-Z\_\!\@\#\$\%\^\&\*\-]*$/', $password)
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            $query .= ' SET Password = :password';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindValue(':password', $hash, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            if($stmt->execute()) {
                $id = $stmt->rowCount();
            }
            $stmt->closeCursor();
        } catch(\PDOException $e) {
            //throw new \Exceptions\Query($e);
            return -1;
        }
        return $id;
    }
}
