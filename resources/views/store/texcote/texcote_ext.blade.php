@extends('layouts.navbar')
@extends('layouts.app')
@section('contents')

<div class="container-fluid pt-5">

      <ol class="breadcrumb mt-4">
        <li class="breadcrumb-item">
          <a>Texcote</a>
        </li>
        <li class="breadcrumb-item active">Texcote exterior</li>
      </ol>
<div class="row">
  <div class="col-lg-3 p-3">

    <div class="">
      <div class="list-group">
        <a href="{{url('/storetexcotetexcote_ext')}}" class="list-group-item main_bg_color text-white">Texcote-exterior</a>
        <a href="{{url('/storetexcotetexcote_int')}}" class="list-group-item text-dark bg-light">Texcote-interior</a>
      </div>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9 card p-3 main_bg_color">
    @if(!empty(session()->get('createmsg')))
      <div class="alert alert-success pt-4 text-center">
        <p>{{session()->get('createmsg')}}</p>
      </div>
    @endif
    <div class="row">
      @if($items = App\TexcoteExterior::all())
        @foreach($items as $item)
          <form class=" wow fadeInUp col-lg-4 col-md-6 mb-4" action="/cart" method="post">
            <div>
              <div class="card h-100 card-img-top">
                <a href="#"><img class="card" src="assets/images/products/{{$item->path}}" alt=""></a>
                <div class="rounded-circle card" style="width: 70px;height: 70px !important;position:absolute;right:10px; top:45px;padding:0px;margin:0px;">
                  <img src="assets/images/eml.png" class="" style="width: 50px;height: 50px !important;margin-top:10px;margin-left:8px;">
                </div>
                <div class="card-body text-center">
                  <h1><small style="margin-top:-20px;"><small><small>₦</small></small></small>{{$item->price}}</h1>
                  <a class="card-text">{{$item->title}}</a>
                  <small><p class="card-text">{{$item->description}}</p></small>
                  <input type="number" name="quantity" placeholder="Quantity" class="text-center form-control" required />
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="title" value="{{$item->title}}">
                    <input type="hidden" name="description" value="{{$item->description}}">
                    <input type="hidden" name="price" value="{{$item->price}}">
                    <input type="hidden" name="path" value="{{$item->path}}">
                    <input type="hidden" name="_method" value="POST">                        
                    <button type="submit" class="right btn home_login_btn text-white">ADD TO CART <i class="fa fa-shopping-cart"></i></button>
                </div>
              </div>
            </div>
          </form>
        @endforeach
      @endif

    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->


    <!-- <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
@endsection
