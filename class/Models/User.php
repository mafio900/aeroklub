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
        if(!isset($imie) && !isset($nazwisko) && !isset($pesel) && !isset($ulica) && !isset($nrDomu)
        && !isset($miejscowosc) && !isset($kodPocztowy) && !isset($nrTelefonu) && !isset($ranga) && !isset($login) && !isset($password))
            return 0;
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

        if(!isset($id) && !isset($imie) && !isset($nazwisko) && !isset($pesel) && !isset($ulica) && !isset($nrDomu)
        && !isset($miejscowosc) && !isset($kodPocztowy) && !isset($nrTelefonu) && !isset($ranga) && !isset($login) && !isset($password))
            return 0;
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
}
