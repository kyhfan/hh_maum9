<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/common.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/css/swiper.min.css">
		<link rel="stylesheet" href="./css/sub.css">
		<script src="./js/jquery-1.11.2.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.min.js"></script>
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
						<a href="#" class="_1"></a>
						<a href="#" class="_2"></a>
						<a href="#" class="_3"></a>
						<a href="#" class="_4"></a>
					</div>
				</div>
			</div>
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
											<input type="checkbox" class="checkbox" id="check1">
											<div class="checkbox-visual"></div>
										</div>
									</li>
									<li>
										<div class="desc _2">
											<img src="./images/sub_step3_desc_2.jpg" alt="">
										</div>
										<div class="check">
											<label for="check2"></label>
											<input type="checkbox" class="checkbox" id="check2">
											<div class="checkbox-visual"></div>
										</div>
									</li>
									<li>
										<div class="desc _3">
											<img src="./images/sub_step3_desc_3.jpg" alt="">
										</div>
										<div class="check">
											<label for="check3"></label>
											<input type="checkbox" class="checkbox" id="check3">
											<div class="checkbox-visual"></div>
										</div>
									</li>
									<li>
										<div class="desc _4">
											<img src="./images/sub_step3_desc_4.jpg" alt="">
										</div>
										<div class="check">
											<label for="check4"></label>
											<input type="checkbox" class="checkbox" id="check4">
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
							<button type="button">
								<img src="./images/sub_step3_btn.jpg" alt="">
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
			});
		</script>
	</body>
</html>