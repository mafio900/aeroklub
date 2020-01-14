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
    public function insert($statusnazwa)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        if( !isset($statusnazwa) ||
            $statusnazwa = '' ||
            !preg_match('/^[^\s][a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ]*$/', $statusnazwa) ||
            strlen($statusnazwa) > 50
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
        try	{
            $query = 'INSERT INTO `'.$this->table.'` (`StatusNazwa`)';
            $query .= ' VALUES (:statusnazwa)';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':statusnazwa', $statusnazwa, PDO::PARAM_STR);
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
    public function update($id, $statusnazwa)
    {
        $this->testConnection();
        $this->testTable($this->table);

        if( !isset($id) ||
            $id == '' ||
            !is_numeric($id) ||
            !isset($statusnazwa) ||
            $statusnazwa = '' ||
            !preg_match('/^[^\s][a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ]*$/', $statusnazwa) ||
            strlen($statusnazwa) > 50
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            $query .= ' SET StatusNazwa = :statusnazwa';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':statusnazwa', $statusnazwa, PDO::PARAM_STR);
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
