<?
    include_once "./include/autoload.php";

    $mnv_f 			= new mnv_function();
    $my_db         = $mnv_f->Connect_MySQL();
    $mobileYN      = $mnv_f->MobileCheck();
    // $obYN          = $mnv_f->BrowserCheck();
    $IEYN          = $mnv_f->IECheck();
    $SafariYN          = $mnv_f->SafariCheck();
    // print_r($_SERVER["HTTP_USER_AGENT"]);
    if ($mobileYN == "MOBILE")
    {
        // echo "<script>location.href='m/index.php?media=".$_REQUEST["media"]."&r=".$_REQUEST["r"]."&ref=".$_REQUEST["ref"]."&w=".$_REQUEST["w"]."';</script>";
    }else{
        $saveMedia     = $mnv_f->SaveMedia();
        $rs_tracking   = $mnv_f->InsertTrackingInfo($mobileYN);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link type="image/icon" rel="shortcut icon" href="http://minivertest.hi-maumbot.co.kr/images/maum_favi.ico" />
    <script src="./js/jquery-1.11.2.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
</head>
<body>
    <div class="page-wrap">
		<div class="header-wrap">
            <div class="inner">
                <div class="logo">
                    <img src="./images/logo.png" alt="현대해상 로고">
                </div>
                <div class="menu">
                    <a href="javascript:void(0)" class="_1"></a>
                    <a href="javascript:void(0)" class="_2"></a>
                    <a href="javascript:void(0)" class="_3"></a>
                    <a href="javascript:void(0)" class="_4"></a>
                </div>
<!--
                <div class="pointer">
                </div>
-->
            </div>
        </div>
        <div class="section1-wrap section">
            <div class="inner">
                <div class="title">
                </div>
                <div class="button">
                    <button type="button" class="btn-message" onclick="nextPage(1)">
                        <img src="./images/btn_message2.png" alt="">
                        <img src="./images/pencil.png" class="pencil" alt="">
                    </button>
                </div>
                <div class="info">
                    <div class="txt"></div>
                    <div class="button">
                        <button type="button" onclick="alert('10월 1일에 당첨자가 발표 됩니다.')"></button>
                    </div>
                </div>
                <div class="village">
                    <div class="mini-maumbot"></div>
                </div>
                <div class="maumbot">
                    <!-- <button type="button"></button> -->
                    <button type="button">
                        <img src="./images/more_plus.png" class="plus" alt="">
                        <img src="./images/more_txt.png" class="txt" alt="">
                    </button>
                    <div class="chat"></div>
                    <div class="bot"></div>
                </div>
                <div class="bg-cloud">
                </div>
                <div class="cloud">
                    <div class="_1"></div>
                    <div class="_2"></div>
                    <div class="_3"></div>
                    <div class="_4"></div>
                    <div class="_5"></div>
                    <div class="_6"></div>
                </div>
                <div class="share">
                    <button class="kakao"></button>
                    <button class="story"></button>
                    <button class="facebook"></button>
                    <div class="share-txt"></div>
                </div>
            </div>
        </div>
		<div class="section2-wrap section">
            <div class="inner">
                <div class="pointer">
                </div>
                <div class="card">
                </div>
                <div class="title">
                </div>
                <div class="maumbot">
                    <div class="chat1"></div>
                    <div class="bot"></div>
                    <div class="chat2"></div>
                </div>
                <div class="slider">
                    <div class="slder-area">
                    <!-- <div class="swiper-container slder-area"> -->
                        <!-- <div class="swiper-wrapper"> -->
<?
    $query 		= "SELECT * FROM member_info_9 WHERE mb_serial <> '' ORDER BY idx DESC LIMIT 100";
    $result 	= mysqli_query($my_db, $query);

    while ($data = mysqli_fetch_array($result))
    {
        if ($data['mb_type'] == "1")
            $file_name = "/maumbot_takecare2.jpg";
        else if ($data['mb_type'] == "2")
            $file_name = "/maumbot_loveyou2.jpg";
        else if ($data['mb_type'] == "3")
            $file_name = "/maumbot_thanks2.jpg";
        else if ($data['mb_type'] == "4")
            $file_name = "/maumbot_cheerup2.jpg";
        else if ($data['mb_type'] == "5")
            $file_name = "/maumbot_dontworry2.jpg";
?>                            
                            <div class="slide">
                                <img src="./files/<?=$data['mb_serial']?>/<?=$file_name?>" alt="">
                            </div>
<?
    }
?>                            
                            <!-- <div class="swiper-slide slide">
                                <img src="./images/slide_image2.png" alt="">
                            </div>
                            <div class="swiper-slide slide">
                                <img src="./images/slide_image3.png" alt="">
                            </div>
                            <div class="swiper-slide slide">
                                <img src="./images/slide_image4.png" alt="">
                            </div>
                            <div class="swiper-slide slide">
                                <img src="./images/slide_image5.png" alt="">
                            </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    </div>
                    <div class="prev-button">
                        <button type="button" class="button-prev slick-prev"></button>
                    </div>
                    <div class="next-button">
                        <button type="button" class="button-next slick-next"></button>
                    </div>
                </div>
                <div class="swipe-message">
                </div>
            </div>
        </div>
		<div class="section3-wrap section">
            <div class="inner">
                <div class="maumbot-insta">
                </div>
                <div class="title">
                </div>
                <div class="info">
                    <div class="button">
                        <button type="button"></button>
                    </div>
                </div>
                <button class="btn-verify">
                	<img src="./images/section3_verify_btn.jpg" alt="">
                </button>
            </div>
        </div>
		<div class="section4-wrap section">
            <div class="inner">
                <div class="pointer">
                </div>
                <div class="title">
                </div>
                <div class="list">
                    <ul>
                        <li class="no-margin">
                            <div>
                                <img src="./images/section4_list1.png" alt="">
                            </div>
                            <div class="button" onclick="window.open('http://event4.hi-maumbot.co.kr', 'event4','width=#, height=#'); return false">
                                <button type="button"></button>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="./images/section4_list2.png" alt="">
                            </div>
                            <div class="button" onclick="window.open('http://event3.hi-maumbot.co.kr', 'event3','width=#, height=#'); return false">
                                <button type="button"></button>
                            </div>
                        </li>
                        <li class="no-margin">
                            <div>
                                <img src="./images/section4_list3.png" alt="">
                            </div>
                            <div class="button" onclick="window.open('http://event2.hi-maumbot.co.kr', 'event2','width=#, height=#'); return false">
                                <button type="button"></button>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="./images/section4_list4.png" alt="">
                            </div>
                            <div class="button" onclick="window.open('http://event1.hi-maumbot.co.kr', 'event1','width=#, height=#'); return false">
                                <button type="button"></button>
                            </div>
                        </li>
                    </ul>
                </div>      
            </div>
            <div class="footer-wrap">
                <div class="copyright">
                </div>
            </div>
        </div>
    </div>
    <script>
		// var swiper = new Swiper ('.slder-area', {
		// 	// Optional parameters
		// 	direction: 'horizontal',
		// 	loop: true,
		// 	slidesPerView: 'auto',
		// 	slidesPerGroup: 5,
		// 	// loopFillGroupWithBlank: true,
		// 	spaceBetween: 22,
		// 	// touchAngle: 75,
		// 	navigation: {
		// 		nextEl: '.button-next',
		// 		prevEl: '.button-prev',
		// 	}
		// })
		var menuOffsetArray = [];
		var sectionOffsetArray = [];
		var menuWrapOffset = 0;
		var targetX = 0;
		$(window).on('load', function() {
			$('.header-wrap .menu a').each(function(idx, el) {
				menuOffsetArray.push($(el).offset().left);
			});
			$('.section').each(function(idx, el) {
				sectionOffsetArray.push($(el).offset().top);
			});
            scrolled($(window).scrollTop());
            
            $('.slder-area').slick({
                lazyLoad: 'ondemand',
                variableWidth: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: $('.slick-prev'),
                nextArrow: $('.slick-next')
            });
            // $('.slider-area').on('setPosition', function(slick){
            //     $(".slick-slide").width(285);
            // });
		});
		
		$(window).on('resize', function() {
			$('.header-wrap .menu a').each(function(idx, el) {
				//				console.log($(el).offset().left);
				menuOffsetArray[idx] = $(el).offset().left;
			});
			$('.section').each(function(idx, el) {
				//				console.log($(el).offset().left);
				sectionOffsetArray[idx] = $(el).offset().top;
			});
			scrolled($(window).scrollTop(), 'transition');
		});
		
		$(window).on('scroll', function(e) {
			var currentScroll = $(this).scrollTop()+98;
			scrolled(currentScroll, 'transition');
		});
		
		$(".menu a").on('click', function(e) {
			e.preventDefault();
            // console.log($(this).attr("class"));
            var this_class  = $(this).attr("class");
            var last_str	= this_class.substr(this_class.length - 1);

            switch (this_class)
            {
                case "_1" :
//                    $('html, body').animate({scrollTop : 0}, 1000);
                    $('html, body').animate({scrollTop : 0}, 1000);
                break;
                case "_2" :
//                    $('html, body').animate({scrollTop :  $('.section'+last_str+'-wrap').offset().top - 92}, 1000);
					$('html, body').animate({scrollTop :  sectionOffsetArray[1]-92}, 1000);
                break;
                case "_3" :
//                    $('html, body').animate({scrollTop :  $('.section'+last_str+'-wrap').offset().top - 530}, 1000);
					$('html, body').animate({scrollTop :  sectionOffsetArray[2]-530}, 1000);
                break;
                case "_4" :
//                    $('html, body').animate({scrollTop :  $('.section'+last_str+'-wrap').offset().top - 92}, 1000);
					$('html, body').animate({scrollTop :  sectionOffsetArray[3]-92}, 1000);
                break;
            }
        });
		
		function scrolled(currentScroll, transitionFlag) {
			if(transitionFlag) {
				var transition = 'background 0.46s ease-out';
			} else {
				var transition = '';
			}
			if (currentScroll > sectionOffsetArray[1] && currentScroll < sectionOffsetArray[2]-540) {
				//				현재 섹션 2번
				targetX = menuOffsetArray[1];
				activeIndex = 2;
//				console.log("2");
			} else if (currentScroll > sectionOffsetArray[2]-540 && currentScroll < sectionOffsetArray[3]) {
				//				현재 섹션 3번
				targetX = menuOffsetArray[2]-20;
//				console.log("3");
				activeIndex = 3;
			} else if (currentScroll > sectionOffsetArray[3]) {
				//				현재 섹션 4번
				targetX = menuOffsetArray[3]-35;
//				console.log("4");
				activeIndex = 4;
			} else {
				//				현재 섹션 1번
				targetX = menuOffsetArray[0];
//				console.log("1");
				activeIndex = 1;
			}
			$('.header-wrap').css({
				backgroundPositionX: targetX-1360+'px',
				transition: transition
			});
			$('.header-wrap .menu a').removeClass('is-active');
			$('.header-wrap .menu ._'+activeIndex).addClass('is-active');
		}
//		console.log(menuOffsetArray);
//		console.log(sectionOffsetArray);

    </script>
</body>
</html>