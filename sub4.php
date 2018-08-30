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
						<div class="step-area _4">
							<img src="./images/sub_step4_icon.png" alt="">
						</div>
						<div class="title-area _4">
							<img src="./images/sub_step4_title.png" alt="">
						</div>
						<div class="input-area">
							<div class="input-group name">
								<div class="guide">
									<img src="./images/sub_step4_input_name.png" alt="">
								</div>
								<div class="input">
									<input type="text" id="mb_name">
								</div>
							</div>
							<div class="input-group phone">
								<div class="guide">
									<img src="./images/sub_step4_input_phone.png" alt="">
								</div>
								<div class="input">
									<input type="tel" id="mb_phone1" onkeyup="lengthCheck(this, 3)">
									<input type="tel" id="mb_phone2" onkeyup="lengthCheck(this, 4)">
									<input type="tel" id="mb_phone3" onkeyup="lengthCheck(this, 4)">
								</div>
							</div>
							<div class="input-group addr">
								<div class="guide">
									<img src="./images/sub_step4_input_addr.png" alt="">
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
									<input type="checkbox" class="checkbox" id="terms1" disabled>
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
								<div class="view">
									<button type="button" data-popup="#popup-agree1"></button>
								</div>
							</div>
						</div>
						<div class="btn-area _4">
							<button type="button" id="submit-info" onclick="NTrackObj.callTrackTag('34106', callbackFn, 13294);">
								<img src="./images/sub_step4_btn.jpg" alt="">
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
		<button id="popup-open-btn" data-popup="#popup-winner"></button>
		<!-- 개인정보 취급 위탁 약관 팝업 -->
		<div class="popup agree1" id="popup-agree1">
			<div class="inner">
				<div class="agree1-wrap">
					<div class="agree1-area">
						<div class="button-area">
							<button class="confirm-btn" onclick="check_agree('terms2','#popup-agree1')"></button>
						</div>
						<img src="./images/popup_agree1_bg.jpg" alt="">
					</div>
				</div>
			</div>
			<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
		</div>
		<!-- 개인정보 취급 위탁 약관 팝업 -->

		<!-- 개인정보 수집 및 이용에 관한 약관 팝업 -->
		<div class="popup agree2" id="popup-agree2">
			<div class="inner">
				<div class="agree2-wrap">
					<div class="agree2-area">
						<div class="button-area">
							<button class="confirm-btn" onclick="check_agree('terms1','#popup-agree2')"></button>
						</div>
						<img src="./images/popup_agree2_bg.jpg" alt="">
					</div>
				</div>
			</div>
			<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
		</div>
		<!-- 개인정보 수집 및 이용에 관한 약관 팝업 -->
		<!-- 참여 감사 팝업 -->
		<div class="popup thanks" id="popup-thanks">
			<div class="inner">
				<div class="thanks-wrap">
					<div class="thanks-area">
						<div class="button-area">
							<button class="kakao-btn" onclick="kakao_send()"></button>
							<button class="confirm-btn" onclick="location.href='index.php'"></button>
						</div>
						<img src="./images/popup_thanks_bg.jpg" alt="">
					</div>
				</div>
			</div>
			<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
		</div>
		<!-- 참여 감사 팝업 -->
		<!-- 당첨자 발표 안내 팝업 -->
		<div class="popup winner" id="popup-winner">
			<div class="inner">
				<div class="winner-wrap">
					<div class="winner-area">
						<button class="confirm-btn"></button>
						<img src="./images/popup_winner_bg.jpg" alt="">
					</div>
				</div>
			</div>
			<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
		</div>
		<!-- 당첨자 발표 안내 팝업 -->
		<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>

		<script>

//			$(window).on('load', function() {
//				$('#popup-open-btn').trigger('click');
//			});
//			$('.checkbox').on('click', function() {
//				var that = $(this);
//				$('.checkbox').each(function() {
//					if($(this).attr('id') !== that.attr('id')) {
//						$(this).context.checked = false;
//					}
//				});
//			});
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
		</script>
	</body>
</html>