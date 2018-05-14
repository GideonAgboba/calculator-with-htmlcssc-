@extends('layouts.app')
@section('contents')
<div class="container-fluid pb-3">
@extends('layouts.navbar')
    <div class="content">
    <br>
            <div class="container-fluid pt-5">
                <h1 class="ml-3">{{strtoupper(Auth::user()->name)}} <i class="fa fa-user-circle"></i></h1>
                <hr>
                
                <div class=" wow fadeInUp">
                @if(App\User::find(Auth::user()->id)->is_active == 0)
                    @include('users/verify/unverified')
                @else
                    @include('users/verify/verified')
                @endif
                </div>

            </div>
    </div>
</div>
@endsection