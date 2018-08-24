<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
		<link rel="stylesheet" href="./css/common.css">
		<link rel="stylesheet" href="./css/sub.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/css/swiper.min.css">
		<script src="../js/jquery-1.11.2.min.js"></script>
		<script src="../js/m_main.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
	</head>
	<body>
		<div class="page-wrap sub">
			<div class="menu-layer">
				<div class="inner">
					<button type="button" class="menu-close"></button>
					<ul class="menu-list">
						<li><a href="javascript:void(0)"><img src="./images/menu_1.png" alt="" style="width: 144px;"></a></li>
						<li><a href="javascript:void(0)"><img src="./images/menu_2.png" alt="" style="width: 144px;"></a></li>
						<li><a href="javascript:void(0)"><img src="./images/menu_3.png" alt="" style="width: 110px;"></a></li>
						<li><a href="javascript:void(0)"><img src="./images/menu_4.png" alt="" style="width: 77px;"></a></li>
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
						<span class="line top"></span>
						<span class="line mid"></span>
						<span class="line bot"></span>
					</div>
				</div>
			</div>
			<div class="content sub2 sub">
				<div class="step">
					<img src="./images/sub2_step.png" alt="">
				</div>
				<div class="title">
					<img src="./images/sub2_title.png" alt="">
				</div>
				<div class="slide-area">
					<div class="pager">
						<a href="javascript:void(0)" class="is-active">1</a>
						<a href="javascript:void(0)">2</a>
						<a href="javascript:void(0)">3</a>
						<a href="javascript:void(0)">4</a>
						<a href="javascript:void(0)">5</a>
					</div>
					<div class="slide-wrap">
						<div class="letter-paper"></div>
						<div class="text-area">
							<div class="text-line headline">
								<span>To.</span>
								<input type="text" id="msg_to" placeholder="받으시는 분">
							</div>
							<div class="text-line">
								<input type="text" id="msg_conntent1" placeholder="내용을 입력해 주세요">
								<span id="msg_conntent1_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
							</div>
							<div class="text-line">
								<input type="text" id="msg_conntent2">
								<span id="msg_conntent2_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
							</div>
							<div class="text-line">
								<input type="text" id="msg_conntent3">
								<span id="msg_conntent3_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
							</div>
							<div class="text-line">
								<input type="text" id="msg_conntent4">
								<span id="msg_conntent4_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
							</div>
							<div class="text-line headline">
								<span>From.</span>
								<input type="text" id="msg_from" placeholder="보내시는 분">
							</div>
						</div>
						<div class="bot _0">
							<span></span>
						</div>
						<div class="slider">
							<div class="slide">
								<img src="./images/sub2_letter_bg1.jpg" alt="">
							</div>
							<div class="slide">
								<img src="./images/sub2_letter_bg2.jpg" alt="">
							</div>
							<div class="slide">
								<img src="./images/sub2_letter_bg3.jpg" alt="">
							</div>
							<div class="slide">
								<img src="./images/sub2_letter_bg4.jpg" alt="">
							</div>
							<div class="slide">
								<img src="./images/sub2_letter_bg5.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="btn" onclick="saveImageInfo()">
					<img src="./images/sub2_btn.jpg" alt="">
				</button>
				<div class="copyright">
					<img src="./images/sub_copyright.png" alt="">
				</div>
			</div>
		</div>
		<script>
			var prev_bot_idx = 4;
			var realIdx = 1;
		// $('.text-area input').on('keypress', function(e) {
			$('.text-area input').on('keydown', function(e) {
				var this_val 	= $(this).val();
				$("#"+$(this).attr("id")+"_span").text(this_val);
				console.log($("#"+$(this).attr("id")+"_span").outerWidth());
				if ($("#"+$(this).attr("id")+"_span").outerWidth() > 150)
				{
					// 현재 인풋에서 마지막 문자 삭제
					$(this).val($(this).val().slice(0, -1));
					// 다음 인풋에 마지막 문자 삽입
					var last_str	= this_val.substr(this_val.length - 1);
					$(this).closest('.text-line').next().find('input').val(last_str);
					$(this).closest('.text-line').next().find('input').focus();
				}

	// 			if(e.keyCode == 13) {
	// 				if($(this).closest('.text-group').hasClass('bottom')) {
	// //					console.log("if");
	// 					$(this).closest('.text-area').find('.text-group:first-child').find('input').focus();
	// 				} else {
	// //					console.log("asd");
	// 					$(this).closest('.text-group').next().find('input').focus();
	// 				}
	// 			}
			})

			var headlineColorArr = ['#fa5266', '#d55143', '#376639', '#1b4375', '#dd7722'];
//			var swiper = new Swiper ('.slide-area', {
//				// Optional parameters
//				direction: 'horizontal',
//				loop: true,
//				slidesPerView: 'auto',
//				// loopFillGroupWithBlank: true,
//				spaceBetween: 22,
//				// touchAngle: 75,
//				navigation: {
//					nextEl: '.button-next',
//					prevEl: '.button-prev',
//				}
//			})
			$(document).ready(function() {
				$('.slider').slick();
			});
			$('.slider').on('afterChange', function(event, slick, currentSlide) {
				$('.pager a').removeClass('is-active');
				$('.pager a:nth-child('+(currentSlide+1)+')').addClass('is-active');
				$('.text-area .headline > span').css({
					color: headlineColorArr[currentSlide]
				});
				realIdx = currentSlide + 1;
console.log(realIdx);

				if (currentSlide == 0)
				{
					if (prev_bot_idx > currentSlide)
					{
						if (prev_bot_idx == 4)
							var prevIdx = 4;
						else
							var prevIdx = 1;
					}else{
						var prevIdx = 4;
					}
				}
				else if (currentSlide == 4)
				{
					if (prev_bot_idx == 0)
						var prevIdx = 0;
					else
						var prevIdx = 3;
				}else{
					if (prev_bot_idx > currentSlide)
						var  prevIdx = currentSlide +1;
					else
						var  prevIdx = currentSlide -1;
				}

				prev_bot_idx = currentSlide;
				$('.slide-wrap .bot').removeClass('_'+prevIdx).addClass('_'+(currentSlide));

			})
			$('.burger').on('click', function() {
				$('html').toggleClass('menu-opened');
			});
			$('.menu-layer .menu-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
		</script>
	</body>
</html>