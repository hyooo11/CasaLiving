<?php
   header("content-type:text/html; charset=utf-8");

   //01) 세션 시작하기
	session_start();

	#02) 세션 삭제하기
	session_unset();

	#02) 세션 삭제하기
	session_destroy();

   setcookie("PHPSESSID", "", time() - 3600);

	echo "<script>alert('로그아웃 되었습니다.')</script>";
	echo "<script>location.replace('../index.html');</script>";

?>