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
                <h1 class="display-2 display-2--light">Register with us</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <form  method="post" action="{{ url('/register')}}">
                    {{ csrf_field() }}
                    <fieldset>
                    <div class="form-field">
                        <input name="name" type="text" id="" placeholder="Your Username / Company" value="{{ old('name') }}" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="email" type="email" id="" placeholder="Your Email" value="{{ old('email') }}" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <select id="gender" type="text" class="full-width" name="gender" required />
                            <option value="">Choose gender <i class="fa fa-angle-down"></i></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <input name="password" type="password" id="" placeholder="Your Password" value="" class="full-width" required >
                    </div>
                    <div class="form-field">
                        <input placeholder="Confirm Password" type="password" class="full-width" name="password_confirmation" required />
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Create Account</button>
                    </div>
    
                    </fieldset>
                </form>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Already have an account?</h3>

                    <div class="cinfo">
                        <h5>
                            <a href="{{ url('/login') }}" class="btn full-width btn--primary">LOGIN</a>
                        </h5>
                        <p>
                           Thanks for joining us
                        </p>
                    </div>

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->
</div>
    @include('layouts.modals')
@endsection