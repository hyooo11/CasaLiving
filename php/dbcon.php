<?php
   header("content-type:text/html; charset=utf-8");
	//$dbcon = mysqli_connect("localhost","root","111111","member");
	$dbcon = mysqli_connect("localhost","hyooo11","tkfkdgo3100!","hyooo11");

   //dbcon.php 파일만 파일질라에 업로드


   if($dbcon->connect_error){
		echo $dbcon-> connect_errorno;
		exit;
	}

	$dbcon -> set_charset("utf8");
?>