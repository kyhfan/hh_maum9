<?
include_once "../include/autoload.php";
include_once "sub_head.php";

$mnv_f 			= new mnv_function();
// 파일 저장 폴더 생성용 난수 번호
$folder_name = mnv_phprandom::getString(16);
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

	<div class="page-wrap sub">
		<?
		include_once "sub_header.php";
		?>			
		<div class="content sub upload">
			<input type="hidden" id="folder_name" value="<?=$folder_name?>">
			<input type="hidden" id="file_url" value="">
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
				<div class="input-area">
					<div class="input-group">
						<div class="guide desc"></div>
						<input type="text" id="input-desc">
					</div>
					<div class="input-group">
						<div class="guide tag"></div>
						<input type="text" placeholder="ex) 마음봇건강키트, 우리가족튼튼메신저" id="input-tag">
					</div>
				</div>
				<button class="btn" onclick="getCropImage()">
					<img src="./images/popup_picture_btn.jpg" alt="">
				</button>
			</div>
			<div class="copyright">
				<img src="./images/sub_copyright.png" alt="">
			</div>
		</div>
	</div>
	<div class="popup picture-input" id="popup-picture-input">
		<div class="inner">
			<div class="title">
				<img src="./images/popup_picinput_title.png" alt="">
			</div>
			<div class="input-area">
				<form id="picture-user-info" method="post">
					<div class="input-group name">
						<div class="guide">
							<img src="./images/sub4_input_name.png" alt="">
						</div>
						<div class="input">
							<input type="text" id="mb_name" name="mb_name">
						</div>
					</div>
					<div class="input-group phone">
						<div class="guide">
							<img src="./images/sub4_input_phone.png" alt="">
						</div>
						<div class="input">
							<input type="tel" id="mb_phone1" name="mb_phone1" onkeyup="lengthCheck(this, 3)">
							<input type="tel" id="mb_phone2" name="mb_phone2" onkeyup="lengthCheck(this, 4)">
							<input type="tel" id="mb_phone3" name="mb_phone3" onkeyup="lengthCheck(this, 4)">
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
				<img src="./images/popup_picinput_btn.jpg" alt="">
			</button>
		</div>
		<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>
	</div>
	<div class="popup picture-result" id="popup-picture-result">
		<div class="inner">
			<div class="title">
				<img src="./images/popup_picresult_title.png" alt="">
			</div>
			<button class="btn" onclick="location.href='./index.php'" data-popup="@close">
				<img src="./images/popup_winner_btn.png" alt="">
			</button>
			<div class="guide-block">
				<img src="./images/popup_event_guide.png" alt="">
			</div>
		</div>
<!--		<a href="javascript:void(0)" class="popup-close" data-popup="@close"></a>-->
		<a href="./index.php" class="popup-close" data-popup="@close"></a>
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
	<script>
		$('.burger').on('click', function() {
			$('html').toggleClass('menu-opened');
		});
		$('.menu-layer .menu-close').on('click', function() {
			$('html').removeClass('menu-opened');
		});

		div_left = 0;
		div_top  = 0;
		$(function () {
			'use strict';
			var url = './upload.php?fid='+$("#folder_name").val();
			var preview_width 	= $(".preview-zone").width();
			// var preview_height 	= preview_width*0.554;
			$('#file-upload, #re-upload').fileupload({
				url: url,
				dataType: 'json',
				autoUpload: true,
				acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
				maxFileSize: 10000000,
				disableImageResize: /Android(?!.*Chrome)|Opera/
				.test(window.navigator.userAgent),
				previewMaxWidth: preview_width,
				// previewMaxHeight: preview_height,
				previewThumbnail: false,
				previewCrop: false
			}).on('fileuploadadd', function (e, data) {
				$(".preview-zone .inner #prev_thum").remove();
				data.context = $('<div id="prev_thum"/>').appendTo('.preview-zone .inner');
				TweenMax.to($('.re-upload'), 0.3, {css:{autoAlpha: 1}});
				$.each(data.files, function (index, file) {
					var node = $('<p style="margin:0" />');
					node.appendTo(data.context);

				});
			}).on('fileuploadprocessalways', function (e, data) {
				$(".preview-zone #sample-image").remove();
				var index = data.index,
					file = data.files[index],
					node = $(data.context.children()[index]);
				console.log(file);
				// var div_left 	= 453 / 2;
				// var div_top 	= 238 / 2;
				// div_left 	= file.preview.width / 2;
				// div_top 	= file.preview.height / 2;
				// $('#prev_thum').attr("style","position:absolute;top:50%;left:50%;margin-top:-"+div_top+"px;margin-left:-"+div_left+"px");
				// $(".preview-zone").css("background","none");
				// $(".preview-zone > label").hide();
				// $("#start_analytics_btn").attr("onclick","wmbt.startAnalytics();NTrackObj.callTrackTag('33230', callbackFn, 12902);click_tracking('이벤트-마음분석시작')");

				if (file.preview) {
					node
						.prepend('<br>')
						.prepend(file.preview);
				}
				if (file.error) {
					node
						.append('<br>')
						.append($('<span class="text-danger"/>').text(file.error));
				}
				if (index + 1 === data.files.length) {
					// data.context.find('button')
					// 	.text('Upload')
					// 	.prop('disabled', !!data.files.error);
				}
			}).on('fileuploadprogressall', function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$('#progress .progress-bar').css(
					'width',
					progress + '%'
				);
			}).on('fileuploaddone', function (e, data) {
				$.each(data.result.files, function (index, file) {
					console.log(file);
					//						$('#fileUp').remove();
					//						$('#fileArea').remove();
					if (file.url) {
						$("#file_url").val(file.url);
						$("#prev_thum p").hide();
						$("#prev_thum").append("<img id='img_set' src='"+file.url+"' style='max-height:350px;opacity:0;'>");
						// $('#prev_thum').attr("style","position:absolute;top:50%;left:50%;margin-top:-"+div_top+"px;margin-left:-"+div_left+"px");

						// setTimeout(function(){
						// console.log($("#prev_thum").width());
						// var prev_calc_w 	= $("#prev_thum").width();
						// var prev_calc_h 	= $("#prev_thum").height();
						// var prev_calc_w 	= div_left / 2;
						// var prev_calc_h 	= div_top / 2;
						// console.log(prev_calc_w+"||"+prev_calc_h)
						// if (prev_calc_h > prev_calc_w)
						// {
						// $("#prev_thum").height(preview_height);
						// var imsi_width		= prev_calc_w * (preview_height /  prev_calc_h);
						// $("#prev_thum").width(imsi_width);
						// }else{
						// 	console.log("width");
						// 	$("#prev_thum").width(preview_width);

						// }

						$('#img_set').cropper({
							aspectRatio: 1 / 1,
							// minCanvasWidth: 293,
							viewMode: 0,
							dragMode: 'move',
							autoCropArea: 0.8,
							// aspectRatio: 1200/630,
							responsive: true,
							restore: false,
							guides: false,
							highlight: true,
							background: false,
							cropBoxMovable: true,
							cropBoxResizable: true,
							// preview: '.preview',
							// center:true,
							zoomOnWheel:false,
							toggleDragModeOnDblclick:false
						});
						$('#img_set').on('ready', function (e) {
							// $(".cropper-container").width(preview_width);
							// $(".cropper-container").height(preview_height);
							// $(".cropper-container").attr("style","left:0");
							// $(".preview-zone").attr("style","padding-top:"+prev_calc_h+"px");

						});

						// },1000);
					} else if (file.error) {
						var error = $('<span class="text-danger"/>').text(file.error);
						$(data.context.children()[index])
							.append('<br>')
							.append(error);
					}
				});
			}).on('fileuploadfail', function (e, data) {
				$.each(data.files, function (index) {
					var error = $('<span class="text-danger"/>').text('File upload failed.');
					$(data.context.children()[index])
						.append('<br>')
						.append(error);
				});
			}).prop('disabled', !$.support.fileInput)
				.parent().addClass($.support.fileInput ? undefined : 'disabled');
		});

		var fileTag = "";
		var fileDesc = "";
		function getCropImage()
		{
			var fileVal = $('#file_url').val();
			
			fileTag = $('#input-tag').val(),
			fileDesc = $('#input-desc').val();
			
			if(!fileVal) {
				alert("이미지를 업로드해주세요!");
				return;
			}
			if(!fileDesc) {
				alert("설명을 입력해주세요!");
				return;
			}
			if(!fileTag) {
				alert("태그를 입력해주세요!");
				return;
			}
			
			var croppedCanvas = $('#img_set').cropper('getCroppedCanvas', 
													  {
				imageSmoothingEnabled: false,
				imageSmoothingQuality: 'high'
			});
			var crop_image_url = croppedCanvas.toDataURL("image/jpeg");
			console.log(crop_image_url);
			$.ajax({
				method: 'POST',
				url: '../main_exec.php',
				data: {
					exec            : "crop_save_mobile_image",
					folder_name		: $("#folder_name").val(),
					file_url 		: $("#file_url").val(),
					crop_image_url  : crop_image_url
				},
				success: function(response){
					console.log(response);
					hh_maum9.popup.close($('#popup-picture'));
					hh_maum9.popup.show($('#popup-picture-input'));
					//						wmbt.popupOpen('input_family_info_popup');
				}
			});
		}
		$('#picture-input-btn').off().on('click', function() {
			console.log("asd");
			//				var data = $('#picture-user-info').serialize();
			var verifyName = $('#picture-user-info #mb_name').val();
			var verifyPhone = $('#picture-user-info #mb_phone1').val()+$('#picture-user-info #mb_phone2').val()+$('#picture-user-info #mb_phone3').val();

			$.ajax({
				method: 'POST',
				url: '../main_exec.php',
				data: {
					exec: 'input_verify_info',
					verify_name: verifyName,
					verify_phone: verifyPhone,
					file_tag: fileTag,
					file_desc: fileDesc
				},
				success: function(response) {
					if(response == "Y") {
						hh_maum9.popup.close($('#popup-picture-input'));
						hh_maum9.popup.show($('#popup-picture-result'));
					} else {
						alert("인서트 에러");
					}
				}
			});
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