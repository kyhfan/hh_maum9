<?
include_once "sub_head.php";
?>
<body>
	<!--NSmart Track Tag Script-->
	<script type='text/javascript'>
		callbackFn = function() {};
		var _nsmart = _nsmart || [];
		_nsmart.host = _nsmart.host || (('https:' == document.location.protocol) ? 'https://' : 'http://');
		_nsmart.push([13294, 34102]); /*1808_현대해상_마음봇3차-사랑의 메시지 남기기 페이지*/
		document.write(unescape("%3Cscript src='" + _nsmart.host + "n00.nsmartad.com/etc?id=10' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<!--NSmart Track Tag Script End..-->
	<div class="page-wrap">
		<?
		include_once "sub_header.php";
		?>        
		<div class="content sub">
			<div class="sub-wrap">
				<div class="inner">
					<div class="step-area _2">
						<!-- <div class="step-num _1"> -->
						<img src="./images/sub_step2_icon.png" alt="">
						<!-- </div> -->
						<!-- <div class="step-rail"></div> -->
					</div>
					<div class="title-area _2">
						<img src="./images/sub_step2_title.png" alt="">
					</div>
					<div class="slider-area">
						<div class="swiper-container slide-wrap">
							<div class="letter-paper"></div>
							<div class="text-area">
								<div class="text-line text-group">
									<span>To.</span>
									<div class="input"><input type="text" id="msg_to" class="placeholder-own"><label for="msg_to" class="placeholder">받으시는 분</label></div>
								</div>
								<!--
<div class="text-line2 text-group first">
<div class="input"><input type="text" id="msg_conntent1" class="placeholder-own"><label for="msg_conntent1" class="placeholder">내용을 입력해 주세요</label></div>
<span id="msg_conntent1_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
</div>
<div class="text-line2 text-group">
<div class="input"><input type="text" id="msg_conntent2"></div>
<span id="msg_conntent2_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
</div>
<div class="text-line2 text-group">
<div class="input"><input type="text" id="msg_conntent3"></div>
<span id="msg_conntent3_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
</div>
<div class="text-line2 text-group">
<div class="input"><input type="text" id="msg_conntent4"></div>
<span id="msg_conntent4_span" style="visibility:hidden; position:absolute; top:-10000px; font-size:15px;"></span>
</div>
-->
								<form id="message-form" action="sample_action.php">
									<textarea method="POST" name="message" id="message-box" rows="4" cols="12" maxlength="48" wrap="hard"></textarea>
								</form>
								<!--
<div class="text-line2 text-group">
<div class="input"><input type="text" id="msg_conntent5"></div>
</div>
-->
								<div class="text-line bottom text-group">
									<span>From.</span>
									<div class="input"><input type="text" id="msg_from" class="placeholder-own"><label for="msg_from" class="placeholder">보내시는 분</label></div>
								</div>
							</div>
							<div class="bot"><span></span></div>
							<div class="swiper-wrapper">
								<?
								$i = 1;
								$num_arr	= [1,2,3,4,5];
								shuffle($num_arr);
								?>								
								<div class="swiper-slide slide _<?=$num_arr[0]?>" id="<?=$num_arr[0]?>">
									<img src="./images/sub_step2_card<?=$num_arr[0]?>_new.png" alt="">
								</div>
								<div class="swiper-slide slide _<?=$num_arr[1]?>" id="<?=$num_arr[1]?>">
									<img src="./images/sub_step2_card<?=$num_arr[1]?>_new.png" alt="">
								</div>
								<div class="swiper-slide slide _<?=$num_arr[2]?>" id="<?=$num_arr[2]?>">
									<img src="./images/sub_step2_card<?=$num_arr[2]?>_new.png" alt="">
								</div>
								<div class="swiper-slide slide _<?=$num_arr[3]?>" id="<?=$num_arr[3]?>">
									<img src="./images/sub_step2_card<?=$num_arr[3]?>_new.png" alt="">
								</div>
								<div class="swiper-slide slide _<?=$num_arr[4]?>" id="<?=$num_arr[4]?>">
									<img src="./images/sub_step2_card<?=$num_arr[4]?>_new.png" alt="">
								</div>
							</div>
						</div>
						<div class="prev-button">
							<button type="button" class="button-prev">
								<img src="./images/sub_prev_btn.png" alt="">
							</button>
						</div>
						<div class="next-button">
							<button type="button" class="button-next">
								<img src="./images/sub_next_btn.png" alt="">
							</button>
						</div>
					</div>
<!--						<textarea name="message" id="message-box"></textarea>-->
					<div class="num-area"></div>
					<div class="btn-area _2">
<!--						<button type="button" onclick="NTrackObj.callTrackTag('34104', callbackFn, 13294);click_tracking('STEP2-메세지 배경화면 확인하기');saveImageInfo()">-->
						<button type="button" onclick="actionFunc()">
							<img src="./images/sub_step2_btn.png" alt="">
						</button>
					</div>
				</div>
			</div>
			<div class="footer-wrap">
				<div class="copyright">
					<img src="./images/sub_copyright.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<script>
		$('#message-box').on('keyup', function(e) {
//			console.log(e);
			e.stopPropagation();
			e.preventDefault();
//			console.log(JSON.stringify($(this).val()));
//			console.log($(this).val());
			var messageLength = $(this).val().length;
			var lineBreak = ($(this).val().match(/\n/g)||[]).length;
			console.log(messageLength);
			if(messageLength>0 && lineBreak<3 && messageLength%12 == 0 ) {
				// 강제 개행
//				console.log("linebreak");
				//				var lastStr = $(this).val().substr(messageLength - 1);
				//				var sumText = '';
				//				sumText += lastStr;
				//				console.log(sumText);
				//				console.log(messageLength);
				//				console.log("asd");
//				$(this).val($(this).val() + '\n');
			}
			if(lineBreak > 3) {
//				console.log("linebreak > 3");
//				$(this).val($(this).val().slice(0, -1));
			} else {
//				console.log("line break else");
			}
//			console.log($(this));
			//			console.log(messageLength);
		})


		var prev_bot_idx = 4;
		//		var last_str;
		// $('.text-area input').on('keypress', function(e) {
		
		var headlineColorArr = ['#fa5266', '#d55143', '#376639', '#1b4375', '#dd7722'];
		var swiper = new Swiper ('.slide-wrap', {
			// Optional parameters
			allowTouchMove: false,
			direction: 'horizontal',
			loop: true,
			slidesPerView: '1',
			// slidesPerGroup: 5,
			// loopFillGroupWithBlank: true,
			// spaceBetween: 22,
			// touchAngle: 75,
			navigation: {
				nextEl: '.button-next',
				prevEl: '.button-prev',
			},
			pagination: {
				el: '.num-area',
				bulletElement: 'span',
				renderBullet: function (index, className) {
					return '<span class="' + className + '">' + (index + 1) + '</span>';
				},
			},
			on: {
				init: function() {
					var realIdx = <?=$num_arr[0]?>;
					console.log(realIdx);
				},
				slideChangeTransitionEnd: function() {
					$('.text-area .text-line > span').css({
						color: headlineColorArr[this.realIndex]
					});
					realIdx = this.realIndex + 1;
					realIdx = this.slides[realIdx].id;
					// console.log(this.slides[realIdx].id);
					// console.log(realIdx);

					// if (this.realIndex == 0)
					// {
					// 	if (prev_bot_idx > this.realIndex)
					// 	{
					// 		if (prev_bot_idx == 4)
					// 			var prevIdx = 4;
					// 		else
					// 			var prevIdx = 1;
					// 	}else{
					// 		var prevIdx = 4;
					// 	}
					// }
					// else if (this.realIndex == 4)
					// {
					// 	if (prev_bot_idx == 0)
					// 		var prevIdx = 0;
					// 	else
					// 		var prevIdx = 3;
					// }else{
					// 	if (prev_bot_idx > this.realIndex)
					// 		var  prevIdx = this.realIndex +1;
					// 	else
					// 		var  prevIdx = this.realIndex -1;
					// }

					// prev_bot_idx = this.realIndex;
					// $('.slide-wrap .bot').removeClass('_'+prevIdx).addClass('_'+(this.realIndex));
					$('.slide-wrap .bot').removeClass('_1');
					$('.slide-wrap .bot').removeClass('_2');
					$('.slide-wrap .bot').removeClass('_3');
					$('.slide-wrap .bot').removeClass('_4');
					$('.slide-wrap .bot').removeClass('_5');
					$('.slide-wrap .bot').addClass('_'+realIdx);
				},
			}
		});
		// swiper.on('slideChangeTransitionEnd', function() {
		// 	$('.slide-wrap .bot').removeClass('_'+this.previousIndex).addClass('_'+(this.realIndex));
		// });

		function actionFunc() {
//			console.log($('#message-box').val());
			$('#message-form').submit();
		}
	</script>
</body>
</html>



