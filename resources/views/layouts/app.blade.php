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
    <link rel="stylesheet" href="assets/css/responsive.css">
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
    <!-- Loader script -->
    <script src="assets/js/loader.js"></script>
    <script src="assets/js/loadermat.js"></script>
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
</head>
<body id="app-layout" onload="dis()" oncontextmenu="return false"  onrightmousedown="return false">

<script>
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".loading_div").fadeOut("slow");
  });
</script>
<style>
.loading_div{
    position: fixed;
    top: 0px !important;
    bottom: 0px !important;
    left: 0px !important;
    right: 0px !important;
    height: 100vh;
    width: 100%;
    background: #000;
    color: #fff;
    z-index: 100000000000000000000000000000000000000000000000000000000000 !important;
}
.loading_div img{
    position: absolute;
    top: 50%;
    left:50%;
    transform: translate(-50%, -50%);
    width: 200px;
    height: 200px;
}
body{
    font-family: Arial, Helvetica, sans-serif;
}
.main_bg_color{
    background:#00ae84 !important;
}
.main_bg_sec_color{
    background: #03d5a4 !important;
}
.main_text_color{
    color: #00ae84 !important;
}
.home_main_container{
    position: relative;
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 2, 0.9), rgba(0, 0, 2, 0.9), rgba(0, 0, 2, 0.9)), url('../images/ecommerce-shopping-retail-ss-1920.jpg');
    background-size: cover;
    /* filter: brightness(0.5);a */
}
.home_main_footer{
    position: absolute;
    height: 6vh;
    bottom: 0px;
    width: 100%;
    background: rgba(0, 0, 0, 0.29);
}
.home_login_container{
    background: rgba(0, 0, 0, 0.29);
    color: #fff;
    margin-top: 8em !important;
}
.home_title_container{
    padding-top: 13em;
}
@media screen and (max-width: 1020px){
    .hide{
      display: none !important;
    }

}
@media screen and (min-width: 1020px){
    .hidemaincat{
      display: none !important;
    }
}
.home_user_profile{
    background: transparent;
    width: 30px;
    height: 30px;
    border-radius: 30px;
    float: left;
}
.home_user_profile img{
    width: 30px;
    border-radius: 30px;
    height: 30px;
}
.home_navbar{
    /* background: rgba(0, 0, 0, 0.68); */
    background: #000000cc;
    z-index: 100000000000000000000;
}
.home_explore_btn{
    padding: 30px;
    border-radius: 30pc;
    width: 50vh;
    color: #000;
    background: #fff;
    /* box-shadow: 0px 3px 15px #000; */
    border-style: none;
    list-style: none;
    text-shadow: 0px 5px 8px rgba(72, 64, 64, 0.111);
    font-size: 1em;
    font-weight: lighter;
}

@-webkit-keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
  }
  @-moz-keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
  }
  @-o-keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
  }
  @-ms-keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
  }
  @keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
  }
  .blink{
    -moz-animation: pulse 2s infinite linear;
    -o-animation: pulse 2s infinite linear;
    -webkit-animation: pulse 2s infinite linear;
    animation: pulse 2s infinite linear;
    box-shadow: 1px 3px 5px #000;
  }
  .blink:hover{
    -moz-animation: pulse 0s infinite linear;
    -o-animation: pulse 0s infinite linear;
    -webkit-animation: pulse 0s infinite linear;
    animation: pulse 0s infinite linear;
  }
  .home_second_container{
      height: 100vh;
      backface-visibility: inherit;
  }
  .home_third_container{
    position: relative;
    height: 80vh;
    background: linear-gradient(rgba(0, 0, 2, 0.59), rgba(0, 0, 2, 0.59), rgba(0, 0, 2, 0.59)), url('../images/ecommerce-selling-online-online-sales-e-commerce-wallpaper.jpg');
    background-size: cover;
  }
  .home_third_container_content{
      position: absolute;
      width: 50%;
      top: 80%;
      left: 50%;
      height: 60vh;
      background: #1b1e216b;
      color: #fff;
      transform: translate(-50%,-50%);
      box-shadow: 0px 1px 8px #000;
      z-index: 188888888;
  }
  .home_fourth_container{
      height: 50vh;
      background: #fff;
      position: relative;
  }
  .home_fifth_container{
      height: 50vh;
      background: #000;
      color: #fff;
  }

  .shop_card_img{
      height: 15vh;
      width: 100%;
  }
  .card-img-top img{
    width: 100%;
    height: 10vh !important;
  }

  .eml_img_full{
      width: 100%;
      height: 25em !important;
  }
  .cart_count{
      position: absolute;
      top: 3px;
      right: 25px;
      z-index: 1000;
      width: 20px;
      height: 20px;
      font-size: 12px;
      text-align: center;
  }
  .shop_fixed_nav{
      position: fixed;
      top: 30px;
      left: 10px;
  }
  .mail_us{
      position: absolute;
      bottom: 0px;
  }
  .checkout_container{
    background: linear-gradient(rgba(0, 0, 2, 0.9), rgba(0, 0, 2, 0.9), rgba(0, 0, 2, 0.9)), url('../images/ecommerce-shopping-retail-ss-1920.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }
  .checkout_form{
      position: relative;
      box-shadow: 1px 4px 8px #333;
      border-top-right-radius: 20px;
  }
  .checkout_input{
      border-style: none;
      background: transparent !important;
      border-bottom: 1px solid #000 !important;
  }
  .checkout_form:after{
    position: absolute;
    top: 0px !important;
    right: 0px;
    width: 0;
    height: 0 !important;
    color: #111;
    margin-left: -.8rem;
    vertical-align: middle;
    border-right: .6rem solid transparent;
    border-bottom: .9rem  solid;
    border-left: .6rem solid transparent;
    border-top-right-radius: 10px;
  }
  .checkout_center_container{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%)
  }

  /* test home page */
  .home_first_container{
      position: relative;
      height: 100vh;
      margin-bottom: 5em;
      width: 100%;
      background:  url('../images/first.png');
      object-fit: contain;
      background-size: cover;
      background-position: center;
  }
  .home_third_container{
      position: relative;
      height: 50vh;
      margin-top: 5em;
      width: 100%;
      background:  url('../images/second.png');
      object-fit: contain;
      background-size: cover;
      background-position: center;
  }
  .home_fifth_container{
      position: relative;
      height: 50vh;
      background-size: contain;
      background-repeat: no-repeat !important;
      background-position: 0px -200px !important;
      margin-top: 5em;
      width: 100%;
      background:  url('../images/third.png');
      object-fit: contain;
      background-size: cover;
      background-position: center;
  }
  .home_footer{
      height: 40vh;
  }
  .home_first_container_left_content{
      margin-top: 13em !important;
      /* filter: brightness(5) !important; */
      color: #fff;
      margin-top: 9em;
  }
.home_btns{
    padding: 0.5rem 3rem;
    margin: 0rem 1rem;
    /* background: linear-gradient( rgba(0, 0, 2, 0.2), rgba(0, 0, 2, 0.2), rgba(0, 0, 2, 0.2), purple);
    color: #fff; */
    border-style: none;
    border-radius: 3px;
}
.home_login_btn{
    background: linear-gradient(to  right, rgba(0, 0, 2, 0.2), rgba(0, 0, 2, 0.2), rgba(0, 0, 2, 0.2), #00ae84);
    color: #fff;
    text-decoration: none !important;
    list-style: none;    
}
.home_login_btn:hover{
    background: linear-gradient(to  right, rgba(0, 0, 2, 0.2), rgba(0, 0, 2, 0.2), rgba(0, 0, 2, 0.2), #00ae84) !important;
    color: #fff;
}
.home_signup_btn{
    border: 0.5px solid #fff;
    color: #fff;
    background: transparent;
}
.home_signup_btn:hover{
    background: linear-gradient(to top right, rgba(0, 0, 2, 0.2), rgba(0, 0, 2, 0.2), rgba(0, 0, 2, 0.2), #00ae84) !important;
    border-style: none;
}
.login_cover_container{
    position: relative;
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 2, 0.9), rgba(0, 0, 2, 0.9), rgba(0, 0, 2, 0.9)), url('../images/ecommerce-shopping-retail-ss-1920.jpg');
    background-size: cover;
}

.home_featured_products{
    height: 100vh;
}


.mod {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    /* background-color: rgb(0,0,0); Fallback color */
    background-color: rgba(0, 0, 0, 0.85); /* Black w/ opacity */
}

/* mod Content/Box */
.mod-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.mod-close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.mod-close:hover,
.mod-close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.login_div{
    background: #000000cc;
}
.login_bg{
    background: linear-gradient(rgba(0, 0, 2, 0.59), rgba(0, 0, 2, 0.59), rgba(0, 0, 2, 0.59)), url('../images/ecommerce-selling-online-online-sales-e-commerce-wallpaper.jpg');
    background-size: cover;   
}
.chat-box{
    position: relative;
    padding: 5px;
    border-radius: 3px;
    background: rgba(9, 9, 9, 0.672);
    width: 100%;
    /* margin-left: 20%; */
    color: #fff;
}
/* .chat-box:after{
    position: absolute;
  top: 25%;
  left: 0%;
  width: 0;
  height: 0;
  color: rgba(9, 9, 9, 0.672);
  margin-left: -14% !important;
  content: "";
  border-top: .4rem solid transparent;
  border-right: 1rem solid;
  border-bottom: .4rem solid transparent;
  border-bottom-left-radius: 10px;
} */


/* Carousel base class */

/* Since positioning the image, we need to help out the caption */
.carousel-caption {
    z-index: 10;
  }
  
  /* Declare heights because of positioning of img element */
  .carousel-item {
    height: 100%;
  }
  .carousel-item > img {
    position: absolute;
    top: 0;
    size: contain;
    left: 0;
    width: 100%;
    height: 100% !important;
  }
  .errors{
      font-size: 3em;
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
  }
  .ab-content{
      position: absolute !important;
      top: 50% !important;
      left: 50% !important;
      transform: translate(-50%,-50%) !important;
      z-index: 1000 !important;
  }
</style>
<div class="loading_div">
    <img src="assets/images/cload.gif" alt="loading...">
</div>
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

</body>
</html>
