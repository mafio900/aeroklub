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
        if( !isset($terminRealizacji) ||
            $terminRealizacji == '' ||
            !preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])\s(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|[1-5][0-9])$/', $terminRealizacji) ||
            !isset($idKlient) ||
            $idKlient == '' ||
            !is_numeric($idKlient) ||
            !isset($idPracownik) ||
            $idPracownik == '' ||
            !is_numeric($idPracownik)
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
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
            //throw new \Exceptions\Query($e);
            return -1;
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

        if( !isset($id) ||
            $id == '' ||
            !is_numeric($id)
            !isset($terminRealizacji) ||
            $terminRealizacji == '' ||
            !preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])\s(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|[1-5][0-9])$/', $terminRealizacji) ||
            !isset($kwotaLaczna) ||
            $kwotaLaczna == '' ||
            !preg_match('/^\d+(\.\d{2})?$/', $kwotaLaczna) ||
            !isset($idStatus) ||
            $idStatus == '' ||
            !is_numeric($idStatus) ||
            !isset($idKlient) ||
            $idKlient == '' ||
            !is_numeric($idKlient) ||
            !isset($idPracownik) ||
            $idPracownik == '' ||
            !is_numeric($idPracownik)
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
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
