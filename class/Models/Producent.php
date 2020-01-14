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
    public function insert($ProducentNazwa)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        if( !isset($ProducentNazwa) ||
            $ProducentNazwa == '' ||
            !preg_match('/^[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\s]*$/', $ProducentNazwa) ||
            strlen($ProducentNazwa) > 100
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
        try	{
        $query = 'INSERT INTO `'.$this->table.'` (`ProducentNazwa`)';
        $query .= ' VALUES (:ProducentNazwa)';
        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':ProducentNazwa', $ProducentNazwa, PDO::PARAM_STR);
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
    * Metoda edytowania producenta w bazie danych
    * @param  int $id
    * @param  string $name
    * @return int
    */
    public function update($id, $ProducentNazwa)
    {
        $this->testConnection();
        $this->testTable($this->table);

        if( !isset($id) ||
            $id == '' ||
            !is_numeric($id) ||
            !isset($ProducentNazwa) ||
            $ProducentNazwa == '' ||
            !preg_match('/^[a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\s]*$/', $ProducentNazwa) ||
            strlen($ProducentNazwa) > 100
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
        try	{
        $query = 'UPDATE `'.$this->table.'`';
        $query .= ' SET ProducentNazwa = :ProducentNazwa';
        $query .= ' WHERE id = :id';
        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':ProducentNazwa', $ProducentNazwa, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if($stmt->execute()) {
        $id = $stmt->rowCount();
        }
        $stmt->closeCursor();
        } catch(\PDOException $e) {
        //throw new \Exceptions\Query($e);
        \Tools\FlashMessage::addMessage(-1, 'query');
        return -1;
        }
        return $id;
    }
}
