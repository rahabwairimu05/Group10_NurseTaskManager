<?php
/**
* @author Courage
* @access public
*/
include_once ("adb.php");
/*
*This class extends the adb class and contains the function
*to perform query on the database
*/
class Tasks extends adb{
     /*
     * Select all task in the database
     */
    function viewTasks(){
        $str_query="select * from tasks";
        $result=$this->query($str_query).mysql_error();
        $row=$this->fetch;    }
}
?>