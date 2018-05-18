@extends('layouts.app')
@section('contents')
<div class="login_bg" style="height: 100vh;">
    <div class="row">
        <div class="col-lg-6">
        <div class="wow fadeInUp hide container text-white" style="margin-top: 14em;">
                <div class="header text-center">
                    <h2>BEGIN YOUR COMMERCIAL <br> EXPERIENCE</h2>
                    <p>Huge sales up to 50% off on negociation</p>
                <div class="float-center">
                    <button data-toggle="modal" data-target="#registermodal" class="home_btns home_login_btn">REGISTER</button>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="container" style="width:80%;padding-top: 5em;">
                <div class="login_div justify-content-center card">
                    <div class="card-header">
                        <h2>LOGIN <i class="fa fa-lock-open"></i></h2>
                    </div>
                    <div class="card-body">
                        <form class=""  method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input p-5" type="checkbox"> Remember Password</label>
                                </div>
                            </div>
                            <button class="btn  home_login_btn form-control btn-block" type="submit">Login</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="text-center text-dark">
                            <a class="d-block small mt-3" data-toggle="modal" data-target="#registermodal" href="#">Register an Account</a>
                            <a class="d-block small" data-toggle="modal" data-target="#forgotpass" href="#">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('layouts.modals')
@endsection