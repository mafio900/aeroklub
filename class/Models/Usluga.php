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
    public function insert($usluganazwa, $cena, $jednostka, $opis, $zdjecieNazwa, $rozszerzenie)
    {
        $id = -1;
        $this->testConnection();
        $this->testTable($this->table);
        if( !isset($usluganazwa) ||
            $usluganazwa == '' ||
            !preg_match('/^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $usluganazwa) ||
            strlen($usluganazwa) > 100 ||
            !isset($cena) ||
            $cena == '' ||
            !preg_match('/^\d+(\.\d{2})?$/', $cena) ||
            !isset($jednostka) ||
            $jednostka == '' ||
            !preg_match('/^[^\s][a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ]*$/', $jednostka) ||
            strlen($jednostka) > 20 ||
            ($opis != '' && strlen($opis) > 100 ) ||
            ($opis != '' && !preg_match('/^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $opis) )
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
        try	{
            $query = 'INSERT INTO `'.$this->table.'` (`UslugaNazwa`, `CenaJedn`, `JednMiary`, `Opis`, `ZdjecieNazwa`, `Rozszerzenie`)';
            $query .= ' VALUES (:usluganazwa, :cena, :jednostka, :opis, :zdjecieNazwa, :rozszerzenie)';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':usluganazwa', $usluganazwa, PDO::PARAM_STR);
            $stmt->bindValue(':cena', $cena, PDO::PARAM_STR);
            $stmt->bindValue(':jednostka', $jednostka, PDO::PARAM_STR);
            $stmt->bindValue(':opis', $opis, PDO::PARAM_STR);
            $stmt->bindValue(':zdjecieNazwa', $zdjecieNazwa, PDO::PARAM_STR);
            $stmt->bindValue(':rozszerzenie', $rozszerzenie, PDO::PARAM_STR);
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
    public function update($id, $usluganazwa, $cena, $jednostka, $opis, $rozszerzenie)
    {
        $this->testConnection();
        $this->testTable($this->table);

        if( !isset($id) ||
            $id == '' ||
            !is_numeric($id) ||
            !isset($usluganazwa) ||
            $usluganazwa == '' ||
            !preg_match('/^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $usluganazwa) ||
            strlen($usluganazwa) > 100 ||
            !isset($cena) ||
            $cena == '' ||
            !preg_match('/^\d+(\.\d{2})?$/', $cena) ||
            !isset($jednostka) ||
            $jednostka == '' ||
            strlen($jednostka) > 20 ||
            !preg_match('/^[^\s][a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ]*$/', $jednostka) ||
            ($opis != '' && strlen($opis) > 100 ) ||
            ($opis != '' && !preg_match('/^[^\s][0-9a-zA-ZąĄęĘóśŚÓłŁżŻźŹćĆńŃ\.\-\s]*$/', $opis) )
        ){
            \Tools\FlashMessage::addMessage(0, 'valid');
            return 0;
        }
        try	{
            $query = 'UPDATE `'.$this->table.'`';
            $query .= ' SET UslugaNazwa = :usluganazwa, CenaJedn = :cena, JednMiary = :jednostka, Opis = :opis, Rozszerzenie = :rozszerzenie';
            $query .= ' WHERE id = :id';
            $stmt = $this->pdo->prepare($query);

            $stmt->bindValue(':usluganazwa', $usluganazwa, PDO::PARAM_STR);
            $stmt->bindValue(':cena', $cena, PDO::PARAM_STR);
            $stmt->bindValue(':jednostka', $jednostka, PDO::PARAM_STR);
            $stmt->bindValue(':opis', $opis, PDO::PARAM_STR);
            $stmt->bindValue(':rozszerzenie', $rozszerzenie, PDO::PARAM_STR);
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
