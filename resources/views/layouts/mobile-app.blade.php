<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Sparklepaints</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="mobile/css/base.css">
    <link rel="stylesheet" href="mobile/css/vendor.css">
    <link rel="stylesheet" href="mobile/css/full-main.css">
    <link rel="stylesheet" href="mobile/css/main.css">

    <!-- script
    ================================================== -->
    <script src="mobile/js/modernizr.js"></script>
    <script src="mobile/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->

</head>

<body id="top">

    @yield('mobile-contents')



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