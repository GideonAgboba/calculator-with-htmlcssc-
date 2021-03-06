<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sparkel | Home</title>
    <meta name="description" content="Sparklepaintsa online store">
    <meta name="copyright" content="Copyright © 2018 sparklepaints. All Rights Reserved.">
    <meta name="author" content="Agboba Gideom">
    <meta name="theme-color" content="#ffffff">
    <meta content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes" name="viewport">
    <!-- Bootstrap core CSS-->  
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="assets/vendor/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="assets/js/sb-admin-datatables.min.js"></script>
    <link rel="stylesheet" href="assets/home/css/tidy.css">
    <link rel="stylesheet" href="assets/home/css/animate.css">
    <script src="assets/home/bower_components/webcomponentsjs/webcomponents.js"></script>
    <link rel="import" href="assets/home/bower_components/paper-ripple/paper-ripple.html">
    <link rel="import" href="assets/home/bower_components/paper-fab/paper-fab.html">
    <link rel="import" href="assets/home/bower_components/iron-icons/iron-icons.html">
    <script>
        $(document).bind("contexmenu", function(e){ e.preventDefault();
        });
    </script>
		<script src="assets/home/js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<script>
			$(function()
			{	
				var $window = $(window);
				var scrollTime = 0.2;
				var scrollDistance = 270;
				$window.on("mousewheel DOMMouseScroll", function(event)
				{
	
					event.preventDefault();	
					var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
					var scrollTop = $window.scrollTop();
					var finalScroll = scrollTop - parseInt(delta*scrollDistance);
					TweenMax.to($window, scrollTime,
					{
						scrollTo : { y: finalScroll, autoKill:true }, ease: Power1.easeOut, overwrite: 5	 
						
					});
				});
                
                var scroll_start = 0;
                var startchange = $('#startchange');
                var offset = startchange.offset();
                if (startchange.length){
                    $(document).scroll(function() {
                        scroll_start = $(this).scrollTop();
                        if(scroll_start > offset.top) {
                            $("#mainNav").css({'background-color':'#000000d6'});
                        }else {
                            $('#mainNav').css({'background-color':'transparent'});
                        }
                    });
                });
			});
        </script>
    <script>
        function dis(){
            document.getElementById("id01").style.display="block";
            document.getElementById("id01").fade(slow);
        }
    </script>
    <!-- script
    ================================================== -->
    <script src="mobile/js/modernizr.js"></script>
    <script src="mobile/js/pace.min.js"></script>
    <link rel="stylesheet" href="mobile/css/full-main.css">
    <!-- <link rel="stylesheet" href="mobile/css/custom.css"> -->
</head>
<body id="top" onload="dis()" oncontextmenu="return false"  onrightmousedown="return false">

<?php
    if(!isset($errors)){
        $errors = null;
    }
?>
@if(count($errors) > 0)
<div id="id01" class="mod modal" onclick="document.getElementById('id01').style.display='none'">
    <div class="wow fadeInUp mod-content card">
    <div class="modal-header">
        <h1>Opps <i class="fa fa-frown modal-dialog"></i></h1>
    </div>
      <div class="card-body">
        <div class="alert alert-danger pt-4">
            <ul class="nav-item">
                @foreach($errors->all() as $error)
                    <li class="nav-link">{{$error}}</li>
                @endforeach
            </ul>
        </div>
      </div>
      <div class="card-footer text-center">
        <small>Something went wrong</small>
        <!-- <button onclick="document.getElementById('id01').style.display='none'" class="btn btn-dark"> Close </button> -->
      </div>
    </div>
  </div>
</div>
@endif
    @yield('contents')



    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <img src="assets/images/cload.gif" style="width: 400px; height: 400px;top: 50%;left:50%;" alt="loading...">
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="mobile/js/jquery-3.2.1.min.js"></script>
    <script src="mobile/js/plugins.js"></script>
    <script src="mobile/js/main.js"></script>
</body>
</html>
