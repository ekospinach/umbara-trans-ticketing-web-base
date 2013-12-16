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
        ;
    }
    
    protected function getListRecordSet($criteria=null, $orderby=null, $limit=null, $offset=null) {
        $query = "SELECT * FROM ".$this->mTableName;
        $result = $this->getQueryResult($query);
    }
    
    protected function getList($criteria=null, $orderby=null, $limit=null, $offset=null) {
        $data = $this->getListRecordSet($criteria, $orderby, $limit, $offset);
    }
    
    private function getQueryResult($query) {
        $this->getDatabaseConnect();
        $result = mysql_query($query) or die (mysql_error().''.$query);
        $this->getDatabaseClose();
        if (mysql_num_rows($result) <= 0) return null;
        return $result;
    }
    
    private function getDatabaseConnect() {
        global $database;
        $database = $database;
        $connection = mysql_connect($database["host"], $database["user"], $database["pass"]) or die("Kesalahan Koneksi ...!!");
        mysql_select_db($database["db_name"], $connection) or die("Databasenya Error");
    }
    
    private function getDatabaseClose() {
        global $database;
        $database = $database;
        $connection = mysql_connect($database["host"], $database["user"], $database["pass"]) or die("Kesalahan Koneksi ...!!");
        mysql_close($connection);
    }
}

?>
