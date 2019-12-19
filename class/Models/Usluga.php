<?php
namespace Models;

use PDO;

/**
 * Model uslug
 */
class Usluga extends PDODatabase
{
    public function __construct()
    {
        $this->table = 'usluga';
        parent::__construct();
    }

    /**
     * Metoda wstawiania do bazy danych uslugi
     * @param  string $name
     * @param  string $cena
     * @param  string $jednostka
     * @param  string $opis
     * @return array
     */
    public function insert($name, $cena, $jednostka, $opis)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        if(!isset($name) && !isset($cena) && !isset($jednostka))
            throw new \Exceptions\EmptyValue;
        try	{
            $query = 'INSERT INTO `'.$this->table.'` (`UslugaNazwa`, `CenaJedn`, `JednMiary`, `Opis`)';
            $query .= ' VALUES (:name, :cena, :jednostka, :opis)';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':cena', $cena, PDO::PARAM_STR);
            $stmt->bindValue(':jednostka', $jednostka, PDO::PARAM_STR);
            $stmt->bindValue(':opis', $opis, PDO::PARAM_STR);
            if($stmt->execute()) {
                $id = $this->pdo->lastInsertId();
            }
            $stmt->closeCursor();
        } catch(\PDOException $e) {
            throw new \Exceptions\Query($e);
        }
        return $id;
    }

    /**
     * Metoda edytowania statusu w bazie danych
     * @param  int $id
     * @param  string $name
     * @return int
     */
    public function update($id, $name, $cena, $jednostka, $opis)
    {
        $this->testConnection();
        $this->testTable($this->table);

        if(!isset($id) && !isset($name) && !isset($cena) && !isset($jednostka))
            throw new \Exceptions\EmptyValue;
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            $query .= ' SET UslugaNazwa = :name, CenaJedn = :cena, JednMiary = :jednostka, Opis = :opis';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':cena', $cena, PDO::PARAM_STR);
            $stmt->bindValue(':jednostka', $jednostka, PDO::PARAM_STR);
            $stmt->bindValue(':opis', $opis, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            if($stmt->execute()) {
                $id = $this->pdo->lastInsertId();
            }
            $stmt->closeCursor();
        } catch(\PDOException $e) {
            throw new \Exceptions\Query($e);
        }
        return $id;
    }
}
