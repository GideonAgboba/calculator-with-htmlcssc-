@extends('layouts.app')
@section('contents')
@extends('layouts.home-navbar')
<script>
  $(document).ready(function(){
var scroll_start = 0;
var startchange = $('#startchange');
var offset = startchange.offset();
if (startchange.length){
    $(document).scroll(function() {
        scroll_start = $(this).scrollTop();
        if(scroll_start > offset.top) {
            $(".nav-change").css({'background-color':'#000000cc',
                                        'transition': 'cubic-bezier(0.895, 0.03, 0.685, 0.22)'});
        } else {
            $('.nav-change').css({'background-color':'transparent'});
        }
    });
}
});
</script>
<!-- FIRST CONTAINER -->
<div class="home_first_container" id="startchange">
    <div class="row">
        <div class="col-lg-6 home_first_container_left_content">
            <div class="container">
                <div class="header text-center">
                    <h2>BEGIN YOUR COMMERCIAL <br> EXPERIENCE</h2>
                    <p>Huge sales up to 50% off on negociation</p>
                <div class="float-center">
                    <button class="home_btns home_login_btn">LOGIN</button>
                    <button class="home_btns home_signup_btn">SIGNUP</button>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6"></div>
    </div>
</div>z
<!-- END OF FIRST CONTAINER -->













<!-- SECOND CONTAINER -->
<div class="container-fluid justify-content-center my-auto d-flex bg-white hide">
    <div class="row">
        <div class="col-lg-4" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-3x fa-sign-in main_text_color"></i>
                    <strong><h5>Log in and go</h5></strong>
                    <p class="text-muted"><small>logging in is fast and easy as we  help secure your passwords from  every possible treats.</small></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-3x fa-protect main_text_color"></i>
                    <strong><h5>Sucurity in check</h5></strong>
                    <p class="text-muted"><small>logging in is fast and easy as we help secure your passwords from every possible treats.</small></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-3x fa-sign-in main_text_color"></i>
                    <strong><h5>Log in and go</h5></strong>
                    <p class="text-muted"><small>logging in is fast and easy as we help secure your passwords from every possible treats.</small></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid justify-content-center my-auto d-flex pt-5 bg-white hide">
    <div class="row">
        <div class="col-lg-4" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-3x fa-sign-in main_text_color"></i>
                    <strong><h5>Log in and go</h5></strong>
                    <p class="text-muted"><small>logging in is fast and easy as we  help secure your passwords from  every possible treats.</small></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-3x fa-sign-in main_text_color"></i>
                    <strong><h5>Log in and go</h5></strong>
                    <p class="text-muted"><small>logging in is fast and easy as we help secure your passwords from every possible treats.</small></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-3x fa-sign-in main_text_color"></i>
                    <strong><h5>Log in and go</h5></strong>
                    <p class="text-muted"><small>logging in is fast and easy as we help secure your passwords from every possible treats.</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EDN OF SECOND SECTION -->







<!-- THIRD SECTION -->
<div class="home_third_container">
    <div class="media container p-5">
        <img src="assets/images/SID_FB_001.gif" class="rounded-circle m-5" width="200" height="200" alt="">
        <div class="media-body p-5 m-5">
            <small class="main_text_color">FOR FREE!</small>
            <h3>Take it everywhere</h3>
            <p><small>Sign up once, and it's instantly available on all your devices. <br> Sparklepaints goes everywhere you do</small></p>
            <a href="" class="home_btns home_login_btn text-white">GET STARTED</a>
        </div>
    </div>
</div>
<!-- END OF THIRD SECTION -->





<!-- FOURTH SECTION -->
<div class="container mt-5 p-5">
    <div class="header text-center">
        <h3><strong>Trusted by the experts</strong></h3>
        <p class="text-muted text-center">
            <small>
                "i've completely switched my entire solution for secure transactions,after spending 
                days of <br> researchs i've finally found my solution right here. 
            </small>
        </p>
    </div>
</div>
<!-- END OF FOURTH SECTION -->







<!-- ITEMS-CONTAINER -->
<div class="container-fluid">
</div>
<!-- END OF ITEM-CONTAINER -->







<!-- FIFTH CONTAINER -->
<div class="home_fifth_container">
    <div class="container p-5 text-white" style="position: absolute;top:70%;left:50%;transform: translate(-50%,-50%)">
        <div class="row">
            <div class="col-lg-6">
                <h4>Get started for Free</h4>
                <p><small>Getting started is easy and free it take only few minutes to setup.</small></p>
            </div>
            <div class="col-lg-6 text-left pt-3">
                <a href="" class="home_btns home_login_btn text-white">GET STARTED</a>
            </div>
        </div>
    </div>
</div>
<!-- END OF FIFTH CONTAINER -->




<!-- FOOTER -->
<footer class="container-fluid bg-white p-2 home_footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <header>
                    <h5>Topics</h5>
                    <p><small><a href="#">contents</a></small></p>
                </header>
            </div>
            <div class="col-lg-2">
                <header>
                    <h5>Topics</h5>
                    <p><small><a href="#">contents</a></small></p>
                </header>
            </div>
            <div class="col-lg-2">
                <header>
                    <h5>Topics</h5>
                    <p><small><a href="#">contents</a></small></p>
                </header>
            </div>
            <div class="col-lg-5">
                <iframe src="g.com" style="width:100%;height:100%;" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <div class="container p-2">
        <a class="float-left">copyright@sparklepaints.com</a>
        <a class="float-right">copyright@sparklepaints.com</a>
    </div>
</footer>
<!-- END OF FOOTER -->
@endsection






<!-- FIRST CONTAINER -->
<div class="home_first_container" id="startk">
    <div class="row">
        <div class="col-lg-6 home_first_container_left_content">
            <div class="container">
                <div class="header text-center">
                    <h2>BEGIN YOUR COMMERCIAL <br> EXPERIENCE</h2>
                    <p>Huge sales up to 50% off on negociation</p>
                    <div class="float-center">
                        <a class="home_btns home_login_btn btn-fill text-white" href="#next">Explore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6"></div>
    </div>
</div>
<!-- END OF FIRST CONTAINER -->
















<!-- SECOND CONTAINER -->
<div class="container-fluid justify-content-center my-auto d-flex bg-white hide mt-5 pt-5" id="next">
    <div class="row mt-5">
        <div class="col-lg-4 text-center" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-4x fa-sign-in main_text_color"></i>
                    <strong><h5>Log in and go</h5></strong>
                    <p class="text-muted"><small>logging in is fast and easy as we help secure your passwords from every possible treats.</small></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-4x fa-frown main_text_color"></i>
                    <strong><h5>Secured transactions</h5></strong>
                    <p class="text-muted"><small>Achiveing secure transactions with payments made on delivery.</small></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-4x fa-user-circle main_text_color"></i>
                    <strong><h5>Users informations</h5></strong>
                    <p class="text-muted"><small>Profiles and Order informations are secured from the public</small></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid justify-content-center my-auto d-flex pt-5 bg-white hide">
    <div class="row">
        <div class="col-lg-4 text-center" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-5x fa-phone main_text_color"></i>
                    <strong><h5>Communication</h5></strong>
                    <p class="text-muted"><small>Constant communication with users during transactions to build trust.</small></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-5x fa-shopping-cart main_text_color"></i>
                    <strong><h5>Shopping experience</h5></strong>
                    <p class="text-muted"><small>Quick and easy shopping experience with reliable documentation on items purchased.</small></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center" style="padding: 0rem 5rem;">
            <div class="media">
                <div class="media-body pl-3">
                <i class="fa fa-5x fa-globe main_text_color"></i>
                    <strong><h5>Shopping everywhere</h5></strong>
                    <p class="text-muted"><small>Shop with us from anywhere you are.</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EDN OF SECOND SECTION -->







<!-- THIRD SECTION -->
<div class="home_third_container">
    <div class="media container p-5">
        <img src="assets/images/SID_FB_001.gif" class="rounded-circle m-5" width="200" height="200" alt="">
        <div class="media-body p-5 m-5">
            <small class="main_text_color">FOR FREE!</small>
            <h3>Take it everywhere</h3>
            <p>
                <small>Sign up once, and it's instantly available on all your devices. <br> Sparklepaints goes everywhere you do</small>
                <br>
                <br>
                <a href="{{url('/login')}}" class="home_login_btn text-white p-3" style="width: 20em !important;">Get started</a>
            </p>
        </div>
    </div>
</div>
<!-- END OF THIRD SECTION -->





<!-- FOURTH SECTION -->
<div class="container mt-5 p-5">
    <div class="header text-center">
        <h3><strong>Trusted by the experts</strong></h3>
        <p class="text-muted text-center">
            <small>
                "i've completely switched my entire solution for secure transactions,after spending 
                days of <br> researchs i've finally found my solution right here. 
            </small>
        </p>
    </div>
</div>
<!-- END OF FOURTH SECTION -->





<!-- FEATURED PRODUcTS -->
<div class="container-fluid home_featured_products pt-5">
    <div class="header text-center">
        <h2>FEATURED PRODUCTS</h2>
    </div>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, rem est eligendi repellendus fugit nesciunt natus eum doloremque provident aut, qui iusto enim vitae laborum, nemo exercitationem at impedit temporibus!
</div>
<!-- END OF FEATURED PRODUCTS -->






<!-- ITEMS-CONTAINER -->
<div class="container-fluid">
</div>
<!-- END OF ITEM-CONTAINER -->







<!-- FIFTH CONTAINER -->
<div class="home_fifth_container">
    <div class="container p-5 text-white" style="position: absolute;top:70%;left:50%;transform: translate(-50%,-50%)">
        <div class="row">
            <div class="col-lg-6">
                <h4>Get started for Free</h4>
                <p><small>Getting started is easy and free it take only few minutes to setup.</small></p>
            </div>
            <div class="col-lg-6 text-left pt-3">
                <a href="" class="home_btns home_login_btn text-white">GET STARTED</a>
            </div>
        </div>
    </div>
</div>
<!-- END OF FIFTH CONTAINER -->




<!-- FOOTER -->
<footer class="container-fluid bg-white p-2 home_footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <header>
                    <h5>Topics</h5>
                    <p><small><a href="#">contents</a></small></p>
                </header>
            </div>
            <div class="col-lg-2">
                <header>
                    <h5>Topics</h5>
                    <p><small><a href="#">contents</a></small></p>
                </header>
            </div>
            <div class="col-lg-2">
                <header>
                    <h5>Topics</h5>
                    <p><small><a href="#">contents</a></small></p>
                </header>
            </div>
            <div class="col-lg-5">
                <iframe src="g.com" style="width:100%;height:100%;" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <div class="container p-2">
        <a class="float-left">copyright@sparklepaints.com</a>
        <a class="float-right">copyright@sparklepaints.com</a>
    </div>
</footer>
<!-- END OF FOOTER -->



