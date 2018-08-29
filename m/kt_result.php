<?
    include_once "../include/autoload.php";

    $mnv_f 			= new mnv_function();
    $my_db         = $mnv_f->Connect_MySQL();
    $IphoneYN      = $mnv_f->IPhoneCheck();

	$serial = $_REQUEST["serial"];
    $type   = $_REQUEST["type"];
    $size   = $_REQUEST["size"];

    if ($type == "1")
    {
		$rs_img     = "../files/".$serial."/maumbot_takecare".$size.".jpg";
        $view_img   = "../files/".$serial."/maumbot_takecare2.jpg";
    }else if ($type == "2"){
        $rs_img     = "../files/".$serial."/maumbot_loveyou".$size.".jpg";
        $view_img   = "../files/".$serial."/maumbot_loveyou2.jpg";
	}else if ($type == "3"){
        $rs_img     = "../files/".$serial."/maumbot_thanks".$size.".jpg";
        $view_img   = "../files/".$serial."/maumbot_thanks2.jpg";
	}else if ($type == "4"){
        $rs_img     = "../files/".$serial."/maumbot_cheerup".$size.".jpg";
        $view_img   = "../files/".$serial."/maumbot_cheerup2.jpg";
	}else if ($type == "5"){
        $rs_img     = "../files/".$serial."/maumbot_dontworry".$size.".jpg";
        $view_img   = "../files/".$serial."/maumbot_dontworry2.jpg";
    }

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
							<!-- <img src="./images/sub3_img_sample.jpg" alt=""> -->
							<img src="<?=$view_img?>" alt="">
						</div>
<?
	// if ($IphoneYN == "Y")
	// 	$iphonePopup = 'data-popup="#popup-ios-guide"';
?>						
						<button type="button" class="btn" id="download_img" onclick="go_next()">
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
				<button type="button" class="btn" onclick="open_window('<?=$rs_img?>')">
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

			function downloadImg()
			{
<?
	if ($IphoneYN == "Y")
	{	
?>				
				// alert("새창으로 뜬 이미지를 눌러 저장 해 주시고, 현재 페이지로 오시면 계속 이벤트 참여가 가능합니다");
				// var iosUrl = url.replace("..","http://minivertest.hi-maumbot.co.kr");	
				// window.open(iosUrl, 'event1','width=#, height=#');
				hh_maum9.popup.show($("#popup-ios-guide"));
<?
	}else{
?>				
				location.href = "ajax_download.php?rs=<?=$rs_img?>";
<?
	}
?>				
			}

			function go_next()
			{
				$('#download_img').attr("onclick","downloadImg()");
			}

			function open_window(url)
			{
				var iosUrl = url.replace("..","http://minivertest.hi-maumbot.co.kr");	
				window.open(iosUrl, 'event1','width=#, height=#');
			}
		</script>
	</body>
</html>