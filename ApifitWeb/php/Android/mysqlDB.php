<?php
class mysqlDB {
    var $mysql_conn;
    var $mysql_result;

    function connect()
    {
        $this->mysql_conn = @mysql_connect('apifitfrmjapifit.mysql.db', 'apifitfrmjapifit', 'Charles95');
        mysql_set_charset("utf8",$this->mysql_conn);
        if(!$this->mysql_conn){
            // echo 'Could not connect to server: ' . mysql_error($this->mysql_conn);
        }
        if(!mysql_select_db('apifitfrmjapifit', $this->mysql_conn)){
            // echo 'Cannot select database: ' . mysql_error($this->mysql_conn);
        }
    }

    function disConnect()
    {
        mysql_close($this->mysql_conn);
    }

    function query($query)
    {
        $this->mysql_result = mysql_query($query, $this->mysql_conn);
    }

    function getResults()
    {
        $results = array();
        if ($this->mysql_result) {
            while (($row = mysql_fetch_array($this->mysql_result)) != false) {
                array_push($results, $row);
            }
        }
    return $results;
    }
}

?>
