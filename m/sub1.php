<?
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
		<div class="page-wrap sub" style="height: 100%">
<?
	include_once "sub_header.php";
?>			
			<div class="content sub1 sub">
				<div class="step">
					<img src="./images/sub1_step.png" alt="">
				</div>
				<div class="title">
					<img src="./images/sub1_title.png" alt="">
				</div>
				<div class="video-area">
					<div id="player">
						<!-- <img src="./images/sub1_video_sample.jpg" alt=""> -->
					</div>
				</div>
				<div class="btn-wrap">
					<button type="button" class="btn" onclick="alert('영상 재생 후 5초 뒤에 다음단계로 넘어가실 수 있습니다.')">
						<img src="./images/sub1_btn_before.jpg" alt="" id="sub1_btn">
					</button>
					<div class="msg"></div>
				</div>
				<div class="copyright">
					<img src="./images/sub_copyright.png" alt="">
				</div>
			</div>
		</div>
		<script>
			// var swiper = new Swiper ('.slide-area', {
			// 	// Optional parameters
			// 	direction: 'horizontal',
			// 	loop: true,
			// 	slidesPerView: 'auto',
			// 	// loopFillGroupWithBlank: true,
			// 	spaceBetween: 22,
			// 	// touchAngle: 75,
			// 	navigation: {
			// 		nextEl: '.button-next',
			// 		prevEl: '.button-prev',
			// 	}
			// })

			// 유튜브 api 재생 클릭시 이벤트 설정
			var tag = document.createElement('script');

			tag.src = "https://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			var player;

			var yt_width = $(".video-area").width();
			var yt_height = Math.round((yt_width / 16) * 9);

			function onYouTubeIframeAPIReady() {
				player = new YT.Player('player', {
					height: yt_height,
					width: yt_width,
					videoId: 'sarZNWn77GE',
					events: {
						// 'onReady': onPlayerReady,
						'onStateChange': onPlayerStateChange
					}
				});
			}

			var play_flag = 0;
			function onPlayerStateChange(event) {
				if (event.data == 1)
				{
					if (play_flag == 0)
					{
						console.log("1");
						$(".msg").fadeOut("fast");
						setTimeout(function(){
							$("#sub1_btn").attr('src', './images/sub1_btn_after.jpg');
							$(".btn-wrap button").attr("onclick","_nto.callTrack('6452', callback());nextPage(2)");
						}, 5000);
					}
				}else if (event.data == 2){
					play_flag = 1;
					console.log("2");
				}
			}


			$('.burger').on('click', function() {
				$('html').toggleClass('menu-opened');
			});
			$('.menu-layer .menu-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
		</script>
	</body>
</html>