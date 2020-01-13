<?php
namespace Models;

use PDO;

/**
* Model tabeli rezusluga
*/
class RezUsluga extends PDODatabase
{
    public function __construct()
    {
        $this->table = 'rezusluga';
        parent::__construct();
    }

    /**
    * Metoda wstawiania do tabeli rezusluga
    * @param  string $name
    * @return array
    */
    public function insert($idRezerwacja, $idUsluga, $ilosc, $idSamolot)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        if(!isset($idRezerwacja) && !isset($idUsluga) && !isset($ilosc))
            return 0;
        try	{
            if($idSamolot==0)
            {
                $query = 'INSERT INTO `'.$this->table.'` (`IdRezerwacja`, `IdUsluga`, `Ilosc`)';
                $query .= ' VALUES (:idRezerwacja, :idUsluga, :ilosc)';
            }
            else{
                $query = 'INSERT INTO `'.$this->table.'` (`IdRezerwacja`, `IdUsluga`, `Ilosc`, `IdSamolot`)';
                $query .= ' VALUES (:idRezerwacja, :idUsluga, :ilosc, :idSamolot)';
            }
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':idRezerwacja', $idRezerwacja, PDO::PARAM_INT);
            $stmt->bindValue(':idUsluga', $idUsluga, PDO::PARAM_INT);
            $stmt->bindValue(':ilosc', $ilosc, PDO::PARAM_STR);
            if($idSamolot!=0)
                $stmt->bindValue(':idSamolot', $idSamolot, PDO::PARAM_STR);
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
    * Metoda edytowania tabeli rezusluga
    * @param  int $id
    * @param  string $name
    * @return int
    */
    public function update($id, $idUsluga, $ilosc, $idSamolot)
    {
        $this->testConnection();
        $this->testTable($this->table);

        if(!isset($id) && !isset($idUsluga) && !isset($ilosc))
            return 0;
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            if($idSamolot==0)
                $query .= ' SET IdUsluga = :idUsluga, Ilosc = :ilosc, IdSamolot = null';
            else
                $query .= ' SET IdUsluga = :idUsluga, Ilosc = :ilosc, IdSamolot = :idSamolot';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':idUsluga', $idUsluga, PDO::PARAM_INT);
            $stmt->bindValue(':ilosc', $ilosc, PDO::PARAM_STR);
            if($idSamolot!=0)
                $stmt->bindValue(':idSamolot', $idSamolot, PDO::PARAM_INT);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
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
}
