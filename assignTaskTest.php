<?php
include "assignTask.php";

class AssignTaskTest extends PHPUnit_Framework_TestCase{

	public function testEmptyInputs()
	{
        // Arrange
		$a = new AssignTask();

		$nurseId='4';
		$nurseName="RURU";
		$taskId='4';
		$taskName="Visit the sick people in the enshipai village";
		$taskDesc="there are many sick people";
		$sDate="2016-01-01";
		$eDate="2016-01-11";

        // Assert
		$this->assertEquals(1, $a->assigTask($nurseId,$nurseName,$taskId,$taskName,$taskDesc,$sDate,$eDate));
	}
	

}
?>