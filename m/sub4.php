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
			<div class="content sub4 sub">
				<div class="step">
					<img src="./images/sub4_step.png" alt="">
				</div>
				<div class="title">
					<img src="./images/sub4_title.png" alt="">
				</div>
				<div class="input-area">
					<div class="input-group name">
						<div class="guide">
							<img src="./images/sub4_input_name.png" alt="">
						</div>
						<div class="input">
							<input type="text" id="mb_name">
						</div>
					</div>
					<div class="input-group phone">
						<div class="guide">
							<img src="./images/sub4_input_phone.png" alt="">
						</div>
						<div class="input">
							<input type="tel" id="mb_phone1" onkeyup="lengthCheck(this, 3)">
							<input type="tel" id="mb_phone2" onkeyup="lengthCheck(this, 4)">
							<input type="tel" id="mb_phone3" onkeyup="lengthCheck(this, 4)">
						</div>
					</div>
					<div class="input-group addr">
						<div class="guide">
							<img src="./images/sub4_input_addr.png" alt="">
						</div>
						<div class="input">
							<input type="text" id="mb_zipcode" readonly>
							<button type="button" class="find-addr"></button>
						</div>
					</div>
					<div class="input-group no-guide">
						<div class="guide">
						</div>
						<div class="input">
							<input type="text" id="mb_addr1" readonly>
						</div>
					</div>
					<div class="input-group no-guide">
						<div class="guide">
						</div>
						<div class="input">
							<input type="text" id="mb_addr2" placeholder="상세주소 입력">
						</div>
					</div>
				</div>
				<div class="terms-area">
					<div class="row">
						<div class="check" data-popup="#popup-agree2">
							<input type="checkbox" class="checkbox" id="terms1"  disabled>
							<div class="checkbox-visual"></div>
							<label for="terms1"><img src="./images/terms_label1.png" alt=""></label>
						</div>
						<div class="view">
							<button type="button" data-popup="#popup-agree2"></button>
						</div>
					</div>
					<div class="row _2">
						<div class="check" data-popup="#popup-agree1">
							<input type="checkbox" class="checkbox" id="terms2" disabled>
							<div class="checkbox-visual"></div>
							<label for="terms2"><img src="./images/terms_label2.png" alt=""></label>
						</div>
						<div class="view last">
							<button type="button" data-popup="#popup-agree1"></button>
						</div>
					</div>
				</div>
				<button type="button" class="btn" id="submit-info" onclick="_nto.callTrack('6455', callback());click_tracking('STEP4-응모완료');">
					<img src="./images/sub4_btn.jpg" alt="">
				</button>
				<div class="copyright">
					<img src="./images/sub_copyright.png" alt="">
				</div>
			</div>
		</div>
		<div class="popup winner" id="popup-winner">
			<div class="inner">
				<div class="title">
					<img src="./images/popup_winner_title.png" alt="">
				</div>
				<button type="button" class="btn">
					<img src="./images/popup_winner_btn.png" alt="">
				</button>
				<div class="guide-block">
					<img src="./images/popup_event_guide.png" alt="">
				</div>
			</div>
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
		</div>
		<div class="popup thanks" id="popup-thanks">
			<div class="inner">
				<div class="title">
					<img src="./images/popup_thanks_title.png" alt="">
				</div>
				<div class="btn-group">
					<button type="button" class="btn" onclick="_nto.callTrack('6456', callback());click_tracking('참여완료팝업-카카오톡전송');kakao_send()">
						<img src="./images/popup_thanks_btn1.png" alt="">
					</button>
					<button type="button" class="btn" onclick="_nto.callTrack('6474', callback());click_tracking('참여완료팝업-다운로드');download_img()">
						<img src="./images/popup_thanks_btn2.png" alt="">
					</button>
					<button type="button" class="btn" onclick="_nto.callTrack('6457', callback());click_tracking('참여완료팝업-확인');location.href='index.php'">
						<img src="./images/popup_thanks_btn3.png" alt="">
					</button>
				</div>
				<div class="guide-block">
					<img src="./images/popup_event_guide.png" alt="">
				</div>
			</div>
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
		</div>
		<!-- 개인정보 취급 위탁 약관 팝업 -->
		<div class="popup agree" id="popup-agree2">
			<div class="inner">
				<div class="text">
					<img src="./images/popup_agree2_text.png" alt="">
				</div>
				<button type="button" class="btn" onclick="check_agree('terms1','#popup-agree2')">
					<img src="./images/popup_agree_btn.jpg" alt="">
				</button>
			</div>
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
		</div>
		<!-- 개인정보 취급 위탁 약관 팝업 -->

		<!-- 개인정보 수집 및 이용에 관한 약관 팝업 -->
		<div class="popup agree" id="popup-agree1">
			<div class="inner">
				<div class="text">
					<img src="./images/popup_agree1_text.png" alt="">
				</div>
				<button type="button" class="btn" onclick="check_agree('terms2','#popup-agree1')">
					<img src="./images/popup_agree_btn.jpg" alt="">
				</button>
			</div>
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
		</div>
		<!-- 개인정보 수집 및 이용에 관한 약관 팝업 -->
		<div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:9999;-webkit-overflow-scrolling:touch;">
			<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="width:7%;cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" onclick="closeDaumPostcode()" alt="닫기 버튼">
		</div>

<!--		<button id="popup_opener" data-popup="#popup-thanks"></button> -->
		<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>

		<script>
			$('.burger').on('click', function() {
				$('html').toggleClass('menu-opened');
			});
			$('.menu-layer .menu-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
			// $(window).on('load', function() {
//				$('#popup_opener').trigger('click');
				// hh_maum9.popup.show($("#popup-thanks"));
			// });
			
			function lengthCheck(obj, ln) {
				var $obj = $(obj);
				var regExp = /^[0-9]+$/;
				
				if(!regExp.test($obj.val())) {
					$obj.val($obj.val().replace(/[^0-9]/g, ""));
				} else {
					if($obj.val().length>=ln) {
						$obj.is('input:last-child') ? $obj.blur() : $obj.next().focus();
					}
				}
			}

			function download_img()
			{
				if (localStorage.type == 1)
					var change_rs_img = "../files/" + localStorage.serial + "/maumbot_takecare" + localStorage.size + ".jpg";
				else if (localStorage.type == 2)
					var change_rs_img = "../files/" + localStorage.serial + "/maumbot_loveyou" + localStorage.size + ".jpg";
				else if (localStorage.type == 3)
					var change_rs_img = "../files/" + localStorage.serial + "/maumbot_thanks" + localStorage.size + ".jpg";
				else if (localStorage.type == 4)
					var change_rs_img = "../files/" + localStorage.serial + "/maumbot_cheerup" + localStorage.size + ".jpg";
				else if (localStorage.type == 5)
					var change_rs_img = "../files/" + localStorage.serial + "/maumbot_dontworry" + localStorage.size + ".jpg";

<?
	if ($IphoneYN == "Y")
	{	
?>				
				alert("아래 버튼을 누른 후, 새 창으로 나오는 이미지를 2~3초간 꾹 눌러 저장해주세요!");
				var iosUrl = url.replace("..","https://www.hi-maumbot.co.kr");	
				window.open(iosUrl, 'event1','width=#, height=#');
<?
	}else{
?>				
				location.href = "./ajax_download.php?rs="+change_rs_img;
<?
	}
?>				
			}


		</script>
	</body>
</html>