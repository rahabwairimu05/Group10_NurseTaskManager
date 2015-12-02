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
     * A function to view all task
     */
    function viewTasks(){
        $str_query="select * from tasks";
        $result=$this->query($str_query).mysql_error();
        $row=$this->fetch;    }
      }

?>