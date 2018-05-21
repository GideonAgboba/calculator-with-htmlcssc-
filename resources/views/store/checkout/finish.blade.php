@extends('layouts.app')
@section('contents')
<body class="checkout_container">
    <div class="checkout_center_container p-4">
        <div class="p-5 card wow fadeInUp">
            <div class="card-body p-4 text-center">
                <i class="fa text-success fa-check-circle" style="font-size: 10em;"></i>
                <p>Order placed successfully</p>
                <p>
                    <form action="/checkout/{{Auth::user()->id}}" method="get">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" vlaue="GET">
                        <input type="submit" class="btn home_login_btn" value="Continue to website">
                    </form>
                </p>
            </div>
            <div class="card-footer">
                
            </div>
        </div>
    </div>    
</body>
@endsection