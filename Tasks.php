<?php
/**
* @author Jonathan Aherdemla
* @access public
*/
include_once ("adb.php");
/*
*This class extends the adb class and contains the various
*function that query the database
*/
class tasks extends adb{
      /**
      * A function to display all task
      */
      function displayTask(){
            $str_query="select * from tasks";
            $result=$this->query($str_query).mysql_error();
      }

}
?>
