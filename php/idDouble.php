<?php
	
	include "dbcon.php";

	$q = $_REQUEST['q'];
	


	
	$sql = "SELECT * FROM member0 WHERE userid='$q' ";
	$result = mysqli_query($dbcon, $sql);


	$row = mysqli_fetch_array($result);
	

	$row['userid'] = isset($row['userid']) ? $row['userid'] : 'no';

	if($row['userid'] == $q){
		echo "<strong style='color:red;'>중복된 아이디, 사용 불가능</strong>";
	}
	else{
		echo "<strong style='color:blue'>사용 가능한 아이디</strong>";
	}

?>