<?php
include ("adb.php");

class Nurses extends adb{
	function viewAllNurses(){
		$str_query="SELECT nurseid, nursefname,nursesname,nursecontact FROM addnurses";
		return $this->query($str_query);
	}

	function deleteNurse($Eid){
            $str_query="DELETE FROM addnurses WHERE nurseid =$Eid";
            return $this->query($str_query);
      }
}
?>