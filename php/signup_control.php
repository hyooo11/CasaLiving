<?php

	include "dbcon.php";

	$username=$_POST['username'];
	$userid=$_POST['userid'];
	$userpw=$_POST['userpw'];
	$userphone=$_POST['userphone'];
	$useremail=$_POST['useremail'];

   # post3 (우편번호)
	$post3 = $_POST['post3'];

	# add1	(기본주소)
	$add1 = $_POST['add1'];

	# add2 (상세주소)
	$add2 = $_POST['add2'];


	$address = $post3." ".$add1." ".$add2;

   if( !empty($username) && !empty($userid) && !empty($userpw) && !empty($userphone) && !empty($useremail) && !empty($address)){
		
		$sql = "INSERT INTO member0 (username, userid, userpw, userphone, useremail, address) 
		VALUES
		('$username', '$userid', '$userpw', '$userphone','$useremail', '$address')";
		
		$result = mysqli_query($dbcon, $sql);
	}



	if($result){
		echo "<script>alert('회원가입에 성공했습니다.')</script>";
		echo "<script>location.replace('login.php');</script>";
	}
	else{
		echo "<script>alert('회원가입에 실패했습니다.')</script>";
		echo "<script>location.replace('signup.php');</script>";
	}
	

?>