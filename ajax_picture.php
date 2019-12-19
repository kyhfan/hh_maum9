<?
include_once "./include/autoload.php";

$mnv_f          = new mnv_function();
$my_db          = $mnv_f->Connect_MySQL();

$htag_arr = ['마음봇건강키트', '우리가족튼튼메신저', '현대해상'];
$block_num 	= 12;
$page_num 	= $_REQUEST["page_num"];
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

	shuffle($htag_arr);

	$val['verify_desc'] = str_replace('"','',$val['verify_desc']);

	$section1   .= "<div class='box' data-dynamic-flag='Y' data-popup='#popup-picture-detail' data-source-owner='".$val["verify_name"]."' data-source-url='./uploads/".$val["verify_directory"]."/".$val['verify_file_name']."' data-source-tag='".$htag_arr[0].",".$htag_arr[1]."' data-source-desc='".$val["verify_desc"]."'><div class='img'><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
	$section1   .= "<div class='hashtag'><span>#".$htag_arr[0]."</span><span>#".$htag_arr[1]."</span></div></div>";

	$i++;
}

$k = 0;
foreach($verify_data as $key => $val)
{
	if ($k < $i)
	{
		$k++;
		continue;
	}
	if ($k == 8)
		break;        
	shuffle($htag_arr);
	
	$section2   .= "<div class='box' data-dynamic-flag='Y' data-popup='#popup-picture-detail' data-source-owner='".$val["verify_name"]."' data-source-url='./uploads/".$val["verify_directory"]."/".$val['verify_file_name']."' data-source-tag='".$htag_arr[0].",".$htag_arr[1]."' data-source-desc='".$val["verify_desc"]."'><div class='img'><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
	$section2   .= "<div class='hashtag'><span>#".$htag_arr[0]."</span><span>#".$htag_arr[1]."</span></div></div>";

	$k++;
}

$j = 0;
foreach($verify_data as $key => $val)
{
	if ($j < 8)
	{
		$j++;
		continue;
	}

	shuffle($htag_arr);

	$val['verify_desc'] = str_replace('"','',$val['verify_desc']);

	
	$section3   .= "<div class='box' data-dynamic-flag='Y' data-popup='#popup-picture-detail' data-source-owner='".$val["verify_name"]."' data-source-url='./uploads/".$val["verify_directory"]."/".$val['verify_file_name']."' data-source-tag='".$htag_arr[0].",".$htag_arr[1]."' data-source-desc='".$val["verify_desc"]."'><div class='img'><img src='./uploads/".$val["verify_directory"]."/".$val["verify_file_name"]."'></div>";
	$section3   .= "<div class='hashtag'><span>#".$htag_arr[0]."</span><span>#".$htag_arr[1]."</span></div></div>";

	$j++;
}

echo $section1."||".$section2."||".$section3;
?>										