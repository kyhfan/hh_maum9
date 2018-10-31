<?
include_once "./include/autoload.php";
$mnv_f 			= new mnv_function();
$my_db         = $mnv_f->Connect_MySQL();

// 20181031 추가 당첨자 문자발송 작업
function send_winner_lms()
{
	global $my_db;
	$mnv_f 			= new mnv_function();


	$httpmethod = "POST";
	// 미니버타이징
	$url = "http://api.openapi.io/ppurio/1/message/lms/minivertising";
	$clientKey = "MTAyMC0xMzg3MzUwNzE3NTQ3LWNlMTU4OTRiLTc4MGItNDQ4MS05NTg5LTRiNzgwYjM0ODEyYw==";
	$contentType = "Content-Type: application/x-www-form-urlencoded";

	//		$query = "SELECT * FROM winner_list_lms WHERE winner_name='3rd' AND winner_phone IN ('01030033965','01029280422')";
	//		$query = "SELECT * FROM winner_list_lms WHERE 1";
	$query = "SELECT * FROM winner_list_lms WHERE 1 AND winner_phone LIKE '01029280422'";
	$result = mysqli_query($my_db, $query);

	if($result) {
		while ($data = mysqli_fetch_array($result))
		{
			//				print_r($data);
			//				$response = sendRequest_winner_3rd($httpmethod, $url, $clientKey, $contentType, $data["mb_phone"]);
			$response = sendRequest_winner_3rd($httpmethod, $url, $clientKey, $contentType, $data);

			$json_data = json_decode($response, true);


			//			받아온 결과값을 DB에 저장 및 Variation

			$query3 = "INSERT INTO sms_info(send_phone, send_status, cmid, send_regdate) values('".$data["mb_phone"]."','".$json_data['result_code']."','".$json_data['cmid']."','".date("Y-m-d H:i:s")."')";
			$result3 		= mysqli_query($my_db, $query3);
			print_r($json_data);
			
//			발송여부 업데이트
		}
	}

}


function sendRequest_winner_2nd($httpMethod, $url, $clientKey, $contentType, $phone) {

	//create basic authentication header
	$headerValue = $clientKey;
	$headers = array("x-waple-authorization:" . $headerValue);

	$params = array(
		'send_time' => '',
		'send_phone' => '07048883804',
		'dest_phone' => $phone,
		//'dest_phone' => '01030033965',
		'send_name' => '',
		'dest_name' => '',
		'subject' => '[당첨] 현대해상 어서와 마음봇! 인증 이벤트',
		'msg_body' => "
[현대해상 어서와,마음봇! 인증 이벤트]

안녕하세요^^ 현대해상 마음봇 담당자입니다.
현대해상 마음봇 2차 인증 이벤트 [2등 당첨]을 축하드립니다!

본인 인증과 경품 발송을 위해 아래의 링크에서 개인 정보를 입력해주세요.

3월 14일(수)까지 정보를 입력하지 않으시면, 당첨은 자동 취소되니 양해 부탁드립니다.

https://goo.gl/forms/1xnikzGIJ9PNmkji1

마음봇 이벤트에 대한 많은 관심과 사랑 감사드립니다.
"
	);

	//curl initialization
	$curl = curl_init();

	//create request url
	//$url = $url."?".$parameters;

	curl_setopt ($curl, CURLOPT_URL , $url);
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt ($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt ($curl, CURLINFO_HEADER_OUT, true);
	curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, false);

	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);

	$response = curl_exec($curl);

	$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	$responseHeaders = curl_getinfo($curl, CURLINFO_HEADER_OUT);


	curl_close($curl);

	return $response;
}

function sendRequest_winner_3rd($httpMethod, $url, $clientKey, $contentType, $data) {

	//create basic authentication header
	$headerValue = $clientKey;
	$headers = array("x-waple-authorization:" . $headerValue);

	$params = array(
		'send_time' => '',
		'send_phone' => '07048883804',
		'dest_phone' => $data['winner_phone'],
		//'dest_phone' => '01030033965',
		'send_name' => '',
		'dest_name' => '',
		'subject' => '[현대해상 우리가족 튼튼 메신저 / 3등 당첨을 축하합니다]',
		'msg_body' => "
안녕하세요 ".$data['winner_name']." 님,
현대해상 마음봇 건강키트 인증 이벤트 <3등 당첨>을 축하드립니다!
본인 인증과 경품 발송을 위해 아래의 링크에서 개인 정보를 입력해주세요.
11월 15일(목)까지 정보가 입력되지 않을 시, 당첨은 자동 취소되니 양해 부탁드립니다.

https://goo.gl/forms/FRAJv8e414eErjF83

마음봇 이벤트에 대한 많은 관심과 사랑 감사드립니다^^
"
	);

	//curl initialization
	$curl = curl_init();

	//create request url
	//$url = $url."?".$parameters;

	curl_setopt ($curl, CURLOPT_URL , $url);
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt ($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt ($curl, CURLINFO_HEADER_OUT, true);
	curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, false);

	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);

	$response = curl_exec($curl);

	$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	$responseHeaders = curl_getinfo($curl, CURLINFO_HEADER_OUT);


	curl_close($curl);

	return $response;
}

//$asdasd = send_winner_lms();
// reg_phone();
?>
