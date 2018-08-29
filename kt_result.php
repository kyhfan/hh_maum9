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
        <link type="image/icon" rel="shortcut icon" href="http://minivertest.hi-maumbot.co.kr/images/maum_favi.ico" />
        <script src="./js/jquery-1.11.2.min.js"></script>
        <script src="./js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
        <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
    </head>
	<body>
		<div class="page-wrap">
			<div class="content sub">
				<div class="sub-wrap">
					<div class="inner">
						<div class="kt-message-area">
							<img src="./images/kt_result_message.png" alt="">
						</div>
						<div class="kt-title-area">
							<img src="./images/kt_result_title.png" alt="">
						</div>
						<div class="kt-card-result">
							<img src="./images/sub_step3_card_result.jpg" alt="">
						</div>
						<div class="kt-btn-area">
                            <button type="button" onclick="go_next();">
                                <img src="./images/kt_result_button.png" alt="">
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
			var rs_img = "";
			var change_rs_img = "";
			$(window).on('load', function() {
				// if (localStorage.type == 1)
				// 	rs_img	= "./files/" + localStorage.serial + "/maumbot_takecare2.jpg";
				// else if (localStorage.type == 2)
				// 	rs_img	= "./files/" + localStorage.serial + "/maumbot_loveyou2.jpg";
				// else if (localStorage.type == 3)
				// 	rs_img	= "./files/" + localStorage.serial + "/maumbot_thanks2.jpg";
				// else if (localStorage.type == 4)
				// 	rs_img	= "./files/" + localStorage.serial + "/maumbot_cheerup2.jpg";
				// else if (localStorage.type == 5)
				// 	rs_img	= "./files/" + localStorage.serial + "/maumbot_dontworry2.jpg";
				// $('.card-result img').attr("src",rs_img);
				// $('.btn-area._3 a').attr("href",rs_img);
				// $('.btn-area._3 button').attr("onclick","downloadImg('"+rs_img+"')");
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
                $('.btn-area._3 button').attr("onclick","downloadImg('"+change_rs_img+"')");
			}
		</script>
	</body>
</html>