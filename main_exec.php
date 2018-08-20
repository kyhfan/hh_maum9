<?php
include_once "./include/autoload.php";
include "./lib/gd-text/api/textBox/Box.php";
include "./lib/gd-text/api/textBox/Color.php";

use GDText\Box;
use GDText\Color;

switch ($_REQUEST['exec'])
{
	case "insert_tracking_info" :
		$log_query		= "INSERT INTO ".$_gl['tracking_info_table']."(tracking_media, tracking_refferer, tracking_ipaddr, tracking_date, tracking_gubun) values('".$_SESSION['ss_media']."','".$_SERVER['HTTP_REFERER']."','".$_SERVER['REMOTE_ADDR']."',now(),'".$gubun."')";
		$log_result		= mysqli_query($my_db, $log_query);

		if ($log_result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;
	break;

	case "insert_share_info" :
		$sns_media		= $_REQUEST['sns_media'];
		$sns_flag			= $_REQUEST['sns_flag'];


		$query 		= "INSERT INTO ".$_gl['share_info_table']."(sns_media, sns_gubun,sns_ipaddr, inner_media, sns_regdate) values('".$sns_media."','".$gubun."','".$_SERVER['REMOTE_ADDR']."','".$_SESSION['ss_media']."','".date("Y-m-d H:i:s")."')";
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

        // $serial         = $mnv_f->create_serial();
        $serial         = "test";

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
                break;
                case "2" :
                    $im = $im2;
                break;
                case "3" :
                    $im = $im3;
                break;
                case "4" :
                    $im = $im4;
                break;
            }
            // 받는 사람
            $box = new Box($im);
            $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
            $box->setFontColor(new Color(62, 48, 29));
            $box->setFontSize(70);
            $box->setBox(428, 886, 700, 0);
            $box->setTextAlign('left', 'center');
            $box->draw($BgTo);
            
            // 보내는 사람
            $box = new Box($im);
            $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
            $box->setFontColor(new Color(62, 48, 29));
            $box->setFontSize(70);
            $box->setBox(546, 1825, 700, 0);
            $box->setTextAlign('left', 'center');
            $box->draw($BgFrom);
            
            $box = new Box($im);
            $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
            $box->setFontSize(70);
            $box->setFontColor(new Color(62, 48, 29));
            $box->setBox(280, 1070, 860, 0);
            $box->setTextAlign('center', 'center');
            $box->draw($BgMsg1);
            
            $box = new Box($im);
            $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
            $box->setFontSize(70);
            $box->setFontColor(new Color(62, 48, 29));
            $box->setBox(280, 1210, 860, 0);
            $box->setTextAlign('center', 'center');
            // $box->setBackgroundColor(new Color(255, 86, 77));
            $box->draw($BgMsg2);
            
            $box = new Box($im);
            $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
            $box->setFontSize(70);
            $box->setFontColor(new Color(62, 48, 29));
            $box->setBox(280, 1350, 860, 0);
            $box->setTextAlign('center', 'center');
            $box->draw($BgMsg3);
            
            $box = new Box($im);
            $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
            $box->setFontSize(70);
            $box->setFontColor(new Color(62, 48, 29));
            $box->setBox(280, 1490, 860, 0);
            $box->setTextAlign('center', 'center');
            $box->draw($BgMsg4);
            
            $box = new Box($im);
            $box->setFontFace('./lib/gd-text/asset/font/nanumBold.ttf');
            $box->setFontSize(70);
            $box->setFontColor(new Color(62, 48, 29));
            $box->setBox(280, 1630, 860, 0);
            $box->setTextAlign('center', 'center');
            $box->draw($BgMsg5);
            
            if (is_dir("./files/".$serial."/"))
            {
                mkdir("./files/".$serial."/");
            }
            // header("Content-type: image/png");
            $output_image   = "./files/".$serial."/".$i.".png";
            // chmod($output_image,0755);
            // imagepng($im,'test.png');
            imagepng($im,$output_image);
            echo $output_image;

            $i++;
        }
    

    break;
}
?>
