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
            $(".nav-change").css({'background-color':'#000000d6',
                                        'transition': 'cubic-bezier(0.895, 0.03, 0.685, 0.22)'});
        } else {
            $('.nav-change').css({'background-color':'transparent'});
        }
    });
}
});
</script>
<style>
	.ab-content{
      position: absolute !important;
      top: 50% !important;
      left: 50% !important;
      transform: translate(-50%,-50%) !important;
      z-index: 1000 !important;
  }
</style>
<div class="" style="width: 100%">
<div ></div>
			<!-- COVER IMAGE AND FLOATING BUTTON -->
			<div class="cover-image"></div>	
			
			<!-- ICON, NAME AND DESCRIPTION -->
			<div class="" id="startchange">
				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 100vh;">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="ab-content text-white text-center">
						<h1>SPARKLEPAINTS</h1>
						<p>Huge sales up to 50% off on negociation</p>
						<form action="{{ url('/search') }}" method="post">
  							{{csrf_field()}}
							<div class="form-group row">
								<input type="text" name="search" placeholder="Search for item..." class="form-control" style="width: 80%;" required>
								<button type="submit" class="btn bg-white"><i class="fa fa-search"></i></button>
							</div>
						</form>
						<a class="home_login_btn text-white home_btns" href="#next">Explore</a>
					</div>
					<div class="carousel-inner" style="filter: brightness(0.2);">
						<div class="carousel-item active">
							<img class="first-slide" src="assets/images/102_4781.JPG" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="second-slide" src="assets/images/ecommerce-shopping-retail-ss-1920.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="third-slide" src="assets/images/ecommerce-shopping-retail-ss-1920.jpg" alt="Third slide">
						</div>
						</div>
					</div>
				</div>
			</div>
			




		 <div class="wow fadeInUp content-works text-white mt-5 mb-5" style="overflow: hidden;">
				<div class="row text-center">
					<div class="col-lg-4">
						<div class="media">
							<div class="media-body pl-3">
							<i class="fa fa-3x fa-shield-alt main_text_color"></i>
								<strong><h5>Security</h5></strong>
								<p class=""><small>logging in is fast and easy as we  help secure your passwords from  every possible treats.</small></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="media">
							<div class="media-body pl-3">
							<i class="fa fa-3x fa-box-open main_text_color"></i>
								<strong><h5>Products</h5></strong>
								<p class=""><small>logging in is fast and easy as we help secure your passwords from every possible treats.</small></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="media">
							<div class="media-body pl-3">
							<i class="fa fa-3x fa-shipping-fast main_text_color"></i>
								<strong><h5>Delivery</h5></strong>
								<p class=""><small>logging in is fast and easy as we help secure your passwords from every possible treats.</small></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-lg-4">
						<div class="media">
							<div class="media-body pl-3">
							<i class="fa fa-3x fa-credit-card main_text_color"></i>
								<strong><h5>Payments</h5></strong>
								<p class=""><small>logging in is fast and easy as we  help secure your passwords from  every possible treats.</small></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="media">
							<div class="media-body pl-3">
							<i class="fa fa-3x fa-archive main_text_color"></i>
								<strong><h5>Records</h5></strong>
								<p class=""><small>logging in is fast and easy as we help secure your passwords from every possible treats.</small></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="media">
							<div class="media-body pl-3">
							<i class="fa fa-3x fa-globe main_text_color"></i>
								<strong><h5>Log in and go</h5></strong>
								<p class=""><small>logging in is fast and easy as we help secure your passwords from every possible treats.</small></p>
							</div>
						</div>
					</div>
				</div> 
     	    </div>



			
			
		<div class="wow fadeInUp content-card" id="next" style="margin-top: 0% !important;"> 
			<h1 class="">OUR PRODUCTS</h1>
			<hr>	
			<div class="desktop-fab-container ">
     			<a href="#nextnextnext" class="text-white">
     				<paper-fab class="wow fadeInUp desktop-fab fa fa-angle-down fa-2x main_bg_color"></paper-fab>
     			</a>
			</div>
			    <div class="row">
				<div class="screenshot-item">
                    <a href="img/screenshots/ss1.png" data-featherlight="image">
                        <img src="assets/images/emulsion.jpg">
                    </a>
                </div>
                <div class="screenshot-item">
                    <a href="img/screenshots/ss2.png" data-featherlight="image">
                        <img src="assets/images/texcote.jpg">
                    </a>
                </div>
                <div class="screenshot-item">
                    <a href="img/screenshots/ss3.png" data-featherlight="image">
                        <img src="assets/images/gloss.jpg">
                    </a>
                </div>
                <div class="screenshot-item">
                    <a href="img/screenshots/ss4.png" data-featherlight="image">
                        <img src="assets/images/all.jpg">
                    </a>
                </div>
				</div>
     	    </div>
			
		
		<!-- APP DETAILS -->
		<div class="wow fadeInUp content-card" style="margin-top: 0;" id="nextnext">
			<h1 class="" style="font-weight: 300; color: #333">DETAILS</h1>
			<hr>
     		<div class="row">
				 <div class="col-lg-3">
					 <h3 class="text-center" style="font-weight: 300; color: #333">Emulsion</h3>
						<div>
							<!-- REPLACE WITH YOUR APP DETAILS ACCORDINGLY -->
							<div class="detail-item">
								<iron-icon class="details-icon" icon="mail"></iron-icon>
								<span class="text-description">Entertainment</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="star"></iron-icon>
								<span class="text-description">Average Rating 4.4</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="info"></iron-icon>
								<span class="text-description">Version 1.0.295<span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="android"></iron-icon>
								<span class="text-description">Android 4.0.3+</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="assessment"></iron-icon>
								<span class="text-description">10,000+ downloads</span>
							</div>
							<div class="detail-item">
								<iron-icon class="fa fa-warehouse"></iron-icon>
								<span class="text-description"><a href="#" class="ml-5 btn main_bg_sec_color text-center">Go to store</a></span>
							</div>
						</div>
				 </div>
				 <div class="col-lg-3">
					 <h3 class="text-center" style="font-weight: 300; color: #333">Texcote</h3>
						<div>
							<!-- REPLACE WITH YOUR APP DETAILS ACCORDINGLY -->
							<div class="detail-item">
								<iron-icon class="details-icon" icon="mail"></iron-icon>
								<span class="text-description">Entertainment</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="star"></iron-icon>
								<span class="text-description">Average Rating 4.4</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="info"></iron-icon>
								<span class="text-description">Version 1.0.295<span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="android"></iron-icon>
								<span class="text-description">Android 4.0.3+</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="assessment"></iron-icon>
								<span class="text-description">10,000+ downloads</span>
							</div>
							<div class="detail-item">
								<iron-icon class="fa fa-warehouse"></iron-icon>
								<span class="text-description"><a href="#" class="btn main_bg_sec_color ml-5">Go to store</a></span>
							</div>
						</div>
				 </div>
				 <div class="col-lg-3">
					 <h3 class="text-center" style="font-weight: 300; color: #333">Gloss</h3>
						<div>
							<!-- REPLACE WITH YOUR APP DETAILS ACCORDINGLY -->
							<div class="detail-item">
								<iron-icon class="details-icon" icon="mail"></iron-icon>
								<span class="text-description">Entertainment</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="star"></iron-icon>
								<span class="text-description">Average Rating 4.4</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="info"></iron-icon>
								<span class="text-description">Version 1.0.295<span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="android"></iron-icon>
								<span class="text-description">Android 4.0.3+</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="assessment"></iron-icon>
								<span class="text-description">10,000+ downloads</span>
							</div>
							<div class="detail-item">
								<iron-icon class="fa fa-warehouse"></iron-icon>
								<span class="text-description"><a href="#" class="btn main_bg_sec_color ml-5">Go to store</a></span>
							</div>
						</div>
				 </div>
				 <div class="col-lg-3">
					 <h3 class="text-center" style="font-weight: 300; color: #333">Others</h3>
						<div>
							<!-- REPLACE WITH YOUR APP DETAILS ACCORDINGLY -->
							<div class="detail-item">
								<iron-icon class="details-icon" icon="mail"></iron-icon>
								<span class="text-description">Entertainment</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="star"></iron-icon>
								<span class="text-description">Average Rating 4.4</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="info"></iron-icon>
								<span class="text-description">Version 1.0.295<span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="android"></iron-icon>
								<span class="text-description">Android 4.0.3+</span>
							</div>
							<div class="detail-item">
								<iron-icon class="details-icon" icon="assessment"></iron-icon>
								<span class="text-description">10,000+ downloads</span>
							</div>
							<div class="detail-item">
								<iron-icon class="fa fa-warehouse"></iron-icon>
								<span class="text-description"><a href="#" class="btn main_bg_sec_color text-center text-white">Go to store</a></span>
							</div>
						</div>
				 </div>
			 </div>
     	</div>


		 <div class="wow fadeInUp container pt-3 pb-3" id="nextnextnext">
			<div class="row">
				<div class="col-lg-3">
					<div class="header text-center text-white">
						<h3>ABOUT US</h3>
						<hr>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus possimus sed ab earum ut quidem atque soluta quibusdam suscipit quas, explicabo facilis sequi fugiat provident quis saepe obcaecati cum maxime.
						</p>
					</div>
				</div>
				<div class="col-lg-9">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="first-slide" src="assets/images/ecommerce-shopping-retail-ss-1920.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="second-slide" src="assets/images/ecommerce-shopping-retail-ss-1920.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="third-slide" src="assets/images/ecommerce-shopping-retail-ss-1920.jpg" alt="Third slide">
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>




		 <div class="wow fadeInUp content-card" id="nextnextnextnextnext" style="margin-top: 0px;">
			 <div class="row">
				 <div class="col-lg-4">
					<h3>WRITE TO US</h3>
				 </div>
				 <div class="col-lg-8">
					<form action="{{ url('/sendmail') }}">
  						{{csrf_field()}}
						<input type="hidden" name="to" value="sparklepaints@gmail.com">
						<!-- <input type="text" name="to" class="form-control" placeholder="sparklepaints@gmail.com" disabled required> -->
						<input type="text" name="subject" class="form-control" placeholder="Subject"  required>
						<textarea name="body" class="form-control" placeholder="Message" id="" cols="30" rows="10"  required></textarea>
						<input type="submit" class="form-control text-white home_login_btn" value="SEND MESSAGE">
					</form>
				 </div>
			 </div>
		</div>
		
		
		<!-- SPACE BELOW DETAILS -->	
		<div class="empty-space">
			<div class="meta-container wow fadeInUp">
				<div class="wow fadeInUp detail-item watermark credits">
						<span class="text-description credits-text" style="color: #ffffff">Sparklepaints@2018</span>
				</div>
			</div>	
		</div>

@endsection