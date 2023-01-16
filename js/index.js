
   //topBarArea 스크롤 내리면 들어가기

   //제이쿼리 영역
   $(document).ready(function(){
      

      $("#visual .desc_area button").click(function(){
         $("#visual .desc_area").toggleClass('open');
      });

      
      var pointer = $("#showRoom .pointer");
      var tooltip = $("#showRoom .tooltip");

      $(tooltip).hide();

      $("#showRoom .poin0").mouseover(function(){
         $("#showRoom .tool0").stop().fadeIn(500)
      }).mouseout(function(){
         $("#showRoom .tool0").stop().fadeOut(500);
      });

      $("#showRoom .poin1").mouseover(function(){
         $("#showRoom .tool1").stop().fadeIn(500)
      }).mouseout(function(){
         $("#showRoom .tool1").stop().fadeOut(500);
      });

      $("#showRoom .poin2").mouseover(function(){
         $("#showRoom .tool2").stop().fadeIn(500)
      }).mouseout(function(){
         $("#showRoom .tool2").stop().fadeOut(500);
      });

      $("#showRoom .poin3").mouseover(function(){
         $("#showRoom .tool3").stop().fadeIn(500)
      }).mouseout(function(){
         $("#showRoom .tool3").stop().fadeOut(500);
      });

       //일정시간마다 visual 이미지 돌아가기
      /*
      var slides = $("#visual .img_area li"),
         slidesCount = slides.length, //li갯수인 4 저장
         currentIndex = 0,
         bgColor = $("#visual");
         //이미지 각각의 eq에  currentIndex 값이 들어가면 나타나게 해줌
         slides.eq(currentIndex).fadeIn();
         
         var timer = undefined;
         //만약에 변수 timer에 할당하지 않은 값이 들어가면 3초에 한번씩 showNextSlide함수를 실행해 주세요
         if (timer == undefined) { 
            timer = setInterval(showNextSlide, 3000);
         };
         

         //함수 showNextSlide는 
         function showNextSlide(){
            var nextIndex = (currentIndex + 1) % slidesCount;
            var bgout = slides.eq(currentIndex).fadeOut(function(){
               bgColor.removeClass("color"+currentIndex)
            });
            var bgin = slides.eq(nextIndex).fadeIn(function(){
               bgColor.addClass("color"+nextIndex)
            });


            
            currentIndex = nextIndex;
            

         };//showNextSlide
      */
         //slide[0]이 fadeIn하면 , #visual에 addClass .color0
         //slide[1]이 fadeIn하면 , #visual에 addClass .color1
         //slide[2]이 fadeIn하면 , #visual에 addClass .color2
         //slide[3]이 fadeIn하면 , #visual에 addClass .color3
         
         
         // 마우스 오버하면 멈추고 아웃하면 슬라이드가 작동함
      /*
         function timeron(){
            if (!timer) { //타이머의 값이 undefined이면 showNextslide를 3.5s 마다 실행하라고 합니다.
               timer = setInterval(showNextSlide, 3000);
            } 
         }
         function timeroff(){
            if (timer) { //타이머의 값이 있으면 즉 setInterval(showNextSlide, 3500)값이 있으면 클리어하고 값을 다시 undefined로 저장.
            clearInterval(timer);
            timer = undefined;				
            }	
         }

         slides.mouseenter(function(){
            timeroff();
         }).mouseleave(function(){
            timeron();
         })
      */

      // //visual에 마우스 오버하면 텍스트 박스 올라오는 기능
      // $("#visual").mouseover(function () {
      //    $("#visual .text_box").css({ "bottom": "150px" })
      // });

      // $(window).resize(function(){
      //    if($(this).width()>=767){
            
      //    }else{
      //       headerInfo.css({display:'block'});
      //    }
      // });

      $("#brandGrid .text_area h3").click(function(){
         $("#brandGrid .text_area .desc").slideUp(500, "swing");
         $(this).next().slideDown(500, "swing");
         return false;
      });


      $("#prodRoll0 li:eq(0)").mouseover(function(){
         $("#prodRoll0 .text_box").css({"left":"5%"});
      });




      /*
         필름이 할일 일정시간마다 ,li의 width값(liW)만큼 -left 하기
      */

      
      //#prodRoll0 슬라이드 이동 이벤트
      var slideGroup0 = $('#prodRoll0 ul');
      var slideGroup1 = $('#prodRoll1 ul');
      var slide0 = $("#prodRoll0 ul li");
      var slideCount0 = slide0.length;
      var liW0 = slide0.width();
      var currentIndex = 0;
      var indicator = $('#prodRoll0 .Ctrl0'),
         indicator1 = $('#prodRoll1 .Ctrl1');
      var indicatorHtml = '';

      //인디케이터 슬라이드 번호 별로 html 부여
      slide0.each(function(i){
         indicatorHtml += '<p><a href="#none">'+(i+1)+'</a></p>';
         
         indicator.html(indicatorHtml);
      })
      

      //슬라이드 이동 거리 함수
      function goToslide(index){
         slideGroup0.animate({'marginLeft': "-" + liW0 * index + "px"},1000);
         slideGroup1.animate({'marginLeft': "-" + 100 * index + "%"},800);
         currentIndex = index;

         updateNav();
      };


      function updateNav(){
         indicator.find('p').eq(currentIndex).addClass('active').siblings().removeClass('active');
         indicator1.find('p').eq(currentIndex).addClass('active').siblings().removeClass('active');
      };

      //인디케이터로 이동하기
      indicator.children('p').click(function(){
         var idx = $(this).index();
         goToslide(idx);
      });

      indicator1.children('p').click(function(){
         var idx1 = $(this).index();
         goToslide(idx1);
         return false;
      });

      //자동 슬라이드 함수
      function start(){
         timer = setInterval(function(){
            var nextIndex = (currentIndex+1) % slideCount0;
            goToslide(nextIndex);
            return false;

            //console.log(nextIndex);
         },2000);
      }

      start();

      //마우스 올리면 슬라이드 정지, 마우스 떠나면 슬라이드 이벤트 발생
      $("#prodRoll0").mouseenter(function(){
         clearInterval(timer);
      }).
      mouseleave(function(){
         start();
      });

      $("#prodRoll1").mouseenter(function(){
         clearInterval(timer);
      }).
      mouseleave(function(){
         start();
      });



      
   $("#mdPick .prod_list ul:not(:first)").hide();
      $("#mdPick .tab li a").bind("click focusin", function () {
         $("#mdPick .prod_list ul").hide();
         $($(this).attr("href")).show();
         return false;
      });

      //sns 모달 팝업 영역
      $("#snsArea .view, #snsArea .full").hide();
      $("#snsW li").click(function(){

         var num = $(this).find("a").attr("href").substring(16,17);

      $("#snsArea .view").html("<p><img src='resource/img/ins"+num+".jpg' alt='이미지'/></p>");

         // 4) view와 full 다시 나타나게 만들기, show()
      $("#snsArea .view, #snsArea .full").show();
      $("body").css({"overflow-y":"hidden"});
         return false;
      });

         //5) view와 full영역 클릭하면 view, full 영역 숨기기
      $("#snsArea .view, #snsArea .full").click(function(){
         $("#snsArea .view, #snsArea .full").hide();
      $("body").css({"overflow-y":"visible"});
      });

      /*
         대상: #footer .m_menu li .title
         이벤트 : 클릭
         이벤트 핸들러 : #footer .m_menu li .text
      */
      $("#footer .m_menu li .text").css({ "display": "none" });

      $("#footer .m_menu li .title").click(function () {
         $("#footer .m_menu li .text").slideUp(500, "swing");
         $(this).next().slideDown(500, "swing");
         return false;
      });


      var cookieCheck = document.cookie;  //쿠키값 가져오기
      // console.log(cookieCheck);
      var cookieName = cookieCheck.split('=', 1)[0]; //쿠키값 짤라서 배열로 나눔, 0번째 배열값 불러옴
      // console.log(cookieName);

      if(cookieCheck !== "") { //로그인 된거 : 
         $("#loginOk").hide();      
         $("#logoutNo").show();
         
      }else { //로그인 안된거
         $("#loginOk").show();
         $("#logoutNo").hide();
      }


      

   });