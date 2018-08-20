<?
    include_once "sub_head.php";
?>
	<body>
		<div class="page-wrap">
<?
    include_once "sub_header.php";
?>        
			<div class="content sub">
				<div class="sub-wrap">
					<div class="inner">
						<div class="step-area _3">
							<img src="./images/sub_step3_icon.png" alt="">
						</div>
						<div class="title-area _3">
							<img src="./images/sub_step3_title.png" alt="">
						</div>
						<div class="select-wrap">
							<div class="select-box">
								<img src="./images/sub_step3_select.png" alt="">
							</div>
							<div class="select-menu">
								<ul>
									<li>
										<div class="desc _1">
											<img src="./images/sub_step3_desc_1.jpg" alt="">
										</div>
										<div class="check">
											<label for="check1"></label>
											<input type="checkbox" class="checkbox" id="check1" value="2">
											<div class="checkbox-visual"></div>
										</div>
									</li>
									<li>
										<div class="desc _2">
											<img src="./images/sub_step3_desc_2.jpg" alt="">
										</div>
										<div class="check">
											<label for="check2"></label>
											<input type="checkbox" class="checkbox" id="check2" value="3">
											<div class="checkbox-visual"></div>
										</div>
									</li>
									<li>
										<div class="desc _3">
											<img src="./images/sub_step3_desc_3.jpg" alt="">
										</div>
										<div class="check">
											<label for="check3"></label>
											<input type="checkbox" class="checkbox" id="check3" value="4">
											<div class="checkbox-visual"></div>
										</div>
									</li>
									<li>
										<div class="desc _4">
											<img src="./images/sub_step3_desc_4.jpg" alt="">
										</div>
										<div class="check">
											<label for="check4"></label>
											<input type="checkbox" class="checkbox" id="check4" value="1">
											<div class="checkbox-visual"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-result">
							<img src="./images/sub_step3_card_result.jpg" alt="">
						</div>
						<div class="btn-area _3">
							<a href="" download>
								<button type="button" onclick="nextPage(4);">
									<img src="./images/sub_step3_btn.jpg" alt="">
								</button>
							</a>
						</div>
					</div>
				</div>
				<div class="footer-wrap">
					<div class="copyright">
						<img src="./images/sub_copyright.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<script>
			var rs_img = "";
			$(window).on('load', function() {
				rs_img	= "./files/" + localStorage.serial + "/2.jpg";
				$('.card-result img').attr("src",rs_img);
				$('.btn-area._3 a').attr("href",rs_img);
			});

			$('.select-box').on('click', function() {
				$(this).parent().toggleClass('is-active');
			});
			$('.checkbox').on('click', function() {
				var that = $(this);
				$('.checkbox').each(function() {
					if($(this).attr('id') !== that.attr('id')) {
						$(this).context.checked = false;
					}
				});

				localStorage.setItem("size",that.val());
				var change_rs_img = "./files/" + localStorage.serial + "/" + that.val() + ".jpg";
				$('.btn-area._3 a').attr("href",change_rs_img);
				setTimeout(() => {
					$(".select-wrap").removeClass("is-active");					
				}, 700);
			});
		</script>
	</body>
</html>