<?
include_once "sub_head.php";
?>
	<body>
		<div class="page-wrap sub kt-result">
			<?
			include_once "sub_header.php";
			?>        
			<div class="content sub kt-result">
				<div class="sub-wrap">
					<div class="inner">
						<div class="title">
							<img src="./images/sub_kt_result_title.png" alt="">
						</div>
						<div class="result-img">
							<img src="./images/sub3_img_sample.jpg" alt="">
						</div>
						<button type="button" class="btn" data-popup="#popup-ios-guide">
							<img src="./images/sub_kt_result_btn.jpg" alt="">
						</button>
					</div>
				</div>
				<div class="footer-wrap">
					<div class="copyright">
						<img src="./images/sub_copyright.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="popup ios-guide" id="popup-ios-guide">
			<div class="inner">
				<div class="title">
					<img src="./images/popup_ios_guide_title.png" alt="">
				</div>
				<button type="button" class="btn">
					<img src="./images/popup_ios_guide_btn.jpg" alt="">
				</button>
			</div>
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
		</div>
		<script>
			$('.burger').on('click', function() {
				$('html').toggleClass('menu-opened');
			});
			$('.menu-layer .menu-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
		</script>
	</body>
</html>