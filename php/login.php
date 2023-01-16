<!DOCTYPE html>
<html lang="ko">
<head>
	<title>로그인|까사리빙</title>
   <meta charset="utf-8"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <style>
      *{margin:0; padding:0;}
      body{margin:0; padding:0;}

      #container{width:100%; padding-top:200px;}

      #signUpArea{width:20%; margin:0 auto 50px;}
      #signUpArea h3{font-size:25px; font-family:"sCroe700";}
      #signUpArea form{line-height:40px;}
      #signUpArea fieldset{border:none;}
      #signUpArea legend{font-size:18px; padding-top:50px;}
      #signUpArea p{font-size:13px; text-aling:center;}
      #signUpArea label{display:inline-block; width:10%;}
      #signUpArea input{width:100%; padding:10px 0; border:none; background-color:#efefef; text-indent:15px;}

      #button{width:100%; margin:0 auto;}
      #button input{background-color:#333; color:#fff;}
      #desc p{float:left;}
      #desc input{width:10px;}
      #desc label{width:100px;}

   </style>

</head>
<script>
   $(document).ready(function(){
      $("#headerWrap").load("../header.html");
      $("#footer").load("../footer.html");
   });
</script>

<body>
   <div id="wrap">
      <div id="headerWrap"></div>
      <div id="container">
         <section id="signUpArea">
            <h3>LOGIN</h3>
            <form action="login_control.php" method="post">
               <fieldset>
                  <legend>회원정보 입력</legend>
                  <p>
                     <input id="userid" type="text" name="userid" title="사용자 아이디" maxlength="10" placeholder="사용자 아이디" required>
                  </p>
                  <p>
                     <input id="userpw" type="password" name="userpw" title="비밀번호" maxlength="8" placeholder="비밀번호" required>
                  </p>
                  <p id="button">
                     <input type="submit" value="LOGIN">
                  </p>
                  <div id="desc">
                     <p>
                        <input id="save0" type="checkbox" name="아이디저장" value="아이디저장">
                        <label for="save0">아이디 저장</label>
                     </p>
                     <p>
                        <a href="signup.php" title="회원가입">회원가입</a>
                     </p>
                  </div>
               </fieldset>
            </form>
         </section>
      </div>
      <footer id="footer"></footer>
   </div>
</body>
</html>
