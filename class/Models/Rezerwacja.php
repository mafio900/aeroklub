<?php
namespace Models;

use PDO;

/**
 * Model rezerwacji
 */
class Rezerwacja extends PDODatabase
{
    public function __construct()
    {
        $this->table = 'rezerwacja';
        parent::__construct();
    }

    /**
     * Metoda wstawiania do bazy danych rezerwacji
     * @param  string $name
     * @return array
     */
    public function insert($terminRealizacji, $idKlient, $idPracownik)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        if(!isset($terminRealizacji) && !isset($idKlient) && !isset($idPracownik))
            throw new \Exceptions\EmptyValue;
        try	{
            //INSERT INTO `rezerwacja`(`TerminRealizacji`, `KwotaLaczna`, `IdKlient`, `IdPracownik`) VALUES ("2019-11-23", 300, 3, 1)
            $query = 'INSERT INTO `'.$this->table.'` (`TerminRealizacji`, `IdKlient`, `IdPracownik`)';
            $query .='  VALUES (:terminRealizacji, :idKlient, :idPracownik)';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':terminRealizacji', $terminRealizacji, PDO::PARAM_STR);
            $stmt->bindValue(':idKlient', $idKlient, PDO::PARAM_INT);
            $stmt->bindValue(':idPracownik', $idPracownik, PDO::PARAM_INT);
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
     * Metoda edytowania rezerwacji w bazie danych
     * @param  int $id
     * @param  string $name
     * @return int
     */
    public function update($id, $terminRealizacji, $kwotaLaczna, $idStatus, $idKlient, $idPracownik)
    {
        $this->testConnection();
        $this->testTable($this->table);

        if(!isset($id) && !isset($terminRealizacji) && !isset($kwotaLaczna) && !isset($idStatus) && !isset($idKlient) && !isset($idPracownik))
            throw new \Exceptions\EmptyValue;
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            $query .= ' SET TerminRealizacji = :terminRealizacji, KwotaLaczna = :kwotaLaczna, IdStatus = :idStatus, IdKlient = :idKlient, IdPracownik = :idPracownik';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':terminRealizacji', $terminRealizacji, PDO::PARAM_STR);
            $stmt->bindValue(':kwotaLaczna', $kwotaLaczna, PDO::PARAM_STR);
            $stmt->bindValue(':idStatus', $idStatus, PDO::PARAM_INT);
            $stmt->bindValue(':idKlient', $idKlient, PDO::PARAM_INT);
            $stmt->bindValue(':idPracownik', $idPracownik, PDO::PARAM_INT);
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
