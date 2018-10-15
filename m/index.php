<?
include_once "../include/autoload.php";

$mnv_f 			= new mnv_function();
$my_db         = $mnv_f->Connect_MySQL();
$mobileYN      = $mnv_f->MobileCheck();
// $obYN          = $mnv_f->BrowserCheck();
$IEYN          = $mnv_f->IECheck();
$SafariYN          = $mnv_f->SafariCheck();
// print_r($_SERVER["HTTP_USER_AGENT"]);

$adkey					= $_REQUEST['adkey'];
$_SESSION['ss_adkey']	= $adkey;

if ($mobileYN == "PC")
{
	echo "<script>location.href='../index.php?media=".$_REQUEST["media"]."&adkey=".$adkey."';</script>";
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
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, maximum-scale=1, minimum-scale=1.0;">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta property="og:type" content="website" />
		<meta property="og:title" content="[현대해상] 우리 가족 튼튼 메신저" />
		<meta property="og:url" content="https://www.hi-maumbot.co.kr" />
		<meta property="og:image" content="https://www.hi-maumbot.co.kr/images/share_image.jpg" />
		<meta property="og:description" content="당신의 건강을 위한 메시지가 도착했어요 답장 보내고 마음봇 건강세트를 받아보세요!" />
		<title>[현대해상] 우리가족 튼튼 메신저</title>
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/common.css">
		<!--		<link rel="stylesheet" href="../lib/cropper/cropper.css">-->
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
		<link type="image/icon" rel="shortcut icon" href="https://www.hi-maumbot.co.kr/images/maum_favi.ico" />
		<script src="../js/jquery-1.11.2.min.js"></script>
		<script src="../js/m_main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
		<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
		<script type="text/javascript">
			var _ntp = {};
			_ntp.host = (('https:' == document.location.protocol) ? 'https://' : 'http://')
			_ntp.dID = 978;
			document.write(unescape("%3Cscript src='" + _ntp.host + "nmt.nsmartad.com/content?cid=1' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script>
			callback = function() {}
		</script>
		<div class="page-wrap">
			<div class="menu-layer">
				<div class="inner">
					<button type="button" class="menu-close"></button>
					<ul class="menu-list">
						<li class="_1"><a href="javascript:void(0)" data-value="1" onclick="_nto.callTrack('6463', callback());click_tracking('상단 우리 가족 튼튼 메신저')"><img src="./images/menu_1.png" alt="" style="width: 144px;"></a></li>
						<li class="_2"><a href="javascript:void(0)" data-value="2" onclick="_nto.callTrack('6464', callback());click_tracking('상단 전송 완료 메세지 보기')"><img src="./images/menu_2.png" alt="" style="width: 144px;"></a></li>
						<li class="_3"><a href="javascript:void(0)" data-value="3" onclick="_nto.callTrack('6465', callback());click_tracking('상단 건강키트 인증 이벤트')"><img src="./images/menu_3.png" alt="" style="width: 141px;"></a></li>
						<li class="_4"><a href="javascript:void(0)" data-value="4" onclick="_nto.callTrack('6466', callback());click_tracking('상단 지난 캠페인')"><img src="./images/menu_4.png" alt="" style="width: 77px;"></a></li>
					</ul>
					<ul class="share-list">
						<li><button type="button" class="kt" onclick="_nto.callTrack('6447', callback());click_tracking('카카오톡 공유');sns_share('kt', 'main')"></button></li>
						<li><button type="button" class="ks" onclick="_nto.callTrack('6448', callback());click_tracking('스토리 공유');sns_share('ks', 'main')"></button></li>
						<li><button type="button" class="fb" onclick="_nto.callTrack('6449', callback());click_tracking('페이스북 공유');sns_share('fb', 'main')"></button></li>
					</ul>
					<img src="./images/share_guide.png" alt="" class="share-guide">
					<div class="box-point"></div>
				</div>
			</div>
			<div class="header-wrap">
				<div class="inner">
					<div class="logo">
						<a href="index.php" onclick="_nto.callTrack('6462', callback());click_tracking('상단 현대해상 로고');">
							<img src="./images/logo.png" alt="현대해상 로고">
						</a>
					</div>
					<div class="burger">
						<!-- <a href="javascript:void(0)" class="burger_link"> -->
						<span class="line top"></span>
						<span class="line mid"></span>
						<span class="line bot"></span>
						<!-- </a> -->
					</div>
				</div>
			</div>
			<div class="section1-wrap section">
				<div class="inner">
					<div class="title">
						<img src="./images/main_sec1_title.png" alt="">
					</div>
					<div class="button">
						<button type="button" class="btn-message" onclick="_nto.callTrack('6450', callback());click_tracking('사랑의 건강 기원 메시지 쓰기');nextPage(1)">
							<img src="./images/main_sec1_btn_bg.png" alt="">
							<img src="./images/main_sec1_btn_pencile.png" class="pencil" alt="">
						</button>
					</div>
					<!-- <div class="info">
<div class="txt"></div>
<div class="button">
<button type="button"></button>
</div>
</div> -->
					<div class="objs">
						<img src="./images/main_sec1_obj.png" alt="">
						<div class="info-group" onclick="_nto.callTrack('6446', callback());click_tracking('건강키트 자세히 보기')" data-popup="#popup-kitlist">
							<img src="./images/main_sec1_info_group.png" alt="">
						</div>
						<div class="plus-icon" onclick="_nto.callTrack('6446', callback());click_tracking('건강키트 자세히 보기')" data-popup="#popup-kitlist">
							<img src="./images/main_sec1_plus.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="section1_2-wrap section eat">
				<div class="bg">
					<img src="./images/main_sec1_2_bg.png" alt="">
				</div>
				<div class="wrapper">
					<div class="text">
						<img src="./images/main_sec1_2_text.png" alt="">
					</div>
					<button type="button" onclick="_nto.callTrack('6467', callback());click_tracking('건강기원 메시지 당첨자 발표');" data-popup="#popup-winner-list">
						<img src="./images/main_sec1_2_btn.png" alt="">
					</button>
				</div>
			</div>
			<div class="section2-wrap section eat">
				<div class="inner">
					<div class="title">
						<img src="./images/main_sec2_title.png" alt="">
					</div>
					<div class="slide-wrap">
						<div class="swiper-container slide-area">
							<div class="swiper-wrapper">
								<?
								$total_query 	= "SELECT * FROM member_info_9 WHERE mb_serial <> ''";
								$total_result 	= mysqli_query($my_db, $total_query);
								$total_count	= mysqli_num_rows($total_result);

								//								$query 		= "SELECT * FROM member_info_9 WHERE mb_serial <> '' AND mb_show='Y' GROUP BY mb_serial ORDER BY idx DESC LIMIT 100";
								$query 		= "SELECT * FROM member_info_9_1st WHERE mb_serial <> '' AND mb_show='Y' GROUP BY mb_serial ORDER BY idx";
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

								<div class="swiper-slide slide">
									<img src="../files/<?=$data['mb_serial']?>/<?=$file_name?>" alt="">
								</div>
								<?
								}
								?>
							</div>
						</div>
						<div class="prev-button arrow">
							<button type="button" class="button-prev">
								<img src="./images/main_slide_prev.png" alt="">
							</button>
						</div>
						<div class="next-button arrow">
							<button type="button" class="button-next">
								<img src="./images/main_slide_next.png" alt="">
							</button>
						</div>
						<div class="obj-group">
							<div class="bot">
								<img src="./images/main_sec2_maumbot.png" alt="">
							</div>
							<div class="balloon left">
								<img src="./images/main_sec2_balloon_left.png" alt="">
							</div>
							<div class="balloon right">
								<img src="./images/main_sec2_balloon_right.png" alt="">
								<span class="total"><?=number_format($total_count)?></span>
							</div>
						</div>
					</div>
					<div class="msg">
						<img src="./images/main_sec2_swipe_msg.png" alt="">
					</div>
				</div>
			</div>
			<div class="section3-wrap section">
				<div class="inner">
					<div class="white-bg">
						<div class="bot">
							<img src="./images/main_sec3_maumbot.png" alt="">
						</div>
						<div class="title">
							<img src="./images/main_sec3_title.png" alt="">
						</div>
						<div class="info-box">
							<!-- <img src="./images/main_sec3_infobox.jpg" alt=""> -->
							<img src="./images/main_sec3_infobox.png" alt="">
							<button type="button" onclick="_nto.callTrack('6468', callback());click_tracking('인증 이벤트 당첨자 발표');alert('당첨자는 11월 2일에 발표 될 예정입니다.')">
								<img src="./images/main_sec3_infobox_btn.jpg" alt="">
							</button>
						</div>
						<!--						<button type="button" class="btn-verify" onclick="_nto.callTrack('6469', callback());click_tracking('인증 이벤트 참여');" data-popup="#popup-picture">-->
						<button type="button" class="btn-verify" onclick="_nto.callTrack('6469', callback());click_tracking('인증 이벤트 참여');location.href='./event_2nd.php'">
							<img src="./images/main_sec3_verify.jpg" alt="">
						</button>
						<!-- <div class="not-open">
<img src="./images/event_not open.png" alt="">
</div> -->
						<div class="list-container">
							<div class="col indent">
								<div class="box" data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="../uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
									<div class="img">
										<img src="./images/main_sec3_box_sample1.jpg" alt="">
									</div>
									<div class="hashtag">
										<span>#마음봇건강키트</span>
										<span>#우리가족튼튼메신저</span>
									</div>
								</div>
								<div class="box" data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="../uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
									<div class="img">
										<img src="./images/main_sec3_box_sample2.jpg" alt="">
									</div>
									<div class="hashtag">
										<span>#마음봇건강키트</span>
										<span>#우리가족튼튼메신저</span>
									</div>
								</div>
								<div class="box" data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="../uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
									<div class="img">
										<img src="./images/main_sec3_box_sample1.jpg" alt="">
									</div>
									<div class="hashtag">
										<span>#마음봇건강키트</span>
										<span>#우리가족튼튼메신저</span>
									</div>
								</div>
							</div>
							<div class="col campaign">
								<?
	$block_num 		= 3;
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
										if ($i == 3)
											break;

										$htag_arr 	= explode(",",str_replace("#","",$val["verify_tag"]));
//										if (!$htag_arr[0])
											$htag_arr[0] = "마음봇건강키트";

//										if (!$htag_arr[1])
											$htag_arr[1] = "우리가족튼튼메신저";			
								?>
								<div class="box" data-dynamic-flag="Y" data-popup="#popup-picture-detail" data-source-owner="<?=$val["verify_name"]?>" data-source-url="../uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" data-source-tag="<?=$htag_arr[0]?>, <?=$htag_arr[1]?>" data-source-desc="<?=$val["verify_desc"]?>">
									<div class="img">
										<img src="../uploads/<?=$val["verify_directory"]?>/<?=$val["verify_file_name"]?>" alt="">
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
							</div>
						</div>
						<button type="button" class="btn-more" onclick="loadMore();">
							<img src="./images/main_sec3_more.png" alt="">
						</button> 
					</div>
				</div>
			</div>
			<div class="section4-wrap section">
				<div class="bg">
					<img src="./images/main_sec4_bg.png" alt="">
				</div>
				<div class="wrapper">
					<div class="title">
						<img src="./images/main_sec4_title.png" alt="">
					</div>
					<div class="list-campaign">
						<div class="memory">
							<img src="./images/main_sec4_memory1.png" alt="">
							<a href="http://event4.hi-maumbot.co.kr" target="_blank" class="btn" onclick="_nto.callTrack('6458', callback());click_tracking('지난캠페인-어서와,마음봇');"></a>
						</div>
						<div class="memory">
							<img src="./images/main_sec4_memory2.png" alt="">
							<a href="http://event3.hi-maumbot.co.kr" target="_blank" class="btn" onclick="_nto.callTrack('6459', callback());click_tracking('지난캠페인-잃어버린 마음을 찾아주세요');"></a>
						</div>
						<div class="memory">
							<img src="./images/main_sec4_memory3.png" alt="">
							<a href="http://event2.hi-maumbot.co.kr" target="_blank" class="btn" onclick="_nto.callTrack('6460', callback());click_tracking('지난캠페인-마음친구찾기');"></a>
						</div>
						<div class="memory">
							<img src="./images/main_sec4_memory4.png" alt="">
							<a href="http://event1.hi-maumbot.co.kr" target="_blank" class="btn" onclick="_nto.callTrack('6461', callback());click_tracking('지난캠페인-그래도,천천히 크렴');"></a>
						</div>
					</div>
					<div class="footer">
						<img src="./images/copyright.png" alt="">
					</div>
				</div>
			</div>
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
						<input type="file" id="file-upload" name="files[]" accept="file_extension|audio/*|video/*|image/*|media_type">
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
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
		</div>
		<div class="popup picture-result" id="popup-picture-result">
			<div class="inner">
				<div class="title">
					<img src="./images/popup_picresult_title.png" alt="">
				</div>
				<button class="btn" data-popup="@close">
					<img src="./images/popup_winner_btn.png" alt="">
				</button>
				<div class="guide-block">
					<img src="./images/popup_event_guide.png" alt="">
				</div>
			</div>
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
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
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
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
						<button type="button" class="button-prev slick-prev">
							<img src="./images/popup_kitlist_prev.png" alt="">
						</button>
					</div>
					<div class="next-button btn">
						<button type="button" class="button-next slick-next">
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
			<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>
		</div>
		<div class="popup winner-list" id="popup-winner-list">
			<div class="inner">
				<div class="title">
					<img src="./images/popup_winnerlist_title.png" alt="">
				</div>
				<div class="input-wrap">
					<div class="input-group">
						<input type="text" id="search-val">
						<button class="search-num"></button>
					</div>
				</div>
				<div class="list-wrap">
					<div class="list-box">
						<div class="inner"></div>
						<div class="search-list"></div>
					</div>
				</div>
				<button type="button" class="btn" data-popup="@close">
					<img src="./images/popup_winner_btn.png" alt="">
				</button>
				<div class="guide-area">
					<img src="./images/popup_winner_guide.png" alt="">
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
		<!--		<button id="popup-open-btn" data-popup="#popup-picture-result"></button> -->
		<script>
			//			 $(window).on('load', function() {
			//			 	$('#popup-open-btn').trigger('click');
			//			 });
			var instaLoadIdx = 0;
			var instaData;
			var currentLastIdx = 0;
			var hashArray = ['마음봇건강키트', '우리가족튼튼메신저'];
			var instaTotalCount 	= 0;
			var instaTotalPage 		= 0;
			//			<!-- Attractt 데이터 호출 코드 -->
			$.ajax({
				url : "https://www.attractt.com/api/posts",
//				data : { code : "QCzupctc0vyaB8a" },
				data : { code : "xDAmH923veFqGgC" },
				dataType : "jsonp",
				jsonp : "attracttCallback",
				success : function(data) {
															console.log(data);
					instaData = data;
					instaTotalCount = data.result.count;
					instaTotalPage	= Math.floor(instaTotalCount / 4) - 1;
					$('.list-container .indent .box').each(function(idx, el) {
						var hashArrayDefault = data.result.data[idx].hashtags.split(' ');
						var hashArray = [hashArrayDefault[0], hashArrayDefault[1]];
						hashArrayDefault.forEach(function(el, idx) {
							el.concat(', ');
						});
						$(this).attr('data-source-url', data.result.data[idx].standard_image);
						$(this).attr('data-source-owner', data.result.data[idx].user_name);
						$(this).attr('data-source-tag', hashArrayDefault);
						$(this).attr('data-source-desc', data.result.data[idx].text);
						$(this).find("img").attr("src", data.result.data[idx].standard_image);
						$(this).find("img").css("display", "block");
						//						$(this).find("a").attr("onclick","NTrackObj.callTrackTag('33285', callbackFn, 12902);click_tracking('<?=$_gl['POPUP']['EVENT']['FAMILY_DETAIL']?>');open_insta_detail('"+data.result.data[idx].standard_image+"','"+data.result.data[idx].user_name+"','"+encodeURIComponent(data.result.data[idx].text)+"','"+hashArray[0]+"','"+hashArray[1]+"');");
//						$(this).find(".hashtag span:first-child").text("#"+hashArray[0]);
//						$(this).find(".hashtag span:last-child").text("#"+hashArray[1]);
						$(this).find(".hashtag span:first-child").text("#마음봇건강키트");
						$(this).find(".hashtag span:last-child").text("#우리가족튼튼메신저");
						currentLastIdx = idx+1;
						console.log(currentLastIdx);
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
				var passingData = instaData.result.data.slice(currentLastIdx, currentLastIdx+3);
				$.ajax({
					type: "POST",
					url: "./ajax_picture.php",
					data: {
						"insta_data": passingData,
						"page_num": pageNum
					},
					success: function(rs) {
						currentLastIdx = currentLastIdx+3;
						//						console.log(rs);
						console.log(currentLastIdx);
						// $(".grid").append(rs);
						rsArray = rs.split('||');
						$(".list-container .col:last-child").append(rsArray[0]);
						$(".list-container .indent").append(rsArray[1]);

						if (pageNum >= parseFloat($('#total-page-num'))) {
							$(".section3-wrap .btn-more").hide();
						}
					}
				});
			}

			$('.kit-slider').slick({
				variableWidth: true,
				arrows: true,
				infinite: false,
				prevArrow: $('.slick-prev'),
				nextArrow: $('.slick-next')
			})
			$('.kit-slider').on('afterChange', function(slick, currentSlide) {
				// console.log(currentSlide.currentSlide);
				$(".thumb").removeClass("is-active");
				$("#slide" + currentSlide.currentSlide).addClass("is-active");
			});

			var swiper = new Swiper('.slide-area', {
				// Optional parameters
				direction: 'horizontal',
				//				loop: true,
				slidesPerView: 'auto',
				// loopFillGroupWithBlank: true,
				spaceBetween: 22,
				// touchAngle: 75,
				navigation: {
					nextEl: '.button-next',
					prevEl: '.button-prev',
				}
			})

			//			var menuOffsetArray = [];
			var sectionOffsetArray = [];
			//			var menuWrapOffset = 0;
			//			var targetX = 0;
			$(window).on('load', function() {
				// $('.header-wrap .menu a').each(function(idx, el) {
				// 	menuOffsetArray.push($(el).offset().left);
				// });
				$('.section').each(function(idx, el) {
					sectionOffsetArray.push($(el).offset().top);
				});
				// scrolled($(window).scrollTop());
				<?
	if ($_REQUEST["g"]) { ?>
				go_section('<?=$_REQUEST["g"]?>'); 
				<?
						} 
				?>
			});
			//
			//			$(window).on('resize', function() {
			//				$('.header-wrap .menu a').each(function(idx, el) {
			//					//				console.log($(el).offset().left);
			//					menuOffsetArray[idx] = $(el).offset().left;
			//				});
			//				$('.section').each(function(idx, el) {
			//					//				console.log($(el).offset().left);
			//					sectionOffsetArray[idx] = $(el).offset().top;
			//				});
			//				scrolled($(window).scrollTop(), 'transition');
			//			});
			//
			$(window).on('scroll', function(e) {
				var currentScroll = $(this).scrollTop() + 37;
				scrolled(currentScroll);
			});
			//
			function scrolled(currentScroll) {
				if (currentScroll > sectionOffsetArray[2] && currentScroll < sectionOffsetArray[3]) {
					//				현재 섹션 2번
					activeIndex = 2;
					//									console.log("2");
				} else if (currentScroll > sectionOffsetArray[3] && currentScroll < sectionOffsetArray[4]) {
					//				현재 섹션 3번
					activeIndex = 3;
					//									console.log("3");
				} else if (currentScroll > sectionOffsetArray[4]) {
					//				현재 섹션 4번
					activeIndex = 4;
					//									console.log("4");
				} else {
					//				현재 섹션 1번
					activeIndex = 1;
					//									console.log("1");
				}
				setTimeout(function() {
					$('.menu-layer .menu-list li').each(function() {
						if ($(this).hasClass('_' + activeIndex)) {
							$(this).find('img').attr('src', './images/menu_' + activeIndex + '_active.png');
						} else {
							var originImagSrc = $(this).find('img').attr('src').split('.')[1].replace('_active', '');
							$(this).find('img').attr('src', '.' + originImagSrc + '.png');
						}
					});
				}, 500);

			}
			$('.burger').on('click', function() {
				$('html').toggleClass('menu-opened');
			});
			// $('.burger_link').on('click', function() {
			// $('html').toggleClass('menu-opened');
			// return false;
			// });
			$('.menu-layer .menu-close').on('click', function() {
				$('html').removeClass('menu-opened');
			});
			$('.menu-list a').on('click', function() {
				$('html').removeClass('menu-opened');

				var this_class = $(this).data("value");
				console.log(this_class);
				switch (this_class) {
					case 1:
						$('html, body').animate({
							scrollTop: 0
						}, 1000);
						break;
					case 2:
						$('html, body').animate({
							scrollTop: sectionOffsetArray[2] - 37
						}, 1000);
						break;
					case 3:
						$('html, body').animate({
							scrollTop: sectionOffsetArray[3] - 185
						}, 1000);
						break;
					case 4:
						$('html, body').animate({
							scrollTop: sectionOffsetArray[4] - 37
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
							scrollTop: sectionOffsetArray[2] - 37
						}, 1000);
						break;
					case "3":
						$('html, body').animate({
							scrollTop: sectionOffsetArray[3] - 185
						}, 1000);
						break;
					case "4":
						$('html, body').animate({
							scrollTop: sectionOffsetArray[4] - 37
						}, 1000);
						break;
				}
			}

			var winnerList = "";
			$(document).on('popupOpened', function(popup) {
				if(popup.target.id == 'popup-winner-list') {
					$.ajax({
						type   : "POST",
						dataType: "json",
						async  : false,
						url    : "../winner_list.json",
						success: function(rs) {
							winnerList = rs;
							for(i=0; i<rs.length; i++) {
								var name = rs[i].A.replaceAt(1, 'O');
								$('#popup-winner-list .list-box .inner').append("<span>"+name+" "+rs[i].B+"</span>");
							}
						}
					})
				}
			});
			$('#popup-winner-list .search-num').on('click', function() {
				var targetVal = $('#search-val').val();
				var outputArray = new Array();
				if(targetVal && targetVal.length == 4) {
					for(i=0; i<winnerList.length; i++) {
						if(winnerList[i].B == targetVal) {
							var name = winnerList[i].A.replaceAt(1, 'O');
							outputArray.push({
								"A": name,
								"B": winnerList[i].B,
							});
							$('#popup-winner-list .list-box .search-list').empty();
						}
					}
					if(outputArray.length>0) {
						for(i=0; i<outputArray.length; i++) {
							$('#popup-winner-list .list-box .search-list').append("<span>"+outputArray[i].A+" "+outputArray[i].B+"</span>").show();
						}
					} else {
						$('#popup-winner-list .list-box .search-list').empty().hide();
						alert('당첨내역이 없습니다.');
					}
				} else {
					alert('휴대폰번호 뒤 4자리를 정확히 입력해주세요');
					$('#popup-winner-list .list-box .search-list').empty().hide();
					$('#popup-winner-list #search-val').focus();
				}
			});
			$('#popup-winner-list #search-val').off().on('keyup', function(e) {
				var keyCode = e.keyCode;
				if($(this).val().length<1) {
					$('#popup-winner-list .list-box .search-list').empty().hide();
				}
			});

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