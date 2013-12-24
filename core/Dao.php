<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dao
 *
 * @author bayu
 */
class Dao extends Core{
    //put your code here
    protected $mTableName = null;
    
    public function __construct() {
        parent::__construct();
    }
    
    protected function insert($data) {
        $value = $this->parseArrayForInsert($data);
        $query = "INSERT INTO ".$this->mTableName." ".$value;
        $result = $this->getQueryResult($query);
        return $result;
    }
    
    protected function update($arr_id, $data) {
        $value = $this->parseArrayForUpdate($data);
        $query = "UPDATE ".$this->mTableName." ".$value." WHERE ".key($arr_id)." = '".$arr_id[key($arr_id)]."'";;
        $result = $this->getQueryResult($query);
        return $result;
    }
    
    protected function delete($arr_id) {
        $query = "DELETE FROM ".$this->mTableName." WHERE ".key($arr_id)." = '".$arr_id[key($arr_id)]."'";;
        $result = $this->getQueryResult($query);
        return $result;
    }


    protected function getObject($arr_id) {
        $query = "SELECT * FROM ".$this->mTableName." WHERE ".key($arr_id)." = '".$arr_id[key($arr_id)]."'";
        $data = $this->getQueryResult($query);
        $result = array();
        if (!is_null($data)) {
            while ($item = mysql_fetch_object($data)) {
                $result[] = $this->toObject($item);
            }
        }
        if (count($result) <= 0) return null;
        return $result[0];
    }
    
    protected function getListRecordSet($criteria=null, $orderby=null, $limit=null, $offset=null) {
        $query = "SELECT * FROM ".$this->mTableName;
        if ($criteria != null) $query .= " WHERE ".$criteria->getSQL();
        $result = $this->getQueryResult($query);
        return $result;
    }
    
    protected function getList($criteria=null, $orderby=null, $limit=null, $offset=null) {
        $data = $this->getListRecordSet($criteria, $orderby, $limit, $offset);
        $result = array();
        if (!is_null($data)) {
            while ($item = mysql_fetch_object($data)) {
                $result[] = $this->toObject($item);
            }
        }
        return $result;
    }
    
    protected function getQueryResult($query) {
        $this->getDatabaseConnect();
        
        $this->beginTrans();
        $result = mysql_query($query) or die (mysql_error().''.$query);
        if (!$result) {
            $this->roolback();
            return false;
        }
        $this->commitTrans();
        
        $this->getDatabaseClose();
        //var_dump($result);
        if (!is_bool($result)) {
            if (mysql_num_rows($result) <= 0) return null;
        }
        return $result;
    }
    
    protected function getDatabaseConnect() {
        global $database;
        $database = $database;
        $connection = mysql_connect($database["host"], $database["user"], $database["pass"]) or die("Kesalahan Koneksi ...!!");
        mysql_select_db($database["db_name"], $connection) or die("Databasenya Error");
    }
    
    protected function getDatabaseClose() {
        global $database;
        $database = $database;
        $connection = mysql_connect($database["host"], $database["user"], $database["pass"]) or die("Kesalahan Koneksi ...!!");
        mysql_close($connection);
    }
    
    protected function beginTrans() {
        mysql_query("BEGIN");
    }
    
    protected function roolback() {
        mysql_query("ROLLBACK");
    }
    
    protected function commitTrans() {
        mysql_query("COMMIT");
    }
    
    
    private function parseArrayForInsert($data) {
        $data = $data->toArray();
        $fields = "(";
        $values = "VALUES (";
        $i = 1;
        foreach ($data as $key => $value) {
            $fields .= $key;
            $values .= "'".$value."'";
            if (count($data) > $i) {
                $fields .= ",";
                $values .= ",";
            }
            $i++;
        }
        $fields .=")";
        $values .=")";
        
        return $fields." ".$values;
    }
    
    private function parseArrayForUpdate($data) {
        $data = $data->toArray();
        $values = "SET ";
        $i = 1;
        foreach ($data as $key => $value) {
            $values .= $key." = '".$value."' ";
            if (count($data) > $i) {
                $values .= ",";
            }
            $i++;
        }
        
        return $values;
    }
    
}

?>
