<?
include_once "./include/autoload.php";
include_once "sub_head.php";

$mnv_f 			= new mnv_function();
// 파일 저장 폴더 생성용 난수 번호
$folder_name = mnv_phprandom::getString(16);
?>
<body>
	<!--NSmart Track Tag Script-->
	<script type='text/javascript'>
		callbackFn = function() {};
		var _nsmart = _nsmart || [];
		_nsmart.host = _nsmart.host || (('https:' == document.location.protocol) ? 'https://' : 'http://');
		_nsmart.push([13294, 34102]); /*1808_현대해상_마음봇3차-사랑의 메시지 남기기 페이지*/
		document.write(unescape("%3Cscript src='" + _nsmart.host + "n00.nsmartad.com/etc?id=10' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<!--NSmart Track Tag Script End..-->	
	<div class="page-wrap">
		<?
		include_once "sub_header.php";
		?>        
		<div class="content sub upload">
			<div class="inner">
				<div class="title">
					<img src="./images/popup_picture_title.png" alt="">
				</div>
				<input type="hidden" id="folder_name" value="<?=$folder_name?>">
				<input type="hidden" id="file_url" value="">
				<div class="pic-frame preview-zone">
					<div class="inner">
						<label for="file-upload"></label>
						<input type="file" id="file-upload" name="files[]" accept="image/*;capture=camera">
						<img src="./images/popup_picture_sample.jpg" alt="" id="sample-image"  style="width: 100%">
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
						<input type="text" id="input-tag" placeholder="ex) 마음봇건강키트, 우리가족튼튼메신저">
					</div>
				</div>
				<button class="btn" onclick="getCropImage()">
					<img src="./images/popup_picture_btn.jpg" alt="">
				</button>
			</div>
			<div class="footer-wrap">
				<div class="copyright">
					<img src="./images/sub_copyright.png" alt="">
				</div>
			</div>
		</div>
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
			<button class="btn" onclick="location.href='./index.php'" data-popup="@close">
				<img src="./images/popup_winner_confirm.png" alt="">
			</button>
		</div>
<!--		<a href="javascript:void(0)" class="btn-close" data-popup="@close"></a>-->
		<a href="./index.php" class="btn-close" data-popup="@close"></a>
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
	<script>
		$(function () {
			'use strict';

			var url = './upload.php?fid='+$("#folder_name").val();
			var preview_width 	= $(".preview-zone").width();
			//				var preview_height 	= $(".preview-zone").height();
			$('#file-upload, #re-upload').fileupload({
				url: url,
				dataType: 'json',
				autoUpload: true,
				acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
				maxFileSize: 10000000,
				disableImageResize: /Android(?!.*Chrome)|Opera/
				.test(window.navigator.userAgent),
				previewMaxWidth: preview_width,
				//					previewMaxHeight: preview_height,
				previewThumbnail: false,
				previewCrop: false,
				// disableImagePreview: true
				// imageCrop: true
			}).on('fileuploadadd', function (e, data) {
				$(".preview-zone .inner #prev_thum").remove();
				data.context = $('<div id="prev_thum"/>').appendTo('.preview-zone .inner');
				TweenMax.to($('.re-upload'), 0.3, {css:{autoAlpha: 1}});
				$.each(data.files, function (index, file) {
					var node = $('<p style="margin:0" />');
					node.appendTo(data.context);
				});
			}).on('fileuploadprocessalways', function (e, data) {
				var index = data.index,
					file = data.files[index],
					node = $(data.context.children()[index]);
				console.log(file);
				console.log(file.preview.width);
				console.log(file.preview.height);
				var div_left 	= file.preview.width / 2;
				var div_top 	= file.preview.height / 2;

				//					$('#prev_thum').attr("style","position:absolute;top:50%;left:50%;margin-top:-"+div_top+"px;margin-left:-"+div_left+"px");
				//					$('#prev_thum').attr("style","position:absolute;top:50%;left:50%;transform:translate(-50%, -50%)");
				$(".preview-zone #sample-image").hide();
				$(".preview-zone label").hide();

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
			}).on('fileuploadprogressall', function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$('#progress .progress-bar').css(
					'width',
					progress + '%'
				);
			}).on('fileuploaddone', function (e, data) {
				console.log("done");
				$.each(data.result.files, function (index, file) {
					console.log(file);
					if (file.url) {
						$("#file_url").val(file.url);
						$("#prev_thum p").hide();
						//							$("#prev_thum").append("<img id='img_set' src='"+file.mediumUrl+"' crossorigin>");
						$("#prev_thum").append("<img id='img_set' src='"+file.url+"' style='max-height:300px;opacity:0' crossorigin>");

						setTimeout(function(){
							$('#img_set').cropper({
								aspectRatio: 1 / 1,
								// minCanvasWidth: 293,
								viewMode: 0,
								dragMode: 'move',
								autoCropArea: 0.8,
								// aspectRatio: 1200/630,
								responsive: true,
								restore: true,
								guides: false,
								highlight: true,
								background: false,
								cropBoxMovable: true,
								cropBoxResizable: true,
								// preview: '.preview',
								center:true,
								zoomOnWheel:false,
								toggleDragModeOnDblclick:false
							});

						},1000);
					} else if (file.error) {
						var error = $('<span class="text-danger"/>').text(file.error);
						$(data.context.children()[index])
							.append('<br>')
							.append(error);
					}
				});
			}).on('fileuploadfail', function (e, data) {
				console.log(data.errorThrown);
				console.log(data.textStatus);
				$.each(data.files, function (index) {
					var error = $('<span class="text-danger"/>').text('File upload failed.');
					$(data.context.children()[index])
						.append('<br>')
						.append(error);
				});
			}).prop('disabled', !$.support.fileInput)
				.parent().addClass($.support.fileInput ? undefined : 'disabled');
		});

		var fileTag = "",
			fileDesc = "";
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
				url: './main_exec.php',
				data: {
					exec            : "crop_save_image",
					crop_image_url  : crop_image_url,
					file_url 		: $("#file_url").val(),
					folder_name		: $("#folder_name").val(),
					
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
			//				var data = $('#picture-user-info').serialize();
			var verifyName = $('#picture-user-info #mb_name').val();
			var verifyPhone = $('#picture-user-info #mb_phone1').val()+$('#picture-user-info #mb_phone2').val()+$('#picture-user-info #mb_phone3').val();

			$.ajax({
				method: 'POST',
				url: './main_exec.php',
				data: {
					exec: 'input_verify_info',
					verify_name: verifyName,
					verify_phone: verifyPhone,
					file_tag		: fileTag,
					file_desc		: fileDesc,
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