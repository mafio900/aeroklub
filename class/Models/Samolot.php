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
        if( !isset($idProducent) ||
            $idProducent == '' ||
            !is_numeric($idProducent) ||
            !isset($model) ||
            $model == '' ||
            !preg_match('/^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $model) ||
            strlen($model) > 100 ||
            !isset($rejestracja) ||
            $rejestracja == '' ||
            !preg_match('/^([A-Z]{2}-[A-Z]{3})|([A-Z]{2}-[0-9]{4})$/', $rejestracja) ||
            ($opis != '' && strlen($opis) > 100 ) ||
            ($opis != '' && !preg_match('/^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $opis) )
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
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
            //throw new \Exceptions\Query($e);
            return -1;
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

        if( !isset($id) ||
            $id == '' ||
            !is_numeric($id) ||
            !isset($idProducent) ||
            $idProducent == '' ||
            !is_numeric($idProducent) ||
            !isset($model) ||
            $model == '' ||
            !preg_match('/^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $model) ||
            strlen($model) > 100 ||
            !isset($rejestracja) ||
            $rejestracja == '' ||
            !preg_match('/^([A-Z]{2}-[A-Z]{3})|([A-Z]{2}-[0-9]{4})$/', $rejestracja) ||
            ($opis != '' && strlen($opis) > 100 ) ||
            ($opis != '' && !preg_match('/^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $opis) )
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
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
            //throw new \Exceptions\Query($e);
            return -1;
        }
        return $id;
    }
}
