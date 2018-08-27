<?
    include_once "../include/autoload.php";

    $mnv_f 			= new mnv_function();
    $my_db         = $mnv_f->Connect_MySQL();
    $mobileYN      = $mnv_f->MobileCheck();
    // $obYN          = $mnv_f->BrowserCheck();
    $IEYN          = $mnv_f->IECheck();
    $SafariYN          = $mnv_f->SafariCheck();
    // print_r($_SERVER["HTTP_USER_AGENT"]);
    if ($mobileYN == "PC")
    {
        echo "<script>location.href='../index.php?media=".$_REQUEST["media"]."';</script>";
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
		<link type="image/icon" rel="shortcut icon" href="http://minivertest.hi-maumbot.co.kr/images/maum_favi.ico" />
		<script src="../js/jquery-1.11.2.min.js"></script>
		<script src="../js/m_main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
	</head>
	<body>
		<div class="page-wrap">
			<div class="menu-layer">
				<div class="inner">
					<button type="button" class="menu-close"></button>
					<ul class="menu-list">
						<li><a href="javascript:void(0)" data-value="1"><img src="./images/menu_1.png" alt="" style="width: 144px;"></a></li>
						<li><a href="javascript:void(0)" data-value="2"><img src="./images/menu_2.png" alt="" style="width: 144px;"></a></li>
						<li><a href="javascript:void(0)" data-value="3"><img src="./images/menu_3.png" alt="" style="width: 110px;"></a></li>
						<li><a href="javascript:void(0)" data-value="4"><img src="./images/menu_4.png" alt="" style="width: 77px;"></a></li>
					</ul>
					<ul class="share-list">
						<li><button type="button" class="kt"></button></li>
						<li><button type="button" class="ks"></button></li>
						<li><button type="button" class="fb"></button></li>
					</ul>
					<img src="./images/share_guide.png" alt="" class="share-guide">
					<div class="box-point"></div>
				</div>
			</div>
			<div class="header-wrap">
				<div class="inner">
					<div class="logo">
						<img src="./images/logo.png" alt="현대해상 로고">
					</div>
					<div class="burger">
						<!-- <a href="javascript:void(0)" class="burger_link"> -->
							<span class="line top"></span>
							<span class="line mid"></span>
							<span class="line bot"></span>
						<!-- </a> -->
					</div>
				</div>
			</div>
			<div class="section1-wrap section">
				<div class="inner">
					<div class="title">
						<img src="./images/main_sec1_title.png" alt="">
					</div>
					<div class="button">
						<button type="button" class="btn-message" onclick="nextPage(1)">
							<img src="./images/main_sec1_btn_bg.png" alt="">
							<img src="./images/main_sec1_btn_pencile.png" class="pencil" alt="">
						</button>
					</div>
					<div class="info">
						<div class="txt"></div>
						<div class="button">
							<button type="button"></button>
						</div>
					</div>
					<div class="objs">
						<img src="./images/main_sec1_obj.png" alt="">
						<div class="info-group">
							<img src="./images/main_sec1_info_group.png" alt="">
						</div>
						<div class="plus-icon">
							<img src="./images/main_sec1_plus.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="section1_2-wrap section eat">
				<div class="bg">
					<img src="./images/main_sec1_2_bg.png" alt="">
				</div>
				<div class="wrapper">
					<div class="text">
						<img src="./images/main_sec1_2_text.png" alt="">
					</div>
					<button type="button" onclick="alert('당첨자는 10월 1일에 발표 될 예정입니다.')">
						<img src="./images/main_sec1_2_btn.png" alt="">
					</button>
				</div>
			</div>
			<div class="section2-wrap section eat">
				<div class="inner">
					<div class="title">
						<img src="./images/main_sec2_title.png" alt="">
					</div>
					<div class="slide-wrap">
						<div class="swiper-container slide-area">
							<div class="swiper-wrapper">
<?
    $total_query 	= "SELECT * FROM member_info_9 WHERE mb_serial <> ''";
	$total_result 	= mysqli_query($my_db, $total_query);
	$total_count	= mysqli_num_rows($total_result);
	
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

								<div class="swiper-slide slide">
									<img src="../files/<?=$data['mb_serial']?>/<?=$file_name?>" alt="">
								</div>
<?
    }
?>                            
							</div>
						</div>
						<div class="prev-button arrow">
							<button type="button" class="button-prev">
								<img src="./images/main_slide_prev.png" alt="">
							</button>
						</div>
						<div class="next-button arrow">
							<button type="button" class="button-next">
								<img src="./images/main_slide_next.png" alt="">
							</button>
						</div>
						<div class="obj-group">
							<div class="bot">
								<img src="./images/main_sec2_maumbot.png" alt="">
							</div>
							<div class="balloon left">
								<img src="./images/main_sec2_balloon_left.png" alt="">
							</div>
							<div class="balloon right">
								<img src="./images/main_sec2_balloon_right.png" alt="">
								<span class="total"><?=number_format($total_count)?></span>
							</div>
						</div>
					</div>
					<div class="msg">
						<img src="./images/main_sec2_swipe_msg.png" alt="">
					</div>
				</div>
			</div>
			<div class="section3-wrap section">
				<div class="inner">
					<div class="white-bg">
						<div class="bot">
							<img src="./images/main_sec3_maumbot.png" alt="">
						</div>
						<div class="title">
							<img src="./images/main_sec3_title.png" alt="">
						</div>
						<div class="info-box">
							<img src="./images/main_sec3_infobox.jpg" alt="">
							<button type="button" onclick="alert('당첨자는 11월 2일에 발표 될 예정입니다.')">
								<img src="./images/main_sec3_infobox_btn.jpg" alt="">
							</button>
						</div>
						<button type="button" class="btn-verify" onclick="alert('인증이벤트는 9월 3일부터 시작 될 예정입니다.')">
							<img src="./images/main_sec3_verify.jpg" alt="">
						</button>
						<div class="list-container">
							<!-- <div class="col indent">
								<div class="box">
									<div class="img">
										<img src="./images/main_sec3_box_sample1.jpg" alt="">
									</div>
									<div class="hashtag">
										<span>#마음봇건강키트</span>
										<span>#우리가족튼튼메신저</span>
									</div>
								</div>
								<div class="box">
									<div class="img">
										<img src="./images/main_sec3_box_sample2.jpg" alt="">
									</div>
									<div class="hashtag">
										<span>#마음봇</span>
									</div>
								</div>
								<div class="box">
									<div class="img">
										<img src="./images/main_sec3_box_sample1.jpg" alt="">
									</div>
									<div class="hashtag">
										<span>#마음봇건강키트</span>
										<span>#우리가족튼튼메신저</span>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="box">
									<div class="img">
										<img src="./images/main_sec3_box_sample2.jpg" alt="">
									</div>
									<div class="hashtag">
										<span>#좋아요</span>
										<span>#마음봇</span>
									</div>
								</div>
								<div class="box">
									<div class="img">
										<img src="./images/main_sec3_box_sample1.jpg" alt="">
									</div>
									<div class="hashtag">
										<span>#마음봇건강키트</span>
										<span>#우리가족튼튼메신저</span>
									</div>
								</div>
								<div class="box">
									<div class="img">
										<img src="./images/main_sec3_box_sample2.jpg" alt="">
									</div>
									<div class="hashtag">
										<span>#마음봇건강키트</span>
										<span>#우리가족튼튼메신저</span>
									</div>
								</div>
							</div> -->
						</div>
						<!-- <button type="button" class="btn-more">
							<img src="./images/main_sec3_more.png" alt="">
						</button> -->
					</div>
				</div>
			</div>
			<div class="section4-wrap section">
				<div class="bg">
					<img src="./images/main_sec4_bg.png" alt="">
				</div>
				<div class="wrapper">
					<div class="title">
						<img src="./images/main_sec4_title.png" alt="">
					</div>
					<div class="list-campaign">
						<div class="memory">
							<img src="./images/main_sec4_memory1.png" alt="">
							<a href="http://event4.hi-maumbot.co.kr" target="_blank" class="btn"></a>
						</div>
						<div class="memory">
							<img src="./images/main_sec4_memory2.png" alt="">
							<a href="http://event3.hi-maumbot.co.kr" target="_blank" class="btn"></a>
						</div>
						<div class="memory">
							<img src="./images/main_sec4_memory3.png" alt="">
							<a href="http://event2.hi-maumbot.co.kr" target="_blank" class="btn"></a>
						</div>
						<div class="memory">
							<img src="./images/main_sec4_memory4.png" alt="">
							<a href="http://event1.hi-maumbot.co.kr" target="_blank" class="btn"></a>
						</div>
					</div>
					<div class="footer">
						<img src="./images/copyright.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<script>
			var swiper = new Swiper ('.slide-area', {
				// Optional parameters
				direction: 'horizontal',
				loop: true,
				slidesPerView: 'auto',
				// loopFillGroupWithBlank: true,
				spaceBetween: 22,
				// touchAngle: 75,
				navigation: {
					nextEl: '.button-next',
					prevEl: '.button-prev',
				}
			})
//			var menuOffsetArray = [];
			var sectionOffsetArray = [];
//			var menuWrapOffset = 0;
//			var targetX = 0;
			$(window).on('load', function() {
				// $('.header-wrap .menu a').each(function(idx, el) {
				// 	menuOffsetArray.push($(el).offset().left);
				// });
				$('.section').each(function(idx, el) {
					sectionOffsetArray.push($(el).offset().top);
				});
				// scrolled($(window).scrollTop());
<?
    if ($_REQUEST["g"])
    {
?>  
            go_section('<?=$_REQUEST["g"]?>');
<?
    }
?>
			});
//
//			$(window).on('resize', function() {
//				$('.header-wrap .menu a').each(function(idx, el) {
//					//				console.log($(el).offset().left);
//					menuOffsetArray[idx] = $(el).offset().left;
//				});
//				$('.section').each(function(idx, el) {
//					//				console.log($(el).offset().left);
//					sectionOffsetArray[idx] = $(el).offset().top;
//				});
//				scrolled($(window).scrollTop(), 'transition');
//			});
//
//			$(window).on('scroll', function(e) {
//				var currentScroll = $(this).scrollTop()+98;
//				scrolled(currentScroll, 'transition');
//			});
//
//			function scrolled(currentScroll, transitionFlag) {
//				if(transitionFlag) {
//					var transition = 'background 0.46s ease-out';
//				} else {
//					var transition = '';
//				}
//				if (currentScroll > sectionOffsetArray[1] && currentScroll < sectionOffsetArray[2]) {
//					//				현재 섹션 2번
//					targetX = menuOffsetArray[1];
//					//				console.log("2");
//				} else if (currentScroll > sectionOffsetArray[2] && currentScroll < sectionOffsetArray[3]) {
//					//				현재 섹션 3번
//					targetX = menuOffsetArray[2]-20;
//					//				console.log("3");
//				} else if (currentScroll > sectionOffsetArray[3]) {
//					//				현재 섹션 4번
//					targetX = menuOffsetArray[3]-35;
//					//				console.log("4");
//				} else {
//					//				현재 섹션 1번
//					targetX = menuOffsetArray[0];
//					//				console.log("1");
//				}
//				$('.header-wrap').css({
//					backgroundPositionX: targetX-1360+'px',
//					transition: transition
//				});
//			}
			$('.burger').on('click', function() {
				$('html').toggleClass('menu-opened');
			});
			// $('.burger_link').on('click', function() {
				// $('html').toggleClass('menu-opened');
				// return false;
			// });
			$('.menu-layer .menu-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
			$('.menu-list a').on('click', function() {
				$('html').removeClass('menu-opened');

				var this_class = $(this).data("value");
				console.log(this_class);
				switch (this_class)
				{
					case 1 :
						$('html, body').animate({scrollTop : 0}, 1000);
					break;
					case 2 :
						$('html, body').animate({scrollTop :  sectionOffsetArray[2]-37}, 1000);
					break;
					case 3 :
						$('html, body').animate({scrollTop :  sectionOffsetArray[3]-185}, 1000);
					break;
					case 4 :
						$('html, body').animate({scrollTop :  sectionOffsetArray[4]-37}, 1000);
					break;
				}
			});

			function go_section(param)
			{
				switch (param)
				{
					case "1" :
						$('html, body').animate({scrollTop : 0}, 1000);
					break;
					case "2" :
						$('html, body').animate({scrollTop :  sectionOffsetArray[2]-37}, 1000);
					break;
					case "3" :
						$('html, body').animate({scrollTop :  sectionOffsetArray[3]-185}, 1000);
					break;
					case "4" :
						$('html, body').animate({scrollTop :  sectionOffsetArray[4]-37}, 1000);
					break;
				}
			}

		</script>
	</body>
</html>