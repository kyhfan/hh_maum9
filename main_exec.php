<?php
include_once "./include/autoload.php";
include "./lib/gd-text/api/textBox/Box.php";
include "./lib/gd-text/api/textBox/Color.php";

use GDText\Box;
use GDText\Color;

switch ($_REQUEST['exec'])
{
	case "insert_tracking_info" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        $gubun          = $mnv_f->MobileCheck();

        $log_query		= "INSERT INTO tracking_info_9(tracking_media, tracking_refferer, tracking_ipaddr, tracking_date, tracking_gubun) values('".$_SESSION['ss_media']."','".$_SERVER['HTTP_REFERER']."','".$_SERVER['REMOTE_ADDR']."',now(),'".$gubun."')";
		$log_result		= mysqli_query($my_db, $log_query);

		if ($log_result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;
	break;

    case "insert_click_info" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        $gubun          = $mnv_f->MobileCheck();

        $click_name 	= $_REQUEST['click_name'];

        $click_query	= "INSERT INTO click_info_9(click_name, click_refferer, click_ipaddr, click_gubun, click_date) values ('".$click_name."','".$_SERVER['HTTP_REFERER']."','".$_SERVER['REMOTE_ADDR']."','".$gubun."','".date("Y-m-d H:i:s")."')";
        $result			= mysqli_query($my_db, $click_query);

    break;

	case "insert_share_info" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        $gubun          = $mnv_f->MobileCheck();

        $sns_media		= $_REQUEST['sns_media'];
		$sns_flag			= $_REQUEST['sns_flag'];


		$query 		= "INSERT INTO share_info_9(sns_media, sns_gubun,sns_ipaddr, inner_media, sns_regdate) values('".$sns_media."','".$gubun."','".$_SERVER['REMOTE_ADDR']."','".$_SESSION['ss_media']."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag ="Y"; 
		else
			$flag ="N";

		echo $flag;

	break;

	case "insert_kakao_share" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        $gubun          = $mnv_f->MobileCheck();

        $mb_serial		= $_REQUEST['mb_serial'];

		$query 		= "UPDATE member_info_9 SET mb_kakao='Y' WHERE mb_serial='".$mb_serial."'";
		$result 	= mysqli_query($my_db, $query);
	break;

	case "insert_download" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        $gubun          = $mnv_f->MobileCheck();

        $mb_serial		= $_REQUEST['mb_serial'];

		$query 		= "UPDATE member_info_9 SET mb_download='Y' WHERE mb_serial='".$mb_serial."'";
		$result 	= mysqli_query($my_db, $query);
	break;

	case "insert_member_info" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        $gubun          = $mnv_f->MobileCheck();

        $mb_name		=	$_REQUEST["mb_name"];
        $mb_phone		=	$_REQUEST["mb_phone"];
        $mb_zipcode	    =	$_REQUEST["mb_zipcode"];
        $mb_addr1		=	$_REQUEST["mb_addr1"];
        $mb_addr2		=	$_REQUEST["mb_addr2"];
        $mb_serial		=	$_REQUEST["mb_serial"];
        $mb_type		=	$_REQUEST["mb_type"];
        $mb_size		=	$_REQUEST["mb_size"];
        $mb_message		=	$_REQUEST["mb_message"];

        // $url = 'http://api2.tnkfactory.com/tnk/ad.g.ad';
        $url = 'http://api2.tnkfactory.com/tnk/api/postback/v2/'.$_SESSION['ss_adkey'].'?event=action_complete';
		// $param = array(
		// 	// 'appkey'   	=> "2fb0f2a8455971b5baafbeaf44c39265",
		// 	'adkey'   	=> $_SESSION['ss_adkey']
		// );
	 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
		 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		 
		$contents = curl_exec($ch);
		curl_close($ch);


		$query 		= "INSERT INTO member_info_9(mb_ipaddr, mb_name, mb_phone, mb_type, mb_size, mb_zipcode, mb_addr1, mb_addr2, mb_message, mb_serial, mb_gubun, mb_media, mb_regdate) values('".$_SERVER['REMOTE_ADDR']."','".$mb_name."','".$mb_phone."','".$mb_type."','".$mb_size."','".$mb_zipcode."','".$mb_addr1."','".$mb_addr2."','".$mb_message."','".$mb_serial."','".$gubun."','".$_SESSION['ss_media']."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag ="Y"; 
		else
			$flag ="N";

		echo $flag;

	break;

    case "create_image" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();

        $BgImageType	=	$_REQUEST["BgImageType"];
        $BgTo			=	$_REQUEST["BgTo"];
        $BgFrom	    	=	$_REQUEST["BgFrom"];
        $BgMsg1		    =	$_REQUEST["BgMsg1"];
        $BgMsg2		    =	$_REQUEST["BgMsg2"];
        $BgMsg3		    =	$_REQUEST["BgMsg3"];
        $BgMsg4		    =	$_REQUEST["BgMsg4"];
        $BgMsg5		    =	$_REQUEST["BgMsg5"];

        $serial         = $mnv_f->create_serial();
        // $serial         = "test";
        // if ($gubun == "PC")
        //     $dot_str    = ".";
        // else
        //     $dot_str    = "..";

        $im1 = imagecreatefromjpeg("./images/bg_image/1125_2436/1125_2436_0".$BgImageType.".jpg");
        $im2 = imagecreatefromjpeg("./images/bg_image/1440_2560/1440_2560_0".$BgImageType.".jpg");
        $im3 = imagecreatefromjpeg("./images/bg_image/1440_2880/1440_2880_0".$BgImageType.".jpg");
        $im4 = imagecreatefromjpeg("./images/bg_image/1440_2960/1440_2960_0".$BgImageType.".jpg");
    
    // print_r($im1);
        
        $i = 1;
        while($i < 5)
        {
            switch($i)
            {
                case "1" :
                    $im = $im1;
                    
                    // 받는 사람
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setFontSize(70);
                    $box->setBox(284, 1050, 700, 0);
                    $box->setTextAlign('left', 'center');
                    $box->draw($BgTo);
                    
                    // 보내는 사람
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setFontSize(70);
                    $box->setBox(402, 1791, 700, 0);
                    $box->setTextAlign('left', 'center');
                    $box->draw($BgFrom);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(135, 1210, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg1);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(135, 1350, 860, 0);
                    $box->setTextAlign('center', 'center');
                    // $box->setBackgroundColor(new Color(255, 86, 77));
                    $box->draw($BgMsg2);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(135, 1490, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg3);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(135, 1630, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg4);
                    
                    // $box = new Box($im);
                    // $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    // $box->setFontSize(70);
                    // $box->setFontColor(new Color(62, 48, 29));
                    // $box->setBox(135, 1415, 860, 0);
                    // $box->setTextAlign('center', 'center');
                    // $box->draw($BgMsg5);
                break;
                case "2" :
                    $im = $im2;

                    // 받는 사람
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setFontSize(70);
                    // $box->setBox(428, 886, 700, 0);
                    $box->setBox(428, 1162, 700, 0);
                    $box->setTextAlign('left', 'center');
                    $box->draw($BgTo);
                    
                    // 보내는 사람
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setFontSize(70);
                    // $box->setBox(546, 1825, 700, 0);
                    $box->setBox(546, 1913, 700, 0);
                    $box->setTextAlign('left', 'center');
                    $box->draw($BgFrom);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    // $box->setBox(280, 1070, 860, 0);
                    $box->setBox(280, 1331, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg1);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    // $box->setBox(280, 1210, 860, 0);
                    $box->setBox(280, 1471, 860, 0);
                    $box->setTextAlign('center', 'center');
                    // $box->setBackgroundColor(new Color(255, 86, 77));
                    $box->draw($BgMsg2);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    // $box->setBox(280, 1350, 860, 0);
                    $box->setBox(280, 1611, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg3);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    // $box->setBox(280, 1490, 860, 0);
                    $box->setBox(280, 1751, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg4);
                    
                    // $box = new Box($im);
                    // $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    // $box->setFontSize(70);
                    // $box->setFontColor(new Color(62, 48, 29));
                    // $box->setBox(280, 1630, 860, 0);
                    // $box->setTextAlign('center', 'center');
                    // $box->draw($BgMsg5);
                break;
                case "3" :
                    $im = $im3;

                    // 받는 사람
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setFontSize(70);
                    // $box->setBox(428, 1201, 700, 0);
                    $box->setBox(428, 1478, 700, 0);
                    $box->setTextAlign('left', 'center');
                    $box->draw($BgTo);
                    
                    // 보내는 사람
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setFontSize(70);
                    // $box->setBox(546, 2140, 700, 0);
                    $box->setBox(546, 2232, 700, 0);
                    $box->setTextAlign('left', 'center');
                    $box->draw($BgFrom);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(280, 1653, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg1);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(280, 1791, 860, 0);
                    $box->setTextAlign('center', 'center');
                    // $box->setBackgroundColor(new Color(255, 86, 77));
                    $box->draw($BgMsg2);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(280, 1931, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg3);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(280, 2071, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg4);
                    
                    // $box = new Box($im);
                    // $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    // $box->setFontSize(70);
                    // $box->setFontColor(new Color(62, 48, 29));
                    // $box->setBox(280, 1945, 860, 0);
                    // $box->setTextAlign('center', 'center');
                    // $box->draw($BgMsg5);
                break;
                case "4" :
                    $im = $im4;

                    // 받는 사람
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setFontSize(70);
                    $box->setBox(428, 1556, 700, 0);
                    $box->setTextAlign('left', 'center');
                    $box->draw($BgTo);
                    
                    // 보내는 사람
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setFontSize(70);
                    $box->setBox(546, 2309, 700, 0);
                    $box->setTextAlign('left', 'center');
                    $box->draw($BgFrom);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(280, 1733, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg1);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(280, 1873, 860, 0);
                    $box->setTextAlign('center', 'center');
                    // $box->setBackgroundColor(new Color(255, 86, 77));
                    $box->draw($BgMsg2);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(280, 2013, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg3);
                    
                    $box = new Box($im);
                    $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    $box->setFontSize(70);
                    $box->setFontColor(new Color(62, 48, 29));
                    $box->setBox(280, 2153, 860, 0);
                    $box->setTextAlign('center', 'center');
                    $box->draw($BgMsg4);
                    
                    // $box = new Box($im);
                    // $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
                    // $box->setFontSize(70);
                    // $box->setFontColor(new Color(62, 48, 29));
                    // $box->setBox(280, 2030, 860, 0);
                    // $box->setTextAlign('center', 'center');
                    // $box->draw($BgMsg5);
                break;
            }
            
            if (!is_dir("./files/".$serial."/"))
            {
                mkdir("./files/".$serial."/");
            }
            // header("Content-type: image/png");

            if ($BgImageType == 1)
                $output_image   = "./files/".$serial."/maumbot_takecare".$i.".jpg";
            else if ($BgImageType == 2)
                $output_image   = "./files/".$serial."/maumbot_loveyou".$i.".jpg";
            else if ($BgImageType == 3)
                $output_image   = "./files/".$serial."/maumbot_thanks".$i.".jpg";
            else if ($BgImageType == 4)
                $output_image   = "./files/".$serial."/maumbot_cheerup".$i.".jpg";
            else if ($BgImageType == 5)
                $output_image   = "./files/".$serial."/maumbot_dontworry".$i.".jpg";
            // chmod($output_image,0755);
            // imagepng($im,'test.png');
            imagejpeg($im,$output_image);

            $i++;
        }
        echo $serial."||".$BgImageType;
    
    break;
	case "crop_save_image" :
		$data           	= $_REQUEST['crop_image_url'];
		$folder_name    	= $_REQUEST['folder_name'];
		$file_url 	    	= $_REQUEST['file_url'];
		$media				= $_SESSION['ss_media'];

		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		// $file_time = date("YmdHis"); 
		// $file_time = PHPRandom::getString(16);
		$file_Name = "maumbot_".$folder_name;	 // 실제 업로드 될 파일명 생성	(본인이 원하는 파일명 지정 가능)	 
		$_SESSION['ss_filename']	= $file_Name.".jpg";
		$_SESSION['ss_filefolder']	= $folder_name;
		$_SESSION['ss_fileurl']		= $file_url;

		$change_file_name = $file_Name;			 // 변경된 파일명을 변수에 지정 
		//$real_name = addslashes($real_name);		// 업로드 되는 원래 파일명(업로드 하기 전 실제 파일명) 
		//$real_size = $file_size;                         // 업로드 되는 파일 크기 (byte)
		$save_dir = './uploads/'.$folder_name.'/';

		// 폴더 존재 여부 확인 후 존재하지 않으면 폴더 생성
		if ( !is_dir($save_dir) ) {
			if(@mkdir($save_dir, 0777)) { 
				if(is_dir($save_dir)) { 
					@chmod($save_dir, 0777); 
				}
			}
		}

		//파일을 저장할 디렉토리 및 파일명 전체 경로
		$dest_url = $save_dir . $change_file_name.'.jpg';


		if (!file_put_contents($dest_url, $data))
		{
			die("파일을 지정한 디렉토리에 업로드하는데 실패했습니다.");
		}else{
			echo "Y";
		}

	break;
	case "crop_save_mobile_image" :
		$data           	= $_REQUEST['crop_image_url'];
		$folder_name    	= $_REQUEST['folder_name'];
		$file_url 	    	= $_REQUEST['file_url'];
		$media				= $_SESSION['ss_media'];

		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);

		// $file_time = date("YmdHis"); 
		// $file_time = PHPRandom::getString(16);
		$file_Name = "maumbot_".$folder_name;	 // 실제 업로드 될 파일명 생성	(본인이 원하는 파일명 지정 가능)	 
		$_SESSION['ss_filename']	= $file_Name.".jpg";
		$_SESSION['ss_filefolder']	= $folder_name;
		$_SESSION['ss_fileurl']		= $file_url;

		$change_file_name = $file_Name;			 // 변경된 파일명을 변수에 지정 
		//$real_name = addslashes($real_name);		// 업로드 되는 원래 파일명(업로드 하기 전 실제 파일명) 
		//$real_size = $file_size;                         // 업로드 되는 파일 크기 (byte)
		$save_dir = './uploads/'.$folder_name.'/';

		// 폴더 존재 여부 확인 후 존재하지 않으면 폴더 생성
		if ( !is_dir($save_dir) ) {
			if(@mkdir($save_dir, 0777)) { 
				if(is_dir($save_dir)) { 
					@chmod($save_dir, 0777); 
				}
			}
		}

		//파일을 저장할 디렉토리 및 파일명 전체 경로
		$dest_url = $save_dir . $change_file_name.'.jpg';


		if (!file_put_contents($dest_url, $data))
		{
			die("파일을 지정한 디렉토리에 업로드하는데 실패했습니다.");
		}else{
			echo "Y";
		}

	break;
		
	case "input_verify_info":
		$mnv_f          = new mnv_function();
		$my_db          = $mnv_f->Connect_MySQL();
		$gubun          = $mnv_f->MobileCheck();
		
		$verify_name		= $_REQUEST['verify_name'];
		$verify_phone		= $_REQUEST['verify_phone'];
		$verify_file_name	= $_SESSION['ss_filename'];
		$verify_file_folder	= $_SESSION['ss_filefolder'];
		$verify_file_url	= $_SESSION['ss_fileurl'];
		$verify_file_tag	= $_REQUEST['file_tag'];
		$verify_file_desc	= $_REQUEST['file_desc'];
//		$verify_desc		= $_SESSION['ss_family_desc'];
//		$verify_hashtag		= $_SESSION['ss_family_hashtag'];

		$img_size 	= getimagesize(str_replace("../","./",$verify_file_url));
		// $img_size 	= getimagesize($family_file_url);
		$query 		= "INSERT INTO verify_info_9(verify_ipaddr, verify_name, verify_phone, verify_directory, verify_file_url, verify_file_width, verify_file_height, verify_file_name, verify_desc, verify_tag, verify_gubun, verify_media, verify_regdate) values ('".$_SERVER['REMOTE_ADDR']."','".$verify_name."','".$verify_phone."','".$verify_file_folder."','".$verify_file_url."','".$img_size[0]."','".$img_size[1]."','".$verify_file_name."','".$verify_file_desc."','".$verify_file_tag."','".$gubun."','".$_SESSION['ss_media']."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = $query;
//			$flag = "N";
		// print_r($query);
		echo $flag;
		
	break;
		
}
?>
