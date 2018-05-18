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
    width: 300px;
    height: 300px;
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


<?php
if ($version != "desktop") {
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|symbian|treo|up\\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\\-(n|u)|c55\\/|capi|ccwa|cdm\\-|cell|chtm|cldc|cmd\\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\\-s|devi|dica|dmob|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\\-|_)|g1 u|g560|gene|gf\\-5|g\\-mo|go(\\.w|od)|gr(ad|un)|haie|hcit|hd\\-(m|p|t)|hei\\-|hi(pt|ta)|hp( i|ip)|hs\\-c|ht(c(\\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\\-(20|go|ma)|i230|iac( |\\-|\\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\\/)|klon|kpt |kwc\\-|kyo(c|k)|le(no|xi)|lg( g|\\/(k|l|u)|50|54|e\\-|e\\/|\\-[a-w])|libw|lynx|m1\\-w|m3ga|m50\\/|ma(te|ui|xo)|mc(01|21|ca)|m\\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\\-2|po(ck|rt|se)|prox|psio|pt\\-g|qa\\-a|qc(07|12|21|32|60|\\-[2-7]|i\\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\\-|oo|p\\-)|sdk\\/|se(c(\\-|0|1)|47|mc|nd|ri)|sgh\\-|shar|sie(\\-|m)|sk\\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\\-|v\\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\\-|tdg\\-|tel(i|m)|tim\\-|t\\-mo|to(pl|sh)|ts(70|m\\-|m3|m5)|tx\\-9|up(\\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\\-|2|g)|yas\\-|your|zeto|zte\\-/i',substr($useragent,0,4)))
    header('Location: http://google.com');
    }
?>
    @yield('contents')

</body>
</html>
