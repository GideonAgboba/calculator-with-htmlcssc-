@extends('layouts.app')
@section('contents')
@include('layouts.navbar')
<div class="container">
    <div class="card" style="margin-top: 5em;">
        <div class="card-header">
            @if($emlint_result->count() > 0 || $emlext_result->count() > 0 || $texint_result->count() > 0 || $texext_result->count() > 0 || $gloss_result->count() > 0)
            <div class="row">
                <div class="col-lg-5">
                    <i class="fa fa-smile fa-2x"></i> Search result for "{{$searchkey}}"
                </div>
                <div class="col-lg-7">
                    <form action="{{ url('/search') }}">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <input type="text" name="search" placeholder="Try another search keyword..." class="form-control" style="width: 80%;" required>
                            <button type="submit" class="btn bg-white"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-lg-5">
                    <i class="fa fa-frown fa-2x"></i> Opps no result found for the search keyword "{{$searchkey}}"
                </div>
                <div class="col-lg-7">
                    <form action="{{ url('/search') }}">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <input type="text" name="search" placeholder="Try another search keyword..." class="form-control" style="width: 80%;" required>
                            <button type="submit" class="btn bg-white"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            @endif
        </div>
        <div class="card-body">
        @if($emlint_result->count() > 0 || $emlext_result->count() > 0 || $texint_result->count() > 0 || $texext_result->count() > 0 || $gloss_result->count() > 0)
            <div class="row">
                @foreach($emlint_result->all() as $emlint)
                <form class=" wow fadeInUp col-lg-4 col-md-6 mb-4" action="/cart" method="post">
                    <div>
                    <div class="card h-100 card-img-top">
                        <a href="#"><img class="card" src="assets/images/products/{{$emlint->path}}" alt=""></a>
                        <div class="rounded-circle card" style="width: 70px;height: 70px !important;position:absolute;right:10px; top:45px;padding:0px;margin:0px;">
                        <img src="assets/images/eml.png" class="" style="width: 50px;height: 50px !important;margin-top:10px;margin-left:8px;">
                        </div>
                        <div class="card-body text-center">
                        <h1><small style="margin-top:-20px;"><small><small>₦</small></small></small>{{$emlint->price}}</h1>
                        <a class="card-text">{{$emlint->title}}</a>
                        <small><p class="card-text">{{$emlint->description}}</p></small>
                        <input type="number" name="quantity" placeholder="Quantity" class="text-center form-control" required />
                        </div>
                        <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="title" value="{{$emlint->title}}">
                            <input type="hidden" name="description" value="{{$emlint->description}}">
                            <input type="hidden" name="price" value="{{$emlint->price}}">
                            <input type="hidden" name="path" value="{{$emlint->path}}">
                            <input type="hidden" name="_method" value="POST">                        
                            <button type="submit" class="right btn home_login_btn text-white">ADD TO CART <i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    </div>
                </form>
                @endforeach



                @foreach($emlext_result->all() as $emlext)
                <form class=" wow fadeInUp col-lg-4 col-md-6 mb-4" action="/cart" method="post">
                    <div>
                    <div class="card h-100 card-img-top">
                        <a href="#"><img class="card" src="assets/images/products/{{$emlext->path}}" alt=""></a>
                        <div class="rounded-circle card" style="width: 70px;height: 70px !important;position:absolute;right:10px; top:45px;padding:0px;margin:0px;">
                        <img src="assets/images/eml.png" class="" style="width: 50px;height: 50px !important;margin-top:10px;margin-left:8px;">
                        </div>
                        <div class="card-body text-center">
                        <h1><small style="margin-top:-20px;"><small><small>₦</small></small></small>{{$emlext->price}}</h1>
                        <a class="card-text">{{$emlext->title}}</a>
                        <small><p class="card-text">{{$emlext->description}}</p></small>
                        <input type="number" name="quantity" placeholder="Quantity" class="text-center form-control" required />
                        </div>
                        <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="title" value="{{$emlext->title}}">
                            <input type="hidden" name="description" value="{{$emlext->description}}">
                            <input type="hidden" name="price" value="{{$emlext->price}}">
                            <input type="hidden" name="path" value="{{$emlext->path}}">
                            <input type="hidden" name="_method" value="POST">                        
                            <button type="submit" class="right btn home_login_btn text-white">ADD TO CART <i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    </div>
                </form>
                @endforeach



                @foreach($texint_result->all() as $texint)
                <form class=" wow fadeInUp col-lg-4 col-md-6 mb-4" action="/cart" method="post">
                    <div>
                    <div class="card h-100 card-img-top">
                        <a href="#"><img class="card" src="assets/images/products/{{$texint->path}}" alt=""></a>
                        <div class="rounded-circle card" style="width: 70px;height: 70px !important;position:absolute;right:10px; top:45px;padding:0px;margin:0px;">
                        <img src="assets/images/tex.png" class="" style="width: 50px;height: 50px !important;margin-top:10px;margin-left:8px;">
                        </div>
                        <div class="card-body text-center">
                        <h1><small style="margin-top:-20px;"><small><small>₦</small></small></small>{{$texint->price}}</h1>
                        <a class="card-text">{{$texint->title}}</a>
                        <small><p class="card-text">{{$texint->description}}</p></small>
                        <input type="number" name="quantity" placeholder="Quantity" class="text-center form-control" required />
                        </div>
                        <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="title" value="{{$texint->title}}">
                            <input type="hidden" name="description" value="{{$texint->description}}">
                            <input type="hidden" name="price" value="{{$texint->price}}">
                            <input type="hidden" name="path" value="{{$texint->path}}">
                            <input type="hidden" name="_method" value="POST">                        
                            <button type="submit" class="right btn home_login_btn text-white">ADD TO CART <i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    </div>
                </form>
                @endforeach



                @foreach($texext_result->all() as $texext)
                <form class=" wow fadeInUp col-lg-4 col-md-6 mb-4" action="/cart" method="post">
                    <div>
                    <div class="card h-100 card-img-top">
                        <a href="#"><img class="card" src="assets/images/products/{{$texext->path}}" alt=""></a>
                        <div class="rounded-circle card" style="width: 70px;height: 70px !important;position:absolute;right:10px; top:45px;padding:0px;margin:0px;">
                        <img src="assets/images/eml.png" class="" style="width: 50px;height: 50px !important;margin-top:10px;margin-left:8px;">
                        </div>
                        <div class="card-body text-center">
                        <h1><small style="margin-top:-20px;"><small><small>₦</small></small></small>{{$texext->price}}</h1>
                        <a class="card-text">{{$texext->title}}</a>
                        <small><p class="card-text">{{$texext->description}}</p></small>
                        <input type="number" name="quantity" placeholder="Quantity" class="text-center form-control" required />
                        </div>
                        <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="title" value="{{$texext->title}}">
                            <input type="hidden" name="description" value="{{$texext->description}}">
                            <input type="hidden" name="price" value="{{$texext->price}}">
                            <input type="hidden" name="path" value="{{$texext->path}}">
                            <input type="hidden" name="_method" value="POST">                        
                            <button type="submit" class="right btn home_login_btn text-white">ADD TO CART <i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    </div>
                </form>
                @endforeach



                @foreach($gloss_result->all() as $gloss)
                <form class=" wow fadeInUp col-lg-4 col-md-6 mb-4" action="/cart" method="post">
                    <div>
                    <div class="card h-100 card-img-top">
                        <a href="#"><img class="card" src="assets/images/products/{{$gloss->path}}" alt=""></a>
                        <div class="rounded-circle card" style="width: 70px;height: 70px !important;position:absolute;right:10px; top:45px;padding:0px;margin:0px;">
                        <img src="assets/images/eml.png" class="" style="width: 50px;height: 50px !important;margin-top:10px;margin-left:8px;">
                        </div>
                        <div class="card-body text-center">
                        <h1><small style="margin-top:-20px;"><small><small>₦</small></small></small>{{$gloss->price}}</h1>
                        <a class="card-text">{{$gloss->title}}</a>
                        <small><p class="card-text">{{$gloss->description}}</p></small>
                        <input type="number" name="quantity" placeholder="Quantity" class="text-center form-control" required />
                        </div>
                        <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="title" value="{{$gloss->title}}">
                            <input type="hidden" name="description" value="{{$gloss->description}}">
                            <input type="hidden" name="price" value="{{$gloss->price}}">
                            <input type="hidden" name="path" value="{{$gloss->path}}">
                            <input type="hidden" name="_method" value="POST">                        
                            <button type="submit" class="right btn home_login_btn text-white">ADD TO CART <i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    </div>
                </form>
                @endforeach

            </div>
        @endif
        </div>
    </div>
</div>
@stop