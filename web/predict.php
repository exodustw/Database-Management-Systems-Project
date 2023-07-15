<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>台北 先看才行</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content="道路, 安全, 交通, 事故">
      <meta name="author" content="717DB">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

	  <!-- Required Jquery -->
	  <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
	  <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
	  <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
	  <!-- jquery slimscroll js -->
	  <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
	  <!-- modernizr js -->
	  <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
	  <!-- am chart -->
	  <script src="assets/pages/widget/amchart/amcharts.min.js"></script>
	  <script src="assets/pages/widget/amchart/serial.min.js"></script>
	  <!-- Todo js -->
	  <script type="text/javascript " src="assets/pages/todo/todo.js "></script>
	  <!-- Custom js -->
	  <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
	  <script type="text/javascript" src="assets/js/script.js"></script>
	  <script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
	  <script src="assets/js/pcoded.min.js"></script>
	  <script src="assets/js/demo-12.js"></script>
	  <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  </head>

  <body>
    <!-- Pre-loader start 載入圖樣-->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header">
				<?php
					require('template/header.php');
				?>
            </nav>
            <!-- [ Header ] end -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
						<?php
							require('template/navbar.php');
						?>
                    </nav>
                    <!-- [ navigation menu ] end -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-12 col-xl-12">
                                                    <div class="card fb-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-pulse"></i>
                                                            <div class="d-inline-block">
                                                                <h5>安心占卜</h5>
                                                                <span>擔心出門被車撞嗎？來占卜看看吧！</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
															<form action="predict.php" method="post">
                                                            <div class="form-group">
                                                                <label for="radiobtn" class="col-sm-2 control-label">生理性別</label>
                                                                <div class="col-sm-5">
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="gender" id="gender1" value="1">
                                                                    <label>男</label>
                                                                  </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="gender" id="gender2" value="2">
                                                                    <label>女</label>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="radiobtn" class="col-sm-2 control-label">年齡</label>
                                                                <div class="col-sm-5">
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="age" id="age1" value="1">
                                                                    <label>兒童 (0～18)</label>
                                                                  </div>
                                                                    <div class="radio radio-danger">
                                                                      <input type="radio" name="age" id="age2" value="2">
                                                                      <label>青年 (19～40)</label>
                                                                    </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="age" id="age3" value="3">
                                                                    <label>中年 (41～60)</label>
                                                                  </div>
                                                                  <div class="radio radio-danger disabled">
                                                                    <input type="radio" name="age" id="age4" value="4">
                                                                    <label>老年 (61～)</label>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="radiobtn" class="col-sm-2 control-label">天候</label>
                                                                <div class="col-sm-5">
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="weather" id="weather1" value="1">
                                                                    <label>
                                                                     晴天
                                                                    </label>
                                                                  </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="weather" id="weather2" value="2">
                                                                    <label>
                                                                     陰天
                                                                    </label>
                                                                  </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="weather" id="weather3" value="3">
                                                                    <label>
                                                                     風雨
                                                                    </label>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="radiobtn" class="col-sm-2 control-label">車種</label>
                                                                <div class="col-sm-5">
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="car" id="car1" value="1">
                                                                    <label>
                                                                     小客車
                                                                    </label>
                                                                  </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="car" id="car2" value="2">
                                                                    <label>
                                                                     大客車
                                                                    </label>
                                                                  </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="car" id="car7" value="7">
                                                                    <label>
                                                                     貨車
                                                                    </label>
                                                                  </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="car" id="car3" value="3">
                                                                    <label>
                                                                     機車
                                                                    </label>
                                                                  </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="car" id="car4" value="4">
                                                                    <label>
                                                                     大型重型機車
                                                                    </label>
                                                                  </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="car" id="car5" value="5">
                                                                    <label>
                                                                     自行車
                                                                    </label>
                                                                  </div>
                                                                  <div class="radio radio-danger">
                                                                    <input type="radio" name="car" id="car6" value="6">
                                                                    <label>
                                                                     行人
                                                                    </label>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="row m-t-30">
                                                                <div class="col-md-12">
																		<button type="button" class="btn btn-success btn-md btn-block waves-effect text-center m-b-20" data-toggle="modal" data-target="#exampleModal" onclick="output();">
	                                                                     開始占卜
	                                                                    </button>
	                                                                    <!-- Modal -->
	                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                                                      <div class="modal-dialog">
	                                                                        <div class="modal-content">
	                                                                          <div class="modal-header">
	                                                                            <h5 class="modal-title" id="exampleModalLabel">占卜結果</h5>
	                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                                                              <span aria-hidden="true">&times;</span>
	                                                                            </button>
	                                                                          </div>
	                                                                          <div class="modal-body">
	                                                                            <!-- 互動視窗內容 -->
	                                                                            <div class="text-center">
	                                                                              	<!--img src="assets/images/big_good.png" class="rounded" alt="大吉"-->
																					<div id="Result"></div>
	                                                                            </div>
	                                                                          </div>
	                                                                          <div class="modal-footer">
	                                                                            <button type="button" class="btn btn-inverse" data-dismiss="modal">關閉</button>
	                                                                          </div>
	                                                                        </div>
	                                                                      </div>
	                                                                    </div>
	                                                                    <!-- Modal end-->
		                                                                <input type="reset" class="btn btn-danger btn-md btn-block waves-effect text-center m-b-20" value="重設">
																	</div>
                                                            </div>
															</form>
                                                    </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card2 start -->

                                            <!-- card2 end -->
                                            <!-- Contextual classes table starts -->

                                            <!-- Contextual classes table ends -->
                                            <!-- Multiple Open Accordion start -->

                                            <!-- Multiple Open Accordion ends -->
                                            <!-- Statestics Start -->

                                            <!-- 小卡 -->
                                            <!-- Email Sent End -->
                                            <!-- Data widget start -->


                                                <!-- Data widget End -->

                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fixed-button">
                    <a href="index.php" target="_blank" class="btn btn-md btn-primary">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Home
                    </a>
                </div>
            </div>
        </div>
		<script type="text/javascript">
			function output(){
				document.getElementById('Result').innerHTML = '<h4><span style="color: green;">估算中...</span></h4>';
				$.ajax({
					url: 'exec/predict_result.php?gender=' +
					$('input[name=gender]:checked').val() +
					'&age=' + $('input[name=age]:checked').val() +
					'&weather=' + $('input[name=weather]:checked').val() +
					'&car=' + $('input[name=car]:checked').val(),
					type: 'GET',
					dataType: 'json',
					success: function(Jdata) {
						/*alert('exec/predict_result.php?gender=' +
						$('input[name=gender]:checked').val() +
						'&age=' + $('input[name=age]:checked').val() +
						'&weather=' + $('input[name=weather]:checked').val() +
						'&car=' + $('input[name=car]:checked').val());*/
						var prob = Jdata.Result;
						var rTitle = '高深莫測';
						var rText = '';
						var rImg = '';
						var rWarn = '<font color="red">僅供參考</font>';
						if(prob < 0){
							rTitle = '資料填寫不全喔！每個項目都要選！';
							rWarn = '';
						}else if(prob == 0){
							rTitle = '大吉';
							rText = '開車不擔心，騎車很放心；<br>不論要去哪，車禍不隨行。';
							rImg = '<img src="resource/result1.png" class="rounded" style="max-width:360px;">';
						}else if(prob < 0.0017){
							rTitle = '中吉';
							rText = '專心向前看，應走斑馬線；<br>今天這天氣，出門算安全。';
							rImg = '<img src="resource/result2.png" class="rounded" style="max-width:360px;">';
						}else if(prob < 0.0035){
							rTitle = '小吉';
							rText = '馬路左看再右看，盲灣放慢再放慢：<br>凡事處處多留心，車禍少與你相伴。';
							rImg = '<img src="resource/result3.png" class="rounded" style="max-width:360px;">';
						}else if(prob < 0.0052){
							rTitle = '凶';
							rText = '沒事少出門，有事別亂奔；<br>今天此條件，車禍常發生。';
							rImg = '<img src="resource/result4.png" class="rounded" style="max-width:360px;">';
						}else{
							rTitle = '大凶';
							rText = '切記勿外出，在家沒害處；<br>不要不信邪，死神在四處。';
							rImg = '<img src="resource/result5.png" class="rounded" style="max-width:360px;">';
						}
						document.getElementById('Result').innerHTML = rImg + '<h4>' + rTitle + '</h4>' +
						'<p>' + rText + '</p>' + rWarn;
					},
					error: function() {
						/*alert('exec/predict_result.php?gender=' +
						$('input[name=gender]:checked').val() +
						'&age=' + $('input[name=age]:checked').val() +
						'&weather=' + $('input[name=weather]:checked').val() +
						'&car=' + $('input[name=car]:checked').val());*/
						document.getElementById('Result').innerHTML =  rImg +
						 '<h4><span style="color: red;">估算失敗...下次再來</span></h4>';
					}
				});
			}
		</script>
<script>
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
</script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
