<!DOCTYPE html>
<html lang="ko">
<head>
	<title>회원가입|까사리빙</title>
   <meta charset="utf-8"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <style>
      *{margin:0; padding:0;}
      body{margin:0; padding:0;}

      #container{width:100%; padding-top:200px;}

      #signUpArea{width:35%; margin:0 auto 50px;}
      #signUpArea h3{font-size:25px; font-family:"sCroe700"; text-align:center;}
      #signUpArea form{line-height:40px;}
      #signUpArea fieldset{border:none;}
      #agreeinfo label{padding-left:16px;}
      #signUpArea legend{font-size:18px; padding-top:50px;}
      #signUpArea p{font-size:13px;}
      #signUpArea input{}

      #memberinfo p{}
      #memberinfo label{display:inline-block; width:10%;}
      #memberinfo input{width:60%; padding:10px 20px; border:none; background-color:#efefef;}
      #memberinfo #userid{width:40%;}
      #memberinfo #post3{width:40%; margin-left:10%;}
      #memberinfo input[type=button]{width:20%;}

      #memberinfo input[type=submit]{width:20%; text-align:center; background-color:#333; color:#fff;}
      #memberinfo input[type=reset]{width:20%; text-align:center; background-color:#333; color:#fff;}


   </style>
   <!--[1] 아이디 중복관련 script-->
	<script>
		function idChkBtns(){

			var userid = document.getElementById("userid");
			
			// span 태그
			var idChkDesc = document.getElementById("idChkDesc");
			// console.log(idChkDesc);

			if(userid.value =="" ){
				alert("아이디가 비어있습니다.");
				userid.focus();
				idChkDesc.innerHTML="<strong style='color:red;'>아이디 필수입력</strong>";
			}
			else{
				xmlhttp = new XMLHttpRequest();

				xmlhttp.open("GET","idDouble.php?q="+userid.value,true);

				xmlhttp.onreadystatechange = function(){
					
					if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
						
						idChkDesc.innerHTML = xmlhttp.responseText;
					}
				};
				
				xmlhttp.send();
			}
		}
	</script>

   <!--[2] 우편번호 관련 script-->
	<!--
		1) POSTCODE 만들기
		2) 주소
			http://postcode.map.daum.net/guide
	
		3) post3에 새 우편번호 가져오기
			add1에 기본 주소 가져오기
	-->
	<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
	<script>
		
		function postcode(){
			new daum.Postcode({
				oncomplete: function(data) {
					document.getElementById("post3").value=data.zonecode;
					document.getElementById("add1").value=data.address;
					document.getElementById("add2").focus();
				}
			}).open();
		
		}
	</script>
</head>
<script>
   $(document).ready(function(){
      $("#headerWrap").load("../header.html");
      $("#footer").load("../footer.html");

      // 체크박스 전체 선택
      $("#agreeinfo").on("click", "#agreeAll", function(){
         $(this).parents("#agreeinfo").find('input').prop("checked", $(this).is(":checked"));
      });
   });
</script>

<body>
   <div id="wrap">
      <div id="headerWrap"></div>
      <div id="container">
         <section id="signUpArea">
            <h3>SIGN UP</h3>
            <form action="signup_control.php" method="POST">
               <fieldset id="agreeinfo">
                  <legend>약관동의</legend>
                  <p><input id="agree0" type="checkbox" name="이용약관" value="이용약관"><label for="agree0">이용약관에 동의합니다.</label></p>
                  <p><input id="agree1" type="checkbox" name="개인정보취급방침" value="개인정보취급방침"><label for="agree1">개인정보취급방침에 동의합니다.</label></p>
                  <p><input id="agree2" type="checkbox" name="나이" value="나이"><label for="agree2">본인은 만 14세 이상입니다.</label></p>
                  <p><input id="agree3" type="checkbox" name="문자수신" value="문자수신"><label for="agree3">문자 수신에 동의합니다.</label></p>
                  <p><input id="agree4" type="checkbox" name="이메일 수신" value="이메일 수신"><label for="agree4">이메일 수신에 동의합니다.</label></p>
                  <hr/>
                  <p><input id="agreeAll" type="checkbox" name="이메일 수신" value="이메일 수신"><label for="agreeAll">이용약관, 개인정보취급방침, 문자, 이메일 수신에 모두 동의합니다.</label></p>
               </fieldset>
               <fieldset id="memberinfo">
                  <legend>회원정보 입력</legend>
                  <p>
                     <label for="username">이름</label>
                     <input id="username" type="text" name="username" placeholder="사용자 이름" required>
                  </p>
                  <p>
                     <label for="userid">아이디</label>
                     <input id="userid" type="text" name="userid" placeholder="사용자 아이디" required/>
                     
                     <input id="idChkBtn" type="button" value="중복체크" onclick="idChkBtns();"/>
                     <span id="idChkDesc">※ 아이디 중복체크</span>
                  </p>
                  <p>
                     <label for="userpw">비밀번호</label>
                     <input id="userpw" type="password" name="userpw" placeholder="비밀번호" required>
                  </p>
                  <p>
                     <label for="userphone">휴대폰</label>
                     <input id="userphone" type="tel" name="userphone" required/>
                  </p>
                  <p>
                     <label for="useremail">이메일</label>
                     <input id="useremail" type="email" name="useremail" required/>
                  </p>
                  <p id="postArea">
                     <input id="post3" type="text" name="post3" title="새로운 우편번호" placeholder="새로운 우편번호"/>
                     <input id="postBtn" type="button" value="우편번호 찾기" onclick="postcode();"/>
                  </p>
                  <p>
                     <label for="add1">상세주소</label>
                     <input id="add1" type="text" name="add1" title="상세주소1"/> - <input id="add2" type="text" name="add2" title="상세주소2"/>
                  </p>

                  <p id="button">
                     <input type="submit" value="회원가입완료" title="가입하기"/>
                     <input type="reset" value="다시작성" title="다시작성"/>
                  </p>
               </fieldset>
            </form>
         </section>
      </div>
      <footer id="footer"></footer>
   </div>
</body>
</html>
