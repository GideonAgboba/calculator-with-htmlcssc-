@extends('layouts.app')
@section('contents')

<html class="no-js" lang="en">
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="mobile/css/base.css">
    <link rel="stylesheet" href="mobile/css/vendor.css">
    <link rel="stylesheet" href="mobile/css/custom.css">
<div class="justify-content-center text-center my-auto">
      <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Get started</h3>
                <h1 class="display-2 display-2--light">Login with us</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <form  method="post" action="{{ url('/login')}}">
                    {{ csrf_field() }}
                    <fieldset>
                    <div class="form-field">
                        <input name="email" type="email" id="" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="password" type="password" id="" placeholder="Your Password" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Login</button>
                    </div>
    
                    </fieldset>
                </form>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Dont have an account?</h3>

                    <div class="cinfo">
                        <h5>
                            <a href="{{ url('/register') }}" class="btn full-width btn--primary">CREATE ACCOUNT</a>
                        </h5>
                        <p>
                            Forgot password? <a> Reset here</a>
                        </p>
                    </div>

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->
</div>
    @include('layouts.modals')
@endsection