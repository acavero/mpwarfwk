<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 19/03/15
 * Time: 12:43
 */

namespace src\Component\Persistance;


class SqlComponent extends \PDO {

    public function __construct($DB_DRIVER, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS)
    {
        $options = array(
            \PDO::ATTR_PERSISTENT => true,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        );

        try {
            parent::__construct($DB_DRIVER . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS, $options);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    public function selectAll($table, $fetchMode = \PDO::FETCH_ASSOC)
    {
        $sql = "SELECT * FROM $table;";
        $sth = $this->prepare($sql);
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    public function find($fieldName, $table, $condition, $data, $fetchMode = \PDO::FETCH_ASSOC){

        $sql = "SELECT $fieldName FROM $table WHERE $condition= ". "'". $data. "'";
        $sth = $this->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll($fetchMode);
        return $result;



    }

    public function select($sql, $array = array(), $fetchMode = \PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    public function insert($table, $data)
    {
        ksort($data);
        $fieldNames = '`'. implode("`,`", array_keys($data)). '`';
        $fieldValues = ':' . implode(', :', array_keys($data));
        $sth = $this->prepare("INSERT INTO $table ($fieldNames) VALUES ($fieldValues)");
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        $sth->execute();
    }

    public function delete($table, $data, $condition, $limit = 1)
    {

        return $this->exec("DELETE FROM $table WHERE $condition= ". "'". $data. "'" ." LIMIT $limit");
    }
}