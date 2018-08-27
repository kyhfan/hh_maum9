<?
    include_once "sub_head.php";
?>
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
						<div class="check">
							<input type="checkbox" class="checkbox" id="terms1">
							<div class="checkbox-visual"></div>
							<label for="terms1"><img src="./images/terms_label1.png" alt=""></label>
						</div>
						<div class="view">
							<button type="button" data-popup="#popup-agree2"></button>
						</div>
					</div>
					<div class="row _2">
						<div class="check">
							<input type="checkbox" class="checkbox" id="terms2">
							<div class="checkbox-visual"></div>
							<label for="terms2"><img src="./images/terms_label2.png" alt=""></label>
						</div>
						<div class="view">
							<button type="button" data-popup="#popup-agree1"></button>
						</div>
					</div>
				</div>
				<button type="button" class="btn" id="submit-info">
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
					<button type="button" class="btn" onclick="kakao_send()">
						<img src="./images/popup_thanks_btn1.png" alt="">
					</button>
					<button type="button" class="btn" onclick="location.href='index.php'">
						<img src="./images/popup_thanks_btn2.png" alt="">
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
				<button type="button" class="btn">
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
				<button type="button" class="btn">
					<img src="./images/popup_agree_btn.jpg" alt="">
				</button>
			</div>
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
		</div>
		<!-- 개인정보 수집 및 이용에 관한 약관 팝업 -->
		<!-- <button id="popup_opener" data-popup="#popup-agree2">asdasdasdasd</button> -->
		<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>

		<script>
			Kakao.init('c8173523ff789743a4d69e357b3d55a1');

			$('.burger').on('click', function() {
				$('html').toggleClass('menu-opened');
			});
			$('.menu-layer .menu-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
			$(window).on('load', function() {
				$('#popup_opener').trigger('click');
			});
//			$('#popup_opener').on('click', function() {
//			});
		</script>
	</body>
</html>