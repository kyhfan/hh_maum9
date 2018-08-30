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
						<div class="step-area _3">
							<img src="./images/sub_step3_icon.png" alt="">
						</div>
						<div class="title-area _3">
							<img src="./images/sub_step3_title.png" alt="">
						</div>
						<div class="select-wrap">
							<div class="select-box">
								<img src="./images/sub_step3_select.png" alt="">
							</div>
							<div class="select-menu">
								<ul>
									<li>
										<div class="desc _1">
											<img src="./images/sub_step3_desc_1.jpg" alt="">
										</div>
										<div class="check">
											<label for="check1"></label>
											<input type="checkbox" class="checkbox" name="check" id="check1" value="2">
											<div class="checkbox-visual"></div>
										</div>
									</li>
									<li>
										<div class="desc _2">
											<img src="./images/sub_step3_desc_2.jpg" alt="">
										</div>
										<div class="check">
											<label for="check2"></label>
											<input type="checkbox" class="checkbox" name="check" id="check2" value="3">
											<div class="checkbox-visual"></div>
										</div>
									</li>
									<li>
										<div class="desc _3">
											<img src="./images/sub_step3_desc_3.jpg" alt="">
										</div>
										<div class="check">
											<label for="check3"></label>
											<input type="checkbox" class="checkbox" name="check" id="check3" value="4">
											<div class="checkbox-visual"></div>
										</div>
									</li>
									<li>
										<div class="desc _4">
											<img src="./images/sub_step3_desc_4.jpg" alt="">
										</div>
										<div class="check">
											<label for="check4"></label>
											<input type="checkbox" class="checkbox" name="check" id="check4" value="1">
											<div class="checkbox-visual"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-result">
							<img src="./images/sub_step3_card_result.jpg" alt="">
						</div>
						<div class="btn-area _3">
							<!-- <a href="" download> -->
								<button type="button" onclick="go_next();">
									<img src="./images/sub_step3_btn.jpg" alt="">
								</button>
								<!-- <div class="balloon">
									<img src="./images/sub3_message_balloon.png" alt="">
								</div> -->
							<!-- </a> -->
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
			var rs_img = "";
			var change_rs_img = "";
			$(window).on('load', function() {
				if (localStorage.type == 1)
					rs_img	= "./files/" + localStorage.serial + "/maumbot_takecare2.jpg";
				else if (localStorage.type == 2)
					rs_img	= "./files/" + localStorage.serial + "/maumbot_loveyou2.jpg";
				else if (localStorage.type == 3)
					rs_img	= "./files/" + localStorage.serial + "/maumbot_thanks2.jpg";
				else if (localStorage.type == 4)
					rs_img	= "./files/" + localStorage.serial + "/maumbot_cheerup2.jpg";
				else if (localStorage.type == 5)
					rs_img	= "./files/" + localStorage.serial + "/maumbot_dontworry2.jpg";
				$('.card-result img').attr("src",rs_img);
				// $('.btn-area._3 a').attr("href",rs_img);
				// $('.btn-area._3 button').attr("onclick","downloadImg('"+rs_img+"')");
			});

			$('.select-box').on('click', function() {
				$(this).parent().toggleClass('is-active');
			});
			$('.checkbox').on('click', function() {
				var that = $(this);
				$('.checkbox').each(function() {
					if($(this).attr('id') !== that.attr('id')) {
						$(this).context.checked = false;
					}
				});

				localStorage.setItem("size",that.val());
				// if (localStorage.type == 1)
				// 	change_rs_img = "./files/" + localStorage.serial + "/maumbot_takecare" + that.val() + ".jpg";
				// else if (localStorage.type == 2)
				// 	change_rs_img = "./files/" + localStorage.serial + "/maumbot_loveyou" + that.val() + ".jpg";
				// else if (localStorage.type == 3)
				// 	change_rs_img = "./files/" + localStorage.serial + "/maumbot_thanks" + that.val() + ".jpg";
				// else if (localStorage.type == 4)
				// 	change_rs_img = "./files/" + localStorage.serial + "/maumbot_cheerup" + that.val() + ".jpg";
				// else if (localStorage.type == 5)
				// 	change_rs_img = "./files/" + localStorage.serial + "/maumbot_dontworry" + that.val() + ".jpg";

				if ($("#"+that.attr('id')).is(":checked") === true)
				{
					$(".select-box img").attr("src","./images/sub_step3_select" + that.val() + ".png");
					// $('.btn-area._3 button').attr("onclick","NTrackObj.callTrackTag('34105', callbackFn, 13294);downloadImg('"+change_rs_img+"')");
				}


				// setTimeout(function(){
					$(".select-wrap").removeClass("is-active");					
				// },300);
				// setTimeout(() => {
				// 	$(".select-wrap").removeClass("is-active");					
				// }, 700);
			});

			function downloadImg(url)
			{
				location.href = "ajax_download.php?rs="+url;
				setTimeout(function(){
					nextPage(4);
				},1000);
				// setTimeout(() => {
				// 	nextPage(4);
				// }, 1000);
			}

			function go_next()
			{
				if ($("input:checkbox[name='check']").is(":checked") === false)
				{
					alert("화면 비율을 선택해 주세요.");
				}else{
					$('.btn-area._3 button').attr("onclick","NTrackObj.callTrackTag('34105', callbackFn, 13294);downloadImg('"+change_rs_img+"')");
					nextPage(4);
				}
			}
		</script>
	</body>
</html>