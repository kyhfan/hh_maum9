<?
include_once "./include/autoload.php";

$mnv_f 			= new mnv_function();
$my_db         = $mnv_f->Connect_MySQL();
$mobileYN      = $mnv_f->MobileCheck();
// $obYN          = $mnv_f->BrowserCheck();
$IEYN          = $mnv_f->IECheck();
$SafariYN          = $mnv_f->SafariCheck();
// print_r($_SERVER["HTTP_USER_AGENT"]);

$adkey					= $_REQUEST['adkey'];
$_SESSION['ss_adkey']	= $adkey;

if ($mobileYN == "MOBILE")
{
	echo "<script>location.href='m/index.php?media=".$_REQUEST["media"]."&adkey=".$adkey."';</script>";
}else{
	$saveMedia     = $mnv_f->SaveMedia();
	$rs_tracking   = $mnv_f->InsertTrackingInfo($mobileYN);
}

// 파일 저장 폴더 생성용 난수 번호
$folder_name = mnv_phprandom::getString(16);
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta property="og:type" content="website" />
		<meta property="og:title" content="[현대해상] 우리 가족 튼튼 메신저" />
		<meta property="og:url" content="https://www.hi-maumbot.co.kr" />
		<meta property="og:image" content="https://www.hi-maumbot.co.kr/images/share_image.jpg" />
		<meta property="og:description" content="당신의 건강을 위한 메시지가 도착했어요 답장 보내고 마음봇 건강세트를 받아보세요!" />
		<title>[현대해상] 우리가족 튼튼 메신저</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/common.css">
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
		<link type="image/icon" rel="shortcut icon" href="https://www.hi-maumbot.co.kr/images/maum_favi.ico" />
		<script src="./js/jquery-1.11.2.min.js"></script>
		<script src="./js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.min.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
		<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111799987-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'UA-111799987-1');
		</script>
	</head>

	<body>
		<!--NSmart Track Tag Script-->
		<script type='text/javascript'>
			callbackFn = function() {};
			var _nsmart = _nsmart || [];
			_nsmart.host = _nsmart.host || (('https:' == document.location.protocol) ? 'https://' : 'http://');
			_nsmart.push([13294, 34096]); /*1808_현대해상_마음봇3차-메인*/
			document.write(unescape("%3Cscript src='" + _nsmart.host + "n00.nsmartad.com/etc?id=10' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<!--NSmart Track Tag Script End..-->
		<div class="page-wrap">
			<div class="header-wrap">
				<div class="inner">
					<div class="logo">
						<a href="index.php" onclick="NTrackObj.callTrackTag('34116', callbackFn, 13294);click_tracking('상단 현대해상 로고')">
							<img src="./images/logo.png" alt="현대해상 로고">
						</a>
					</div>
					<div class="menu">
						<a href="javascript:void(0)" class="_1" onclick="NTrackObj.callTrackTag('34117', callbackFn, 13294);click_tracking('상단 우리 가족 튼튼 메신저')"></a>
						<a href="javascript:void(0)" class="_2" onclick="NTrackObj.callTrackTag('34118', callbackFn, 13294);click_tracking('상단 전송 완료 메세지 보기')"></a>
						<a href="javascript:void(0)" class="_3" onclick="NTrackObj.callTrackTag('34119', callbackFn, 13294);click_tracking('상단 건강키트 인증 이벤트')"></a>
						<a href="javascript:void(0)" class="_4" onclick="NTrackObj.callTrackTag('34120', callbackFn, 13294);click_tracking('상단 지난 캠페인')"></a>
					</div>
					<!--
<div class="pointer">
</div>
-->
				</div>
			</div>
			<div class="section1-wrap section">
				<div class="inner">
					<div class="title">
					</div>
					<div class="button">
						<button type="button" class="btn-message" onclick="NTrackObj.callTrackTag('34101', callbackFn, 13294);click_tracking('사랑의 건강 기원 메시지 쓰기');nextPage(1)">
							<img src="./images/btn_message2.png" alt="">
							<img src="./images/pencil.png" class="pencil" alt="">
						</button>
					</div>
					<div class="info">
						<div class="txt"></div>
						<div class="button">
							<button type="button" onclick="NTrackObj.callTrackTag('34124', callbackFn, 13294);click_tracking('건강기원 메시지 당첨자 발표');alert('10월 10일에 당첨자가 발표 됩니다.')"></button>
						</div>
					</div>
					<div class="village">
						<div class="mini-maumbot"></div>
					</div>
					<div class="maumbot">
						<!-- <button type="button"></button> -->
						<button type="button" onclick="NTrackObj.callTrackTag('34097', callbackFn, 13294);click_tracking('건강키트 자세히 보기')" data-popup="#popup-kitlist">
							<img src="./images/more_plus.png" class="plus" alt="">
							<img src="./images/more_txt.png" class="txt" alt="">
						</button>
						<div class="chat"></div>
						<div class="bot"></div>
					</div>
					<div class="bg-cloud">
					</div>
					<div class="cloud">
						<div class="_1"></div>
						<div class="_2"></div>
						<div class="_3"></div>
						<div class="_4"></div>
						<div class="_5"></div>
						<div class="_6"></div>
					</div>
					<div class="share">
						<button class="kakao" onclick="NTrackObj.callTrackTag('34098', callbackFn, 13294);click_tracking('카카오톡 공유');sns_share('kt', 'main')"></button>
						<button class="story" onclick="NTrackObj.callTrackTag('34099', callbackFn, 13294);click_tracking('스토리 공유');sns_share('ks', 'main')"></button>
						<button class="facebook" onclick="NTrackObj.callTrackTag('34100', callbackFn, 13294);click_tracking('페이스북 공유');sns_share('fb', 'main')"></button>
						<div class="share-txt"></div>
					</div>
				</div>
			</div>
			<div class="section2-wrap section">
				<div class="inner">
					<div class="pointer">
					</div>
					<div class="card">
					</div>
					<div class="title">
					</div>
					<?
					$total_query 	= "SELECT * FROM member_info_9 WHERE mb_serial <> ''";
					$total_result 	= mysqli_query($my_db, $total_query);
					$total_count	= mysqli_num_rows($total_result);
					?>
						<div class="maumbot">
							<div class="chat1"></div>
							<div class="bot"></div>
							<div class="chat2"></div>
							<span><?=number_format($total_count)?></span>
						</div>
						<div class="slider">
							<div class="slder-area">
								<!-- <div class="swiper-container slder-area"> -->
								<!-- <div class="swiper-wrapper"> -->
								<?
	$query 		= "SELECT * FROM member_info_9 WHERE mb_serial <> '' AND mb_show='Y' GROUP BY mb_serial ORDER BY idx DESC LIMIT 100";
							$result 	= mysqli_query($my_db, $query);

							while ($data = mysqli_fetch_array($result))
							{
								if ($data['mb_type'] == "1")
									$file_name = "/maumbot_takecare2.jpg";
								else if ($data['mb_type'] == "2")
									$file_name = "/maumbot_loveyou2.jpg";
								else if ($data['mb_type'] == "3")
									$file_name = "/maumbot_thanks2.jpg";
								else if ($data['mb_type'] == "4")
									$file_name = "/maumbot_cheerup2.jpg";
								else if ($data['mb_type'] == "5")
									$file_name = "/maumbot_dontworry2.jpg";
							?>
									<div class="slide">
										<img src="./files/<?=$data['mb_serial']?>/<?=$file_name?>" alt="">
									</div>
									<?
							}
							?>
							</div>
							<div class="prev-button">
								<button type="button" class="button-prev slick-prev"></button>
							</div>
							<div class="next-button">
								<button type="button" class="button-next slick-next"></button>
							</div>
						</div>
						<div class="swipe-message">
						</div>
				</div>
			</div>
			<div class="section3-wrap section">
				<div class="inner">
					<div class="maumbot-insta"></div>
					<div class="title"></div>
					<div class="info">
						<div class="button">
							<button type="button" onclick="NTrackObj.callTrackTag('34125', callbackFn, 13294);click_tracking('인증 이벤트 당첨자 발표');alert('당첨자는 11월 2일에 발표 될 예정입니다.')"></button>
						</div>
					</div>
<!--					<button class="btn-verify" onclick="NTrackObj.callTrackTag('34126', callbackFn, 13294);click_tracking('인증 이벤트 참여');" data-popup="#popup-picture">-->
					<button class="btn-verify" onclick="NTrackObj.callTrackTag('34126', callbackFn, 13294);click_tracking('인증 이벤트 참여');location.href='./event_2nd.php';">
						<img src="./images/section3_verify_btn.jpg" alt="">
					</button>
					<div class="list-container">
						<div class="col">
<?
	$block_num 		= 8;
	$page_num 		= 0;
	$next_num		= 1;
	$total_query 	= "SELECT * FROM verify_info_9 WHERE verify_show='Y'";
	$total_result 	= mysqli_query($my_db, $total_query);
	$total_num		= mysqli_num_rows($total_result);
	$total_page		= $total_num / $block_num;
	$limit_num		= $page_num * $block_num;
	$query 			= "SELECT * FROM verify_info_9 WHERE verify_show='Y' ORDER BY idx DESC Limit ".$limit_num.", ".$block_num."";
	$result 		= mysqli_query($my_db, $query);

	while ($data = mysqli_fetch_array($result))
	{
		$verify_data[]	= $data;
	}

	$i = 0;
	foreach($verify_data as $key => $val)
	{
		if ($i == 4)
			break;

	$htag_arr 	= explode(",",str_replace("#","",$val["verify_hashtag"]));
	if (!$htag_arr[0])
		$htag_arr[0] = "마음봇건강키트";

	if (!$htag_arr[1])
		$htag_arr[1] = "우리가족튼튼메신저";			
?>
							<div class="box" data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="./uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
								<div class="img">
									<img src="./uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" alt="">
								</div>
								<div class="hashtag">
									<span>#<?=$htag_arr[0]?></span>
									<span>#<?=$htag_arr[1]?></span>
								</div>
							</div>
<?
		$i++;
	}
?>
							<input type="hidden" id="total-page-num"value="<?=$total_page?>">
<!--
							<div class="box">
								<div class="img">
									<img src="./images/main_sec3_box_sample1.jpg" alt="">
								</div>
								<div class="hashtag">
									<span>#마음봇건강키트</span>
									<span>#우리가족튼튼메신저</span>
								</div>
							</div>
							<div class="box">
								<div class="img">
									<img src="./images/main_sec3_box_sample2.jpg" alt="">
								</div>
								<div class="hashtag">
									<span>#마음봇건강키트</span>
									<span>#우리가족튼튼메신저</span>
								</div>
							</div>
-->
						</div>
						<div class="col indent">

							<div class="box" data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="./uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
								<div class="img">
									<img src="./images/main_sec3_box_sample2.jpg" alt="">
								</div>
								<div class="hashtag">
									<span>#마음봇건강키트</span>
									<span>#우리가족튼튼메신저</span>
								</div>
							</div>
							<div class="box" data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="./uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
								<div class="img">
									<img src="./images/main_sec3_box_sample2.jpg" alt="">
								</div>
								<div class="hashtag">
									<span>#마음봇</span>
								</div>
							</div>
							<div class="box" data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="./uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
								<div class="img">
									<img src="./images/main_sec3_box_sample1.jpg" alt="">
								</div>
								<div class="hashtag">
									<span>#마음봇건강키트</span>
									<span>#우리가족튼튼메신저</span>
								</div>
							</div>
							<div class="box" data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="./uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
								<div class="img">
									<img src="./images/main_sec3_box_sample1.jpg" alt="">
								</div>
								<div class="hashtag">
									<span>#마음봇건강키트</span>
									<span>#우리가족튼튼메신저</span>
								</div>
							</div>
						</div>
						<div class="col">
<?
	$j = 0;
	foreach($verify_data as $key => $val)
	{
		if ($j < $i)
		{
			$j++;
			continue;
		}

		$htag_arr 	= explode(",",str_replace("#","",$val["verify_hashtag"]));
		if (!$htag_arr[0])
			$htag_arr[0] = "마음봇건강키트";

		if (!$htag_arr[1])
			$htag_arr[1] = "우리가족튼튼메신저";
?>	
							<div class="box"  data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="./uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
								<div class="img">
									<img src="./uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" alt="">
								</div>
								<div class="hashtag">
									<span>#<?=$htag_arr[0]?></span>
									<span>#<?=$htag_arr[1]?></span>
								</div>
							</div>
<?
		$j++;
	}
?>
<!--
							<div class="box">
								<div class="img">
									<img src="./images/main_sec3_box_sample1.jpg" alt="">
								</div>
								<div class="hashtag">
									<span>#마음봇건강키트</span>
									<span>#우리가족튼튼메신저</span>
								</div>
							</div>
							<div class="box">
								<div class="img">
									<img src="./images/main_sec3_box_sample2.jpg" alt="">
								</div>
								<div class="hashtag">
									<span>#마음봇건강키트</span>
									<span>#우리가족튼튼메신저</span>
								</div>
							</div>
-->
						</div>
					</div>
					<button type="button" class="btn-more" onclick="loadMore();">
						<img src="./images/main_sec3_more.png" alt="">
					</button>
				</div>
			</div>
			<div class="section4-wrap section">
				<div class="inner">
					<div class="pointer">
					</div>
					<div class="title">
					</div>
					<div class="list">
						<ul>
							<li class="no-margin">
								<div>
									<img src="./images/section4_list1.png" alt="">
								</div>
								<a href="http://event4.hi-maumbot.co.kr" target="_blank">
									<div class="button" onclick="NTrackObj.callTrackTag('34112', callbackFn, 13294);click_tracking('지난캠페인-어서와,마음봇');">
										<button type="button"></button>
									</div>
								</a>
							</li>
							<li>
								<div>
									<img src="./images/section4_list2.png" alt="">
								</div>
								<a href="http://event3.hi-maumbot.co.kr" target="_blank">
									<div class="button" onclick="NTrackObj.callTrackTag('34113', callbackFn, 13294);click_tracking('지난캠페인-잃어버린 마음을 찾아주세요');">
										<button type="button"></button>
									</div>
								</a>
							</li>
							<li class="no-margin">
								<div>
									<img src="./images/section4_list3.png" alt="">
								</div>
								<a href="http://event2.hi-maumbot.co.kr" target="_blank">
									<div class="button" onclick="NTrackObj.callTrackTag('34114', callbackFn, 13294);click_tracking('지난캠페인-마음친구찾기');">
										<button type="button"></button>
									</div>
								</a>
							</li>
							<li>
								<div>
									<img src="./images/section4_list4.png" alt="">
								</div>
								<a href="http://event1.hi-maumbot.co.kr" target="_blank">
									<div class="button" onclick="NTrackObj.callTrackTag('34115', callbackFn, 13294);click_tracking('지난캠페인-그래도,천천히 크렴');">
										<button type="button"></button>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-wrap">
					<div class="copyright">
					</div>
				</div>
			</div>
		</div>
		<div class="popup kitlist" id="popup-kitlist">
			<div class="inner">
				<div class="title">
					<img src="./images/popup_kitlist_title.png" alt="">
				</div>
				<div class="kit-slide-area">
					<div class="kit-slider visual">
						<div class="kit-slide">
							<img src="./images/kit_thumb1.png" alt="">
						</div>
						<div class="kit-slide">
							<img src="./images/kit_thumb2.png" alt="">
						</div>
						<div class="kit-slide">
							<img src="./images/kit_thumb3.png" alt="">
						</div>
						<div class="kit-slide">
							<img src="./images/kit_thumb4.png" alt="">
						</div>
						<div class="kit-slide">
							<img src="./images/kit_thumb5.png" alt="">
						</div>
						<div class="kit-slide">
							<img src="./images/kit_thumb6.png" alt="">
						</div>
						<div class="kit-slide">
							<img src="./images/kit_thumb7.png" alt="">
						</div>
						<div class="kit-slide">
							<img src="./images/kit_thumb8.png" alt="">
						</div>
						<div class="kit-slide">
							<img src="./images/kit_thumb9.png" alt="">
						</div>
					</div>
					<div class="prev-button btn">
						<button type="button" class="button-prev slick-prev2">
							<img src="./images/popup_kitlist_prev.png" alt="">
						</button>
					</div>
					<div class="next-button btn">
						<button type="button" class="button-next slick-next2">
							<img src="./images/popup_kitlist_next.png" alt="">
						</button>
					</div>
				</div>
				<ul class="slide-list">
					<li class="thumb is-active" id="slide0"><a href="javascript:void(0)"><img src="./images/kit_thumb1.png" alt=""></a></li>
					<li class="thumb" id="slide1"><a href="javascript:void(0)"><img src="./images/kit_thumb2.png" alt=""></a></li>
					<li class="thumb" id="slide2"><a href="javascript:void(0)"><img src="./images/kit_thumb3.png" alt=""></a></li>
					<li class="thumb" id="slide3"><a href="javascript:void(0)"><img src="./images/kit_thumb4.png" alt=""></a></li>
					<li class="thumb" id="slide4"><a href="javascript:void(0)"><img src="./images/kit_thumb5.png" alt=""></a></li>
					<li class="thumb" id="slide5"><a href="javascript:void(0)"><img src="./images/kit_thumb6.png" alt=""></a></li>
					<li class="thumb" id="slide6"><a href="javascript:void(0)"><img src="./images/kit_thumb7.png" alt=""></a></li>
					<li class="thumb" id="slide7"><a href="javascript:void(0)"><img src="./images/kit_thumb8.png" alt=""></a></li>
					<li class="thumb" id="slide8"><a href="javascript:void(0)"><img src="./images/kit_thumb9.png" alt=""></a></li>
				</ul>
			</div>
			<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
		</div>
		<input type="hidden" id="folder_name" value="<?=$folder_name?>">
		<input type="hidden" id="file_url" value="">
		<div class="popup picture" id="popup-picture">
			<div class="inner">
				<div class="title">
					<img src="./images/popup_picture_title.png" alt="">
				</div>
				<div class="pic-frame preview-zone">
					<div class="inner">
						<label for="file-upload"></label>
						<input type="file" id="file-upload" name="files[]" accept="image/*;capture=camera">
						<img src="./images/popup_picture_sample.jpg" alt="" id="sample-image">
					</div>
				</div>
				<div class="re-upload-btn">
					<label for="re-upload"></label>
					<input type="file" id="re-upload">
					<img src="./images/popup_picture_reupload.png" alt="">
				</div>
				<button class="btn" onclick="getCropImage()">
					<img src="./images/popup_picture_btn.jpg" alt="">
				</button>
			</div>
			<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
		</div>
		<div class="popup picture-input" id="popup-picture-input">
			<div class="inner">
				<div class="title">
					<img src="./images/popup_picinput_title.png" alt="">
				</div>
				<div class="input-area">
					<form method="post" id="picture-user-info">
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
					</form>
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
				<button class="btn" id="picture-input-btn">
					<img src="./images/popup_picture_btn.jpg" alt="">
				</button>
			</div>
			<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
		</div>
		<div class="popup picture-result" id="popup-picture-result">
			<div class="inner">
				<img src="./images/popup_picresult_bg.jpg" alt="">
				<button class="btn" data-popup="@close">
					<img src="./images/popup_winner_confirm.png" alt="">
				</button>
			</div>
			<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
		</div>
		<div class="popup picture-detail" id="popup-picture-detail">
			<div class="inner">
				<div class="img-area">
					<img src="" alt="" id="verify-img">
				</div>
				<div class="txt-area">
					<div class="name"></div>
					<div class="text">
						<div class="tag">
							<span></span>
							<span></span>
						</div>
						<div class="desc"></div>
					</div>
				</div>
			</div>
			<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
		</div>
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
<!--
		<script type="text/javascript">
			(function(d, s) {
				var j, e = d.getElementsByTagName(s)[0], h = "https://cdn.attractt.com/embed/js/dist/embed.min.js";
				if (typeof AttracttTower === "function" || e.src === h) { return; }
				j = d.createElement(s);
				j.src = h;
				j.async = true;
				e.parentNode.insertBefore(j, e);
			})(document, "script");
		</script>
-->
		
		<script type="text/javascript">
			var instaLoadIdx = 0;
			var instaData;
			var currentLastIdx = 0;
			var hashArray = ['마음봇건강키트', '우리가족튼튼메신저'];
			var instaTotalCount 	= 0;
			var instaTotalPage 		= 0;
//			<!-- Attractt 데이터 호출 코드 -->
			$.ajax({
				url : "https://www.attractt.com/api/posts",
				data : { code : "QCzupctc0vyaB8a" },
				dataType : "jsonp",
				jsonp : "attracttCallback",
				success : function(data) {
//					console.log(data);
					instaData = data;
					instaTotalCount = data.result.count;
					instaTotalPage	= Math.floor(instaTotalCount / 4) - 1;
					$('.list-container .indent .box').each(function(idx, el) {
						var hashArrayDefault = data.result.data[idx].hashtags.split(' ');
						hashArrayDefault.forEach(function(el, idx) {
							el.concat(', ');
						});
						$(this).attr('data-source-url', data.result.data[idx].standard_image);
						$(this).attr('data-source-owner', data.result.data[idx].user_name);
						$(this).attr('data-source-tag', hashArrayDefault);
						$(this).attr('data-source-desc', data.result.data[idx].text);
						$(this).find("img").attr("src", data.result.data[idx].standard_image);
						$(this).find("img").css("display", "block");
						$(this).find("a").attr("onclick","NTrackObj.callTrackTag('33285', callbackFn, 12902);click_tracking('<?=$_gl['POPUP']['EVENT']['FAMILY_DETAIL']?>');open_insta_detail('"+data.result.data[idx].standard_image+"','"+data.result.data[idx].user_name+"','"+encodeURIComponent(data.result.data[idx].text)+"','"+hashArray[0]+"','"+hashArray[1]+"');");
						$(this).find(".hashtag span:first-child").text("#"+hashArray[0]);
						$(this).find(".hashtag span:last-child").text("#"+hashArray[1]);
						currentLastIdx = idx+1;
					});
//					renderingInsta(data, instaLoadIdx);
					if (instaTotalPage > 1)
						$(".section3-wrap .btn-more").show();

				},
				error : function(data) { console.log(data); }
			});
//			<!-- Attractt 데이터 호출 코드 끝 -->
			


			var pageNum = 0;
			function loadMore() {
				pageNum 	= pageNum + 1;
				var passingData = instaData.result.data.slice(currentLastIdx, currentLastIdx+4);
				$.ajax({
					type: "POST",
					url: "./ajax_picture.php",
					data: {
						"insta_data": passingData,
						"page_num": pageNum
					},
					success: function(rs) {
						currentLastIdx = currentLastIdx+4;
//						console.log(rs);
						console.log(currentLastIdx);
						// $(".grid").append(rs);
						rsArray = rs.split('||');
						$(".list-container .col:first-child").append(rsArray[0]);
						$(".list-container .indent").append(rsArray[1]);
						$(".list-container .col:last-child").append(rsArray[2]);

						if (pageNum >= parseFloat($('#total-page-num'))) {
							$(".section3-wrap .btn-more").hide();
						}
					}
				});
			}
		</script>
	
<!--		<button id="popup-open-btn" data-popup="#popup-picture-input"></button> -->
		<script>
		
//			팝업 오픈 샘플코드
//			$(window).on('load', function() {
//				$('#popup-open-btn').trigger('click');
//			});
			
			var menuOffsetArray = [];
			var sectionOffsetArray = [];
			var menuWrapOffset = 0;
			var targetX = 0;
			$(window).on('load', function() {
				$('.header-wrap .menu a').each(function(idx, el) {
					menuOffsetArray.push($(el).offset().left);
				});
				$('.section').each(function(idx, el) {
					sectionOffsetArray.push($(el).offset().top);
				});
				scrolled($(window).scrollTop());

				$('.slder-area').slick({
					lazyLoad: 'ondemand',
					variableWidth: true,
					slidesToShow: 5,
					slidesToScroll: 1,
					arrows: true,
					prevArrow: $('.slick-prev'),
					nextArrow: $('.slick-next')
				});
				$('.kit-slider').slick({
					variableWidth: true,
					arrows: true,
					infinite: false,
					prevArrow: $('.slick-prev2'),
					nextArrow: $('.slick-next2')
				});
				$('.kit-slider').on('afterChange', function(slick, currentSlide) {
					console.log(currentSlide.currentSlide);
					$(".thumb").removeClass("is-active");
					$("#slide" + currentSlide.currentSlide).addClass("is-active");
				});
				$('.kit-slider').on('init', function(slick) {
					console.log(slick);
				});
				<? if ($_REQUEST["g"]) { ?>
					
					go_section('<?=$_REQUEST["g"]?>');
					
				<? } ?>
			});

			$(window).on('resize', function() {
				$('.header-wrap .menu a').each(function(idx, el) {
					//				console.log($(el).offset().left);
					menuOffsetArray[idx] = $(el).offset().left;
				});
				$('.section').each(function(idx, el) {
					//				console.log($(el).offset().left);
					sectionOffsetArray[idx] = $(el).offset().top;
				});
				scrolled($(window).scrollTop(), 'transition');
			});

			$(window).on('scroll', function(e) {
				var currentScroll = $(this).scrollTop() + 98;
				scrolled(currentScroll, 'transition');
			});

			$(".menu a").on('click', function(e) {
				e.preventDefault();
				// console.log($(this).attr("class"));
				var this_class = $(this).attr("class");
				// var last_str	= this_class.substr(this_class.length - 1);

				switch (this_class) {
					case "_1":
						$('html, body').animate({
							scrollTop: 0
						}, 1000);
						break;
					case "_2":
						$('html, body').animate({
							scrollTop: sectionOffsetArray[1] - 92
						}, 1000);
						break;
					case "_3":
						$('html, body').animate({
							scrollTop: sectionOffsetArray[2] - 530
						}, 1000);
						break;
					case "_4":
						$('html, body').animate({
							scrollTop: sectionOffsetArray[3] - 92
						}, 1000);
						break;
				}
			});

			function go_section(param) {
				switch (param) {
					case "1":
						$('html, body').animate({
							scrollTop: 0
						}, 1000);
						break;
					case "2":
						$('html, body').animate({
							scrollTop: sectionOffsetArray[1] - 92
						}, 1000);
						break;
					case "3":
						$('html, body').animate({
							scrollTop: sectionOffsetArray[2] - 530
						}, 1000);
						break;
					case "4":
						$('html, body').animate({
							scrollTop: sectionOffsetArray[3] - 92
						}, 1000);
						break;
				}
			}

			function scrolled(currentScroll, transitionFlag) {
				if (transitionFlag) {
					var transition = 'background 0.46s ease-out';
				} else {
					var transition = '';
				}
				if (currentScroll > sectionOffsetArray[1] && currentScroll < sectionOffsetArray[2] - 540) {
					//				현재 섹션 2번
					targetX = menuOffsetArray[1];
					activeIndex = 2;
					//				console.log("2");
				} else if (currentScroll > sectionOffsetArray[2] - 540 && currentScroll < sectionOffsetArray[3]) {
					//				현재 섹션 3번
					targetX = menuOffsetArray[2];
					//				console.log("3");
					activeIndex = 3;
				} else if (currentScroll > sectionOffsetArray[3]) {
					//				현재 섹션 4번
					targetX = menuOffsetArray[3] - 35;
					//				console.log("4");
					activeIndex = 4;
				} else {
					//				현재 섹션 1번
					targetX = menuOffsetArray[0];
					//				console.log("1");
					activeIndex = 1;
				}
				$('.header-wrap').css({
					backgroundPositionX: targetX - 1360 + 'px',
					transition: transition
				});
				$('.header-wrap .menu a').removeClass('is-active');
				$('.header-wrap .menu ._' + activeIndex).addClass('is-active');
			}
									 
//			var pageNum = 0;
//			$('.section3-wrap .btn-more').off().on('click', function() {
//				pageNum 	= pageNum + 1;
//				$.ajax({
//					type: "POST",
//					url: "./ajax_picture.php",
//					data: {
//						"page_num": pageNum
//					},
//					success: function(rs) {
//						console.log(rs);
//						rsArray = rs.split('||');
//						$(".list-container .col:first-child").append(rsArray[0].replace(/"/gi, "") );
//						$(".list-container .col:nth-child(2)").append(rsArray[1].replace(/"/gi, "") );
//						$(".list-container .col:last-child").append(rsArray[2].replace(/"/gi, "") );
////
////						if (pageNum >= parseFloat($('#total-page-num')))
////							$(".section3-wrap .btn-more").hide();
//						// for(i=0; i<loadCount; i++) {
//						// 	$(".import-sns .col._1").append(rsArray[0]);
//						// 	$(".import-sns .insta").append(rsArray[1]);
//						// 	$(".import-sns .col._3").append(rsArray[0]);
//						// }
//						//			renderingInsta(instaData, instaLoadIdx);
//						// var hashTagList = data.result.data[idx].hashtags.split(' ');
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