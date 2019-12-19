<?php
namespace Models;

use PDO;

/**
 * Model producentów
 */
class Producent extends PDODatabase
{
    public function __construct()
    {
        $this->table = 'producent';
        parent::__construct();
    }

    /**
     * Metoda wstawiania do bazy danych producenta
     * @param  string $name
     * @return array
     */
    public function insert($name)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        if(!isset($name))
            throw new \Exceptions\EmptyValue;
        try	{
            $query = 'INSERT INTO `'.$this->table.'` (`ProducentNazwa`)';
            $query .= ' VALUES (:name)';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
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
     * Metoda edytowania producenta w bazie danych
     * @param  int $id
     * @param  string $name
     * @return int
     */
    public function update($id, $name)
    {
        $this->testConnection();
        $this->testTable($this->table);

        if(!isset($id) && !isset($name))
            throw new \Exceptions\EmptyValue;
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            $query .= ' SET ProducentNazwa = :name';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
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
