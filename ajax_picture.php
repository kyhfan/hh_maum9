<?
include_once "./include/autoload.php";

$mnv_f          = new mnv_function();
$my_db          = $mnv_f->Connect_MySQL();

$block_num 	= 8;
$page_num 	= $_REQUEST["page_num"];
$insta_data = $_REQUEST["insta_data"];
$limit_num	= $page_num * $block_num;
$query 		= "SELECT * FROM verify_info_9 WHERE verify_show='Y' ORDER BY idx DESC Limit ".$limit_num.", ".$block_num."";
// print_r($query);
$result 	= mysqli_query($my_db, $query);

while ($data = mysqli_fetch_array($result))
{
	$verify_data[]	= $data;
}

$i = 0;
$section1   = "";
$section2   = "";
$section3   = "";
foreach($verify_data as $key => $val)
{
	if ($i == 4)
		break;        

	$htag_arr 	= explode(",",str_replace("#","",$val["verify_tag"]));
	if (!$htag_arr[0])
		$htag_arr[0] = "마음봇건강키트";

	if (!$htag_arr[1])
		$htag_arr[1] = "우리가족튼튼메신저";			

	$val['verify_desc'] = str_replace('"','',$val['verify_desc']);

	$section1   .= "<div class='box' data-dynamic-flag='Y' data-popup='#popup-picture-detail' data-source-owner='".$val["verify_name"]."' data-source-url='./uploads/".$val["verify_directory"]."/".$val['verify_file_name']."' data-source-tag='".$htag_arr[0].",".$htag_arr[1]."' data-source-desc='".$val["verify_desc"]."'><div class='img'><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
//	$section1   .= "<div class='box'><div class='img'><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
	// $section1   .= "<figure><div class='img'><a href='javascript:void(0)' onclick=open_detail('".$val["idx"]."');click_tracking('팝업-사진자세히보기');><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
	$section1   .= "<div class='hashtag'><span>#".$htag_arr[0]."</span><span>#".$htag_arr[1]."</span></div></div>";

	$i++;
}

$k = 0;
foreach($insta_data as $key => $val) {
	$htag_arr = explode(" ", $val["hashtags"]);
	if (!$htag_arr[0])
		$htag_arr[0] = "마음봇건강키트";

	if (!$htag_arr[1])
		$htag_arr[1] = "우리가족튼튼메신저";			

	
	$section2   .= "<div class='box' data-dynamic-flag='Y' data-popup='#popup-picture-detail' data-source-owner='".$val["user_name"]."' data-source-url='".$val["standard_image"]."' data-source-tag='".$htag_arr[0].",".$htag_arr[1]."' data-source-desc='".$val["text"]."'><div class='img'><img src='".$val["standard_image"]."'></div>";
//	$section2   .= "<div class='box'><div class='img'><img src='".$val["standard_image"]."'></div>";
//	$section2   .= "<figure><div class='img'><a href='javascript:void(0)' onclick=open_detail('".$val["idx"]."');click_tracking('팝업-사진자세히보기')><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
	$section2   .= "<div class='hashtag'><span>#".$htag_arr[0]."</span><span>#".$htag_arr[1]."</span></div></div>";
}
//foreach($insta_data as $key => $val)
//{
//	if ($k == 8) {
//		break;
//	}
//	if ($k < $i) {
//		$k++;
//		continue;
//	}
////	print_r($val['standard_image']);
//	$htag_arr 	= explode(",",str_replace("#","",$val["verify_hashtag"]));
//	if (!$htag_arr[0])
//		$htag_arr[0] = "마음봇건강키트";
//
//	if (!$htag_arr[1])
//		$htag_arr[1] = "마음봇건강키트";	

//	$val['verify_desc'] = str_replace('"','',$val['verify_desc']);

//	$section2   .= "<figure><div class='img'><a href='javascript:void(0)'><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
//	$section2   .= "<figure><div class='img'><a href='javascript:void(0)' onclick=open_detail('".$val["idx"]."');click_tracking('팝업-사진자세히보기')><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
//	$section2   .= "<figcaption><span>#".$htag_arr[0]."</span><span>#".$htag_arr[1]."</span></figcaption></figure>";

//	$section2   .= "<div class='box'><div class='img'><img src=''></div><div class='hashtag'><span>#어서와마음봇</span><span>#마음봇</span></div></div>";
//	$section2   .= "<div class='box'><div class='img'><img src=''></div><div class='hashtag'><span>#어서와마음봇</span><span>#마음봇</span></div></div>";
	
//	$k++;
//}
//$section2   .= "<div class='box'><div class='img'><img src=''></div><div class='hashtag'><span>#어서와마음봇</span><span>#마음봇</span></div></div>";
//$section2   .= "<div class='box'><div class='img'><img src=''></div><div class='hashtag'><span>#어서와마음봇</span><span>#마음봇</span></div></div>";
//$section2   .= "<div class='box'><div class='img'><img src=''></div><div class='hashtag'><span>#어서와마음봇</span><span>#마음봇</span></div></div>";
//$section2   .= "<div class='box'><div class='img'><img src=''></div><div class='hashtag'><span>#어서와마음봇</span><span>#마음봇</span></div></div>";

$j = 0;
foreach($verify_data as $key => $val)
{
	if ($j < $i)
	{
		$j++;
		continue;
	}

	$htag_arr 	= explode(",",str_replace("#","",$val["verify_tag"]));
	if (!$htag_arr[0])
		$htag_arr[0] = "마음봇건강키트";

	if (!$htag_arr[1])
		$htag_arr[1] = "우리가족튼튼메신저";	

	$val['verify_desc'] = str_replace('"','',$val['verify_desc']);

	
	$section3   .= "<div class='box' data-dynamic-flag='Y' data-popup='#popup-picture-detail' data-source-owner='".$val["verify_name"]."' data-source-url='./uploads/".$val["verify_directory"]."/".$val['verify_file_name']."' data-source-tag='".$htag_arr[0].",".$htag_arr[1]."' data-source-desc='".$val["verify_desc"]."'><div class='img'><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
//	$section3   .= "<div class='box'><div class='img'><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";

	// $section1   .= "<figure><div class='img'><a href='javascript:void(0)' onclick=open_detail('".$val["idx"]."');click_tracking('팝업-사진자세히보기');><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
	$section3   .= "<div class='hashtag'><span>#".$htag_arr[0]."</span><span>#".$htag_arr[1]."</span></div></div>";

	$j++;
}

//for($i=1; $i<=3; $i++) {
//	for($j=0; $j<3; $j++) {
//		${'section'.$i} .=
//			"<div class='box'>
//				<div class='img'>
//					<img src='./images/main_sec3_box_sample1.jpg' alt=''>
//				</div>
//				<div class='hashtag'>
//					<span>#마음봇건강키트</span>
//					<span>#우리가족튼튼메신저</span>
//				</div>
//			</div>";
//	}
//}

	
	

echo $section1."||".$section2."||".$section3;
//echo $section1."||".$section2.";
?>										
<?php
// $loadCount = $_REQUEST['loadCount'];

// // DB
// $content_user = "";
// $content_insta = "";

// for($i=0; $i<$loadCount; $i++)  {
//     $content_user1 .= "<figure>
//                         <div class='img'>
//                             <img src>
//                         </div>
//                         <figcaption>
//                             <span></span>
//                             <span></span>
//                         </figcaption>
//                     </figure>";

//     $content_insta .= "<figure>
//                         <div class='img'>
//                             <img src>
//                         </div>
//                         <figcaption>
//                             <span></span>
//                             <span></span>
//                         </figcaption>
//                     </figure>";

//     $content_user3 .= "<figure>
//                         <div class='img'>
//                             <img src>
//                         </div>
//                         <figcaption>
//                             <span></span>
//                             <span></span>
//                         </figcaption>
//                     </figure>";
// }
// $contentArray = $content_user1.",".$content_insta.",".$content_user3;
// echo $contentArray;
?>