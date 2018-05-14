@extends('layouts.app')
@section('contents')
@extends('layouts.navbar')
<div class="pt-5 justify-content-center my-auto d-flex pb-3">
    <div class="row pt-4 container-fluid">
        <div class="col-lg-3">
            <div class="card wow fadeInUp">
                <div class="card-header">
                    <h1>Notice:</h1>
                </div>
                <div class="card-body">
                    @if(Auth::user()->is_active == 0)
                        <p class="text-danger text-center">Please update Profile</p>
                    @else
                        <small class="text-center">
                        <p>
                            Hi
                            @if(Auth::user()->gender == 'male')
                            Mr
                            @else
                            Miss/Mrs
                            @endif
                            <strong>{{strtoupper(Auth::user()->firstname)}} {{strtoupper(Auth::user()->lastname)}}</strong>
                            with the informations provided, your successfully checked-out items
                            will be delivered to
                            <br>
                            <strong>
                                <i class="fa fa-map-marker"></i> 
                                {{Auth::user()->address}}, 
                                {{Auth::user()->city}}, 
                                {{Auth::user()->state}}, 
                                {{Auth::user()->country}}.
                            </strong>
                                If by any chance this delivery address is incorrect. Please make sure the correct address is given as delivery fee would be given during checkout.
                                <br>
                                <p class="text-center">
                                Thanks for patronizing us
                                <br>
                                <strong>Management</strong>
                                </p>
                        
                        </p>
                        </small>
                    @endif
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h1>Basket <i class="fa fa-shopping-cart"></i></h1>
                </div>

                @if(App\Cart::where('user_id', Auth::user()->id)->count() > 0)
                <div class="card-body">
                    <?php $total = 0; ?>
                    @if(!empty(session()->get('deletemsg')))
                        <div class="alert alert-danger text-center">
                        <p>{{session()->get('deletemsg')}}</p>
                        </div>
                    @endif
                    <div class="row">
                        @if($items = App\Cart::where('user_id', Auth::user()->id)->get())
                            @foreach($items as $item)
                            <form class="col-lg-4 col-md-6 mb-4 wow fadeInUp" action="/cart/{{$item->id}}" method="post">
                                <div class="text-center">
                                <div class="card card-img-top">
                                    <a href="#"><img class="" src="assets/images/products/{{$item->path}}" alt=""></a>
                                    <div class="card-body">
                                    <h4 class="card-title">
                                        <a>{{$item->title}}</a>
                                    </h4>
                                    <h5>₦{{$item->price}} <small>x</small>{{$item->quantity}}</h5>
                                    <p class="card-text">{{$item->description}}</p>
                                    <hr>
                                    </div>
                                    <div class="card-footer">
                                    <small class="text-muted">₦{{number_format($item->price * $item->quantity, 2)}}</small>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">                      
                                        <button type="submit" class="text-right btn btn-danger">Delete <i class="fa fa-shopping-trash"></i></button>
                                    </div>
                                </div>
                                </div>
                            </form>

                    <?php $total =  $total + ($item->quantity * $item->price); ?>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    @if(Auth::user()->is_active == 0)
                        <button  data-toggle="modal" data-target="#checkouterror" class="text-right justify-content-between my-auto d-flex btn home_login_btn text-dark form-control p-4"><a class="text-left text-dark">Total: ₦{{number_format($total, 2)}}</a> Checkout</button>
                    @else
                        <button  data-toggle="modal" data-target="#checkoutsuccess" class="text-right justify-content-between my-auto d-flex btn home_login_btn text-dark form-control p-4"><a class="text-left text-dark">Total: ₦{{number_format($total, 2)}}</a> Checkout</button>
                    @endif
                </div>
                @else
                    <p class="text-danger text-center mt-3">Empty Basket</p>
                    <div class="card-footer"></div>
                @endif

            </div>
        </div>
    </div>
</div>
@extends('store.layouts.modals')
@endsection