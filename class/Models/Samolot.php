<?php
namespace Models;

use PDO;

/**
 * Model samolotów
 */
class Samolot extends PDODatabase
{
    public function __construct()
    {
        $this->table = 'samolot';
        parent::__construct();
    }

    /**
     * Metoda wstawiania do bazy danych samolotów
     * @param  string $name
     * @return array
     */
    public function insert($idProducent, $model, $rejestracja, $opis)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        if(!isset($idProducent) && !isset($model) && !isset($rejestracja))
            throw new \Exceptions\EmptyValue;
        try	{
            $query = 'INSERT INTO `'.$this->table.'` (`IdProducent`, `Model`, `Rejestracja`, `Opis`)';
            $query .= ' VALUES (:idProducent, :model, :rejestracja, :opis)';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':idProducent', $idProducent, PDO::PARAM_INT);
            $stmt->bindValue(':model', $model, PDO::PARAM_STR);
            $stmt->bindValue(':rejestracja', $rejestracja, PDO::PARAM_STR);
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
     * Metoda edytowania samolotu w bazie danych
     * @param  int $id
     * @param  string $name
     * @return int
     */
    public function update($id, $idProducent, $model, $rejestracja, $opis)
    {
        $this->testConnection();
        $this->testTable($this->table);

        if(!isset($id) && !isset($idProducent) && !isset($model) && !isset($rejestracja))
            throw new \Exceptions\EmptyValue;
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            $query .= ' SET idProducent = :idProducent, Model = :model, Rejestracja = :rejestracja, Opis = :opis';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':idProducent', $idProducent, PDO::PARAM_INT);
            $stmt->bindValue(':model', $model, PDO::PARAM_STR);
            $stmt->bindValue(':rejestracja', $rejestracja, PDO::PARAM_STR);
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
