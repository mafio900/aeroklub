<?php
namespace Models;

use PDO;

/**
 * Model statusów rezerwacji
 */
class Status extends PDODatabase
{
    public function __construct()
    {
        $this->table = 'status';
        parent::__construct();
    }

    /**
     * Metoda wstawiania do bazy danych statusu
     * @param  string $name
     * @return array
     */
    public function insert($name)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        if(!isset($name))
            return 0;
        try	{
            $query = 'INSERT INTO `'.$this->table.'` (`StatusNazwa`)';
            $query .= ' VALUES (:name)';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
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
    public function update($id, $name)
    {
        $this->testConnection();
        $this->testTable($this->table);

        if(!isset($id) && !isset($name))
            return 0;
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            $query .= ' SET StatusNazwa = :name';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
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
