<?
    include_once "../include/autoload.php";

    $mnv_f 			= new mnv_function();
    $my_db         = $mnv_f->Connect_MySQL();
    $IphoneYN      = $mnv_f->IPhoneCheck();

	include_once "sub_head.php";
?>
	<body>
	<script type="text/javascript"> 
  var _ntp = {}; 
  _ntp.host = (('https:' == document.location.protocol) ? 'https://' : 'http://') 
  _ntp.dID = 978; 
  document.write(unescape("%3Cscript src='" + _ntp.host + "nmt.nsmartad.com/content?cid=1' type='text/javascript'%3E%3C/script%3E")); 
</script> 
<script>
 callback = function(){}
</script>

		<div class="page-wrap sub">
<?
	include_once "sub_header.php";
?>			
			<div class="content sub3 sub">
				<div class="step">
					<img src="./images/sub3_step.png" alt="">
				</div>
				<div class="title">
					<img src="./images/sub3_title.png" alt="">
				</div>
				<div class="select-wrap">
					<div class="select-box">
						<img src="./images/sub_step3_select.png" alt="">
					</div>
					<div class="select-menu">
						<ul class="inner">
							<li>
								<div class="desc _1">
									<img src="./images/sub_step3_desc_1.jpg" alt="" style="width: 124px;">
								</div>
								<div class="check">
									<label for="check1"></label>
									<input type="checkbox" class="checkbox" name="check" id="check1" value="2">
									<div class="checkbox-visual"></div>
								</div>
							</li>
							<li>
								<div class="desc _2">
									<img src="./images/sub_step3_desc_2.jpg" alt="" style="width: 129px;">
								</div>
								<div class="check">
									<label for="check2"></label>
									<input type="checkbox" class="checkbox" name="check" id="check2" value="3">
									<div class="checkbox-visual"></div>
								</div>
							</li>
							<li>
								<div class="desc _3">
									<img src="./images/sub_step3_desc_3.jpg" alt="" style="width: 149px;">
								</div>
								<div class="check">
									<label for="check3"></label>
									<input type="checkbox" class="checkbox" name="check" id="check3" value="4">
									<div class="checkbox-visual"></div>
								</div>
							</li>
							<li>
								<div class="desc _4">
									<img src="./images/sub_step3_desc_4.jpg" alt="" style="width: 118px;">
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
				<div class="result-img">
					<img src="./images/sub3_img_sample.jpg" alt="">
				</div>
				<button type="button" class="btn">
					<a href="javascript:void(0)" onclick="_nto.callTrack('6454', callback());go_next();">
						<img src="./images/sub3_btn.jpg" alt="">
					</a>
					<!-- <img src="./images/sub3_balloon.png" alt="" class="balloon"> -->
				</button>
				<div class="copyright">
					<img src="./images/sub_copyright.png" alt="">
				</div>
			</div>
		</div>
		<script>
			$('.burger').on('click', function() {
				$('html').toggleClass('menu-opened');
			});
			$('.menu-layer .menu-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
			
			var rs_img = "";
			var change_rs_img = "";
			$(window).on('load', function() {
				if (localStorage.type == 1)
					rs_img	= "../files/" + localStorage.serial + "/maumbot_takecare2.jpg";
				else if (localStorage.type == 2)
					rs_img	= "../files/" + localStorage.serial + "/maumbot_loveyou2.jpg";
				else if (localStorage.type == 3)
					rs_img	= "../files/" + localStorage.serial + "/maumbot_thanks2.jpg";
				else if (localStorage.type == 4)
					rs_img	= "../files/" + localStorage.serial + "/maumbot_cheerup2.jpg";
				else if (localStorage.type == 5)
					rs_img	= "../files/" + localStorage.serial + "/maumbot_dontworry2.jpg";
				$('.result-img img').attr("src",rs_img);
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
				// 	change_rs_img = "../files/" + localStorage.serial + "/maumbot_takecare" + that.val() + ".jpg";
				// else if (localStorage.type == 2)
				// 	change_rs_img = "../files/" + localStorage.serial + "/maumbot_loveyou" + that.val() + ".jpg";
				// else if (localStorage.type == 3)
				// 	change_rs_img = "../files/" + localStorage.serial + "/maumbot_thanks" + that.val() + ".jpg";
				// else if (localStorage.type == 4)
				// 	change_rs_img = "../files/" + localStorage.serial + "/maumbot_cheerup" + that.val() + ".jpg";
				// else if (localStorage.type == 5)
				// 	change_rs_img = "../files/" + localStorage.serial + "/maumbot_dontworry" + that.val() + ".jpg";

				if ($("#"+that.attr('id')).is(":checked") === true)
				{
					$(".select-box img").attr("src","./images/sub_step3_select" + that.val() + ".png");
					// $('.btn a').attr("onclick","downloadImg('"+change_rs_img+"')");
				}

				$(".select-wrap").removeClass("is-active");					
			});

			function downloadImg(url)
			{
<?
	if ($IphoneYN == "Y")
	{	
?>				
				alert("새창으로 뜬 이미지를 눌러 저장 해 주시고, 현재 페이지로 오시면 계속 이벤트 참여가 가능합니다");
				var iosUrl = url.replace("..","http://minivertest.hi-maumbot.co.kr");	
				window.open(iosUrl, 'event1','width=#, height=#');
<?
	}else{
?>				
				location.href = "ajax_download.php?rs="+url;
<?
	}
?>				
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
					$('.btn-area._3 button').attr("onclick","downloadImg('"+change_rs_img+"')");
					nextPage(4);
				}
			}
		</script>
	</body>
</html>