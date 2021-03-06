
$(function(){
	
	var $win = $(window),
		$doc = $(document),
		$html = $('html'),
		$body = $('body');
	
	window.hh_maum9 = {};
	
	var locationArray = location.href.split('/');
	var currentLocation = locationArray[locationArray.length-1].split('.')[0];
	
	hh_maum9.popup = {
		bind : function(){
			$doc
				.on('click', '[data-popup]', function(e){
				var $this = $(this),
					$html = $('html'),
					val = $this.attr('data-popup');

				if (val.match('@close')){
					hh_maum9.popup.close($this.closest('.popup'));
				} else {
					if($this.attr('data-dynamic-flag')) {
						hh_maum9.popup.contentChange($(val), $this.data());
					} else {
						hh_maum9.popup.show($(val));
					}
				}

				if ($this.is('a')){
					e.preventDefault();
				}
			})
				.on('click', '[data-popup-close]', function(e){
				var $this = $(this),
					val = $this.attr('data-popup-close');

				hh_maum9.popup.close($(val));

				if ($this.is('a')){
					e.preventDefault();
				}
			});
		},
		show : function($popup){
			if ($popup.length){
				var $wrap = $popup.parent(),
					$html = $('html');


				if (!$wrap.hasClass('popup-wrap')){
					$popup.wrap('<div class="popup-wrap"></div>');
					$wrap = $popup.parent();
				}

				if (!$wrap.hasClass('is-opened')){
					$wrap
						.stop().fadeIn(10, function(){
						$popup.trigger('afterPopupOpened', $wrap);
					})
						.addClass('is-opened');
				}

				if (!$html.hasClass('popup-opened')){
					$html.addClass('popup-opened');
				}

				$popup.trigger('popupOpened', $wrap);
			}
		},
		close : function($popup){
			if ($popup.length){
				var $wrap = $popup.parent(),
					$html = $('html');

				$wrap.stop().fadeOut(10, function(){
					$wrap.removeClass('is-opened');

					if (!$('.popup-wrap.is-opened').length){
						$html.removeClass('popup-opened');
					}

					//					$popup.trigger('afterpopupClosed', $wrap);
				});

				$popup.trigger('popupClosed', $wrap);
			}
		},
		contentChange: function($popup, datas) {
			if(datas.popup == '#popup-picture-detail') {
				var startIdx = Math.floor(datas.sourceOwner.length/2);
				var ModifiedNameArr = datas.sourceOwner.split("");
				var sliceLength = (datas.sourceOwner.length >= 5) ? 2 : 1;
				ModifiedNameArr.splice(startIdx, 1, '*');
				if(sliceLength>1) {
					ModifiedNameArr.splice(startIdx+1, 1, '*');
				}
				var outputName = ModifiedNameArr.join("");
				var imgUrl = datas.sourceUrl,
					desc = datas.sourceDesc,
					tag = datas.sourceTag.split(','),
					name = outputName;

				$popup.find('#verify-img').attr('src', imgUrl);
				$popup.find('.name').text(name);
				$popup.find('.tag > span:first-child').text('#'+tag[0]);
				$popup.find('.tag > span:last-child').text('#'+tag[1]);
				$popup.find('.desc').text(desc);
			}
			hh_maum9.popup.show($popup);
		}
	};
	hh_maum9.popup.bind();
	
//	var agree1 	= "N";
//	var agree2 	= "N";
//
//    $(".navi-menu ul li a").on("click", function(e){
//        e.preventDefault();
//        var $this = $(this);
//        $('html').removeClass('menu-opened');
//
//        $('.c-header').removeClass('c-header--active');
//        // isOpened = false;
//        var url = $this.attr('href');
//        setTimeout(function(){
//            // if(!$this.parent().hasClass('is-active')) {
//            if($('.page-wrap > .content').hasClass('main') && ($this.data('slide'))) {
//                // 서브페이지 분기 필요
//                var target = $this.data('slide');
//				var scTop = $('#'+target).offset().top;
//				
//				if (target == "goRoutin")
//					$('html, body').animate({scrollTop:scTop-94}, 500);
//				else
//					$('html, body').animate({scrollTop:scTop+1}, 500);
//				
//            }else{
//                location.href = url;
//            }
//
//        }, 100);
//    });
	
	

	
	
//	var share = {
//		bind: function() {
//			Kakao.init('8bd4e13e1a2a0d80bbd60d994b744ce1');
//
//			$(document).on('click', '[data-share-target]', function() {
//
//				share.open($(this));
//			});
//		},
//		open: function(target) {
//			// 공유 로직 들어 가야 함
//			// console.log(target.data("share-target"));
//			if (target.data("share-target") == "fb")
//			{
//				var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://routine.itsskin.com/index.php?media=fb'),'sharer','toolbar=0,status=0,width=600,height=325');
//
//				$.ajax({
//					type   : "POST",
//					async  : false,
//					url    : "./main_exec.php",
//					data:{
//						"exec"          : "insert_share_info",
//						"sns_media"     : target.data("share-target")
//					}
//				});
//	
//			} else if (target.data("share-target") == "ks") {
//				Kakao.Story.share({
//					url: 'http://routine.itsskin.com/index.php?media=ks'
//				});
//				$.ajax({
//					type   : "POST",
//					async  : false,
//					url    : "./main_exec.php",
//					data:{
//						"exec" : "insert_share_info",
//						"sns_media" : target.data("share-target")
//					}
//				});
//	
//			}else{
//				var newWindow = window.open('http://blog.naver.com/LinkShare.nhn?url=http://routine.itsskin.com/index.php?media=blog','sharer','toolbar=0,status=0,width=600,height=325');
//				$.ajax({
//					type   : "POST",
//					async  : false,
//					url    : "./main_exec.php",
//					data:{
//						"exec" : "insert_share_info",
//						"sns_media" : target.data("share-target")
//					}
//				});
//			}
//
//			// 공유 로직 들어 가야 함
//			// setTimeout(function(){
//			// 	popup.close($("#popup-share"));
//			// 	popup.open($("#popup-input"));
//			// }, 2000);
//		}
//	}
//	share.bind();
	
	$("#submit-info").one("click", function(event){
		$(this).off(event);
		var mb_name 	= $("#mb_name").val();
		var mb_phone1 	= $("#mb_phone1").val();
		var mb_phone2 	= $("#mb_phone2").val();
		var mb_phone3 	= $("#mb_phone3").val();
		var mb_zipcode 	= $("#mb_zipcode").val();
		var mb_addr1 	= $("#mb_addr1").val();
		var mb_addr2 	= $("#mb_addr2").val();
		var mb_phone 	= mb_phone1 + mb_phone2 + mb_phone3;
		var mb_message	= localStorage.BgTo+"<br>"+localStorage.BgMsg1+"<br>"+localStorage.BgMsg2+"<br>"+localStorage.BgMsg3+"<br>"+localStorage.BgMsg4+"<br>"+localStorage.BgFrom;

		if (mb_name == "") {
			alert("이름을 입력해 주세요.");
			$("#mb_name").focus();
			return false;
		}

		if (mb_phone1 == "") {
			alert("전화번호를 입력해 주세요.");
			$("#mb_phone1").focus();
			return false;
		}
		
		if (mb_phone2 == "") {
			alert("전화번호를 입력해 주세요.");
			$("#mb_phone2").focus();
			return false;
		}
		if (mb_phone3 == "") {
			alert("전화번호를 입력해 주세요.");
			$("#mb_phone3").focus();
			return false;
		}
		if (mb_addr1 == "") {
			alert("주소를 입력해 주세요.");
			return false;
		}
		if (mb_addr2 == "") {
			alert("상세주소를 입력해 주세요.");
			$("#mb_addr2").focus();
			return false;
		}

		if ($("#terms1").is(":checked") === false)
		{
			alert('개인정보 수집 및 이용약관에 동의하셔야만 이벤트 참여가 가능합니다.');
			return false;
		}

		if ($("#terms2").is(":checked") === false)
		{
			alert('개인정보 취급 위탁 약관에 동의하셔야만 이벤트 참여가 가능합니다.');
			return false;
		}
	
		$.ajax({
			type:"POST",
			data:{
				"exec"				: "insert_member_info",
				"mb_name"			: mb_name,
				"mb_phone"			: mb_phone,
				"mb_zipcode"		: mb_zipcode,
				"mb_addr1"			: mb_addr1,
				"mb_addr2"			: mb_addr2,
				"mb_serial"			: localStorage.serial,
				"mb_type"			: localStorage.type,
				"mb_size"			: localStorage.size,
				"mb_message"		: mb_message
			},
			url: "./main_exec.php",
			success: function(response){
				console.log(response);
				// localStorage.clear();
				if (response == "Y")
				{
					hh_maum9.popup.show($("#popup-thanks"));
				}else{
					alert("참여자가 많습니다. 다시시도해 주세요!");
				}
			}
		});
	});

	$(".find-addr").on("click", function(){
		new daum.Postcode({
			oncomplete: function(data) {
				// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
	
				// 도로명 주소의 노출 규칙에 따라 주소를 조합한다.
				// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
				var fullRoadAddr = data.roadAddress; // 도로명 주소 변수
				var extraRoadAddr = ''; // 도로명 조합형 주소 변수
	
				// 법정동명이 있을 경우 추가한다. (법정리는 제외)
				// 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
				if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
					extraRoadAddr += data.bname;
				}
				// 건물명이 있고, 공동주택일 경우 추가한다.
				if(data.buildingName !== '' && data.apartment === 'Y'){
				   extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
				}
				// 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
				if(extraRoadAddr !== ''){
					extraRoadAddr = ' (' + extraRoadAddr + ')';
				}
				// 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.
				if(fullRoadAddr !== ''){
					fullRoadAddr += extraRoadAddr;
				}
	
				// 우편번호와 주소 정보를 해당 필드에 넣는다.
				document.getElementById('mb_zipcode').value = data.zonecode; //5자리 새우편번호 사용
				document.getElementById('mb_addr1').value = fullRoadAddr;
			}
		}).open();	
	});
});

function go_link(param)
{
	if (confirm("이벤트 참여가 완료 되지 않았습니다. 이동하시겠습니까?"))
	{
		location.href = "index.php?g=" + param;
	}
}


function only_num(obj)
{
	var inText = obj.value;
	var outText = "";
	var flag = true;
	var ret;
	for(var i = 0; i < inText.length; i++)
	{
		ret = inText.charCodeAt(i);
		if((ret < 48) || (ret > 57))
		{
			flag = false;
		}
		else
		{
			outText += inText.charAt(i);
		}
	}

	if(flag == false)
	{
		alert("전화번호는 숫자입력만 가능합니다.");
		obj.value = outText;
		obj.focus();
		return false;
	}
	return true;
}

function chk_numlen(obj, len, num)
{
	if(obj.value.length >= len) {
		// alert("전화번호는 11자를 초과할 수 없습니다.");
		// obj.value = obj.value.slice(0, -(obj.value.length-4));

		if (num == 0)
			$(".blank7").blur();
		else
			$(".blank"+num).focus();
		return false;
	}
	return;
}
function chk_len(obj, len, num)
{
	if(obj.value.length >= len) {
		// alert("전화번호는 11자를 초과할 수 없습니다.");
		// obj.value = obj.value.slice(0, -(obj.value.length-4));

		if (num == 0)
			$("#mb_phone3").blur();
		else
			$("#mb_phone"+num).focus();
		return false;
	}
	return;
}

function chk_strlen(obj, maxByte, num) {
	var ls_str = obj.value;
	var li_str_len = ls_str.length; 
	var li_byte = 0;
	var li_len = 0;
	var ls_one_char = "";
	var ls_str2 = "";
   
	for ( var i=0; i< li_str_len; i++) {
	  ls_one_char = ls_str.charAt(i);
   
	  if (escape(ls_one_char).length > 4) {
		li_byte += 2;
	  } else {
		li_byte++;
	  }
		  
	  if(li_byte <= maxByte) {
		li_len = i + 1;
	  }
	}
	if(li_byte > maxByte) {
	  	ls_str2 = ls_str.substr(0, li_len);
	  	obj.value = ls_str2;
		chk_strlen(obj, 4000);
	} else {
		if (ls_str == "촉")
			$(".blank"+num).focus();

		// var blank_txt = $(".blank1").val() + $(".blank2").val() + $(".blank3").val() + $(".blank4").val() + $(".blank5").val() + $(".blank6").val() + $(".blank7").val();
		// console.log(blank_txt);
		// if (blank_txt == "촉촉촉촉촉촉촉")
		// {
		// 	$(".quiz-btn").attr({
		// 		"onclick" : "",
		// 		"data-popup-target" : "#popup-input"
		// 	})
		// }
	}
}

function nextPage(page)
{
	location.href = "sub"+page+".php";
}

function saveImageInfo()
{
	var BgImageType		= realIdx;
	var BgTo			= $("#msg_to").val();
	var BgFrom			= $("#msg_from").val();
	var BgMsg1			= $("#msg_conntent1").val();
	var BgMsg2			= $("#msg_conntent2").val();
	var BgMsg3			= $("#msg_conntent3").val();
	var BgMsg4			= $("#msg_conntent4").val();
	var BgMsg5			= $("#msg_conntent5").val();

	// localStorage.setItem('BgImageType', BgImageType);
	localStorage.setItem('BgTo', BgTo);
	localStorage.setItem('BgFrom', BgFrom);
	localStorage.setItem('BgMsg1', BgMsg1);
	localStorage.setItem('BgMsg2', BgMsg2);
	localStorage.setItem('BgMsg3', BgMsg3);
	localStorage.setItem('BgMsg4', BgMsg4);
	// localStorage.setItem('BgMsg5', BgMsg5);

	if (BgTo == "")
	{
		alert("받으시는 분을 5글자 이내로 입력해 주세요.");
		return false;
	}

	if (BgFrom == "")
	{
		alert("보내시는 분을 5글자 이내로 입력해 주세요.");
		return false;
	}

	if (BgMsg1 == "" && BgMsg2 == "" && BgMsg3 == "" && BgMsg4 == "" && BgMsg5 == "")
	{
		alert("보내시는 메세지를 입력해 주세요.");
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"				: "create_image",
			"BgImageType"		: BgImageType,
			"BgTo"				: BgTo,
			"BgFrom"			: BgFrom,
			"BgMsg1"			: BgMsg1,
			"BgMsg2"			: BgMsg2,
			"BgMsg3"			: BgMsg3,
			"BgMsg4"			: BgMsg4,
			"BgMsg5"			: BgMsg5
		},
		url: "./main_exec.php",
		success: function(response){
			console.log(response);
			var resArr = response.split("||");
			localStorage.setItem('serial', resArr[0]);
			localStorage.setItem('type', resArr[1]);
			nextPage(3);
		}
	});
}

function check_agree(param, id)
{
	$("input:checkbox[id='"+param+"']").prop("checked", true);
	hh_maum9.popup.close($(id));
}

// function strCheck(val, num)
// {
// 	var strlen 	= val.value.length;
// 	var nextNum		= num + 1;
// 	console.log(window.event.keyCode);
// 	if (window.event.keyCode == "37" || window.event.keyCode == "39")
// 	{
// 		// conso
// 	}else{
// 		if (strlen == 11)
// 		{
// 			if (nextNum == 5)
// 				$("#msg_conntent4").blur();
// 			else
// 				$("#msg_conntent"+nextNum).focus();
// 		}
// 	}
// }
function download_img()
{
	if (localStorage.type == 1)
		var change_rs_img = "./files/" + localStorage.serial + "/maumbot_takecare" + localStorage.size + ".jpg";
	else if (localStorage.type == 2)
		var change_rs_img = "./files/" + localStorage.serial + "/maumbot_loveyou" + localStorage.size + ".jpg";
	else if (localStorage.type == 3)
		var change_rs_img = "./files/" + localStorage.serial + "/maumbot_thanks" + localStorage.size + ".jpg";
	else if (localStorage.type == 4)
		var change_rs_img = "./files/" + localStorage.serial + "/maumbot_cheerup" + localStorage.size + ".jpg";
	else if (localStorage.type == 5)
		var change_rs_img = "./files/" + localStorage.serial + "/maumbot_dontworry" + localStorage.size + ".jpg";

	location.href = "./ajax_download.php?rs="+change_rs_img;

	$.ajax({
		type   : "POST",
		async  : false,
		url    : "./main_exec.php",
		data:{
			"exec"          : "insert_download",
			"mb_serial"     : localStorage.serial
		}
	});

}

function click_tracking(click_name)
{
	$.ajax({
		type   : "POST",
		async  : false,
		url    : "./main_exec.php",
		data:{
			"exec" 			: "insert_click_info",
			"click_name"	: click_name
		}
	});
}

function kakao_send()
{
	// if (localStorage.type == 1)
	// 	var rs_img = "https://www.hi-maumbot.co.kr/files/" + localStorage.serial + "/maumbot_takecare" + localStorage.type + ".jpg";
	// else if (localStorage.type == 2)
	// 	var rs_img = "https://www.hi-maumbot.co.kr/files/" + localStorage.serial + "/maumbot_loveyou" + localStorage.type + ".jpg";
	// else if (localStorage.type == 3)
	// 	var rs_img = "https://www.hi-maumbot.co.kr/files/" + localStorage.serial + "/maumbot_thanks" + localStorage.type + ".jpg";
	// else if (localStorage.type == 4)
	// 	var rs_img = "https://www.hi-maumbot.co.kr/files/" + localStorage.serial + "/maumbot_cheerup" + localStorage.type + ".jpg";
	// else if (localStorage.type == 5)
	// 	var rs_img = "https://www.hi-maumbot.co.kr/files/" + localStorage.serial + "/maumbot_dontworry" + localStorage.type + ".jpg";
	Kakao.init('c8173523ff789743a4d69e357b3d55a1');

	Kakao.Link.sendDefault({
		objectType: 'feed',
		content: {
			title: '우리가족 튼튼메신저',
			// description: '#케익 #딸기 #삼평동 #카페 #분위기 #소개팅',
			// imageUrl: "https://www.hi-maumbot.co.kr/files/"+localStorage.serial+"/"+localStorage.type+".jpg",
			imageUrl: "https://www.hi-maumbot.co.kr/images/kt_message_share.jpg",
			link: {
				mobileWebUrl: "https://www.hi-maumbot.co.kr/m/kt_result.php?serial="+localStorage.serial+"&type="+localStorage.type+"&size="+localStorage.size,
				webUrl: "https://www.hi-maumbot.co.kr/kt_result.php?serial="+localStorage.serial+"&type="+localStorage.type+"&size="+localStorage.size
			}
		},
		buttons: [
			{
				title: '사랑의 메시지 확인',
				link: {
					mobileWebUrl: "https://www.hi-maumbot.co.kr/m/kt_result.php?serial="+localStorage.serial+"&type="+localStorage.type+"&size="+localStorage.size,
					webUrl: "https://www.hi-maumbot.co.kr/kt_result.php?serial="+localStorage.serial+"&type="+localStorage.type+"&size="+localStorage.size
				}
			}
		],
		success: function(res) {
			console.log("success");
			console.log(res);
		},
		fail: function(res) {
			console.log("fail");
			console.log(res);
		},
		callback: function() {
//					console.log("callback:"+res);
			// shareEnd();
		}
	});

	$.ajax({
		type   : "POST",
		async  : false,
		url    : "./main_exec.php",
		data:{
			"exec"          : "insert_kakao_share",
			"mb_serial"     : localStorage.serial
		}
	});
}

function sns_share(media, flag)
{
	if (media == "fb")
	{
        var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('https://www.hi-maumbot.co.kr/?media=share_fb'),'sharer','toolbar=0,status=0,width=600,height=325');

		$.ajax({
			type   : "POST",
			async  : false,
			url    : "./main_exec.php",
			data:{
				"exec"          : "insert_share_info",
				"sns_media"     : media,
				"sns_flag"		: flag
			}
		});
	}else if (media == "kt"){
		Kakao.init('c8173523ff789743a4d69e357b3d55a1');

		Kakao.Link.sendDefault({
			objectType: 'feed',
			content: {
				title: '[현대해상] 우리 가족 튼튼 메신저',
				description: '당신의 건강을 위한 메시지가 도착했어요 답장 보내고 마음봇 건강세트를 받아보세요!',
				imageUrl: "https://www.hi-maumbot.co.kr/images/maum_share.jpg",
				link: {
					mobileWebUrl: 'https://www.hi-maumbot.co.kr/m/index.php?media=share_kt',
					webUrl: 'https://www.hi-maumbot.co.kr/?media=share_kt'
				}
			},
			buttons: [
				{
					title: '우리가족 튼튼메신저',
					link: {
						mobileWebUrl: 'https://www.hi-maumbot.co.kr/m/index.php?media=share_kt',
						webUrl: 'https://www.hi-maumbot.co.kr/?media=share_kt'
					}
				}
			],
			success: function(res) {
				console.log("success");
				console.log(res);
			},
			fail: function(res) {
				console.log("fail");
				console.log(res);
			},
			callback: function() {
	//					console.log("callback:"+res);
				// shareEnd();
			}
		});
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "./main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"sns_media" : media,
				"sns_flag"		: flag
			}
		});
	}else{
		Kakao.Story.share({
			url: 'https://www.hi-maumbot.co.kr/?media=share_ks'
		});
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "./main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"sns_media" : target.data("share-target")
			}
		});
	}
}

//문자열 인덱스 기준 치환
String.prototype.replaceAt = function(index, character) {
	return this.substr(0, index) + character + this.substr(index+character.length);
};