@extends('layouts.app')
@section('contents')
@include('layouts.navbar')
<div class="card p-4 mb-3 container" style="margin-top:4em;">
      <div class="row">
        <img class="rounded-circle" src="uploads/{{Auth::user()->path}}" alt="" width="50" height="50">
        <h2 class="pt-2 pl-1">CHECKOUT FORM</h1>
      </div>
        <hr>
      <div class="row">
        <div class="col-md-4 wow fadeInUp order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">{{App\Cart::where('user_id', Auth::user()->id)->count()}}</span>
          </h4>
          <ul class="list-group mb-3">
          <?php $total = 0; ?>
          @if($items = App\Cart::where('user_id', Auth::user()->id)->get())
                @foreach($items as $item)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{$item->title}}</h6>
                        <small class="text-muted">{{$item->description}}</small>
                    </div>
                    <span class="text-muted">₦{{number_format($item->price * $item->quantity, 2)}}</span>
                    </li>
                    <?php $total =  $total + ($item->quantity * $item->price); ?>
                @endforeach
            @endif
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (NGN)</span>
              <strong>₦{{number_format($total, 2)}}</strong>
            </li>
          </ul>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" action="/checkout" method="post" novalidate>
            {{csrf_field()}}
            <input type="hidden" name="_method" value="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="{{Auth::user()->firstname}}" disabled required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="{{Auth::user()->lastname}}" disabled required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username / Company</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                </div>
                <input type="text" class="form-control" id="username" name="owner" placeholder="Username" value="{{Auth::user()->name}}" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username or company name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{Auth::user()->email}}" required>
                    <div class="invalid-feedback" style="width: 100%;">
                    Your email is required.
                    </div>
                </div>
                </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="{{Auth::user()->address}}, {{Auth::user()->city}}, {{Auth::user()->state}}, {{Auth::user()->country}}." required>
              <div class="invalid-feedback">
                Please enter your delivery address.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" disabled required>
                  <option >{{Auth::user()->country}}</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" disabled required>
                  <option >{{Auth::user()->state}}</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="zip" value="{{Auth::user()->zip}}" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <input type="hidden" name="firstname"  value="{{Auth::user()->firstname}}" required />
            <input type="hidden" name="lastname"  value="{{Auth::user()->lastname}}" required />
            <input type="hidden" name="delivery_date"  value="Unknown" required />
            <input type="hidden" name="phone"  value="{{Auth::user()->phone}}" required />
            <input type="hidden" name="status"   value="Pending" required />
            <input type="hidden" name="hash"  value="<?php echo 'SPA-' .rand(134568240, 9) .'-VI' .rand(23910, 5) .'-#' .Auth::user()->id;?>" required />
            <input type="hidden" name="path"  value="{{Auth::user()->path}}" required />
            <input type="hidden" name="user_id"  value="{{Auth::user()->id}}" required />
            @if($items = App\Cart::where('user_id', Auth::user()->id)->get())
                <input type="hidden" name="items"  value="@foreach($items as $item){{$item->title}}({{$item->description}}) x{{$item->quantity}}<?php echo "\n" ?>
                    @endforeach" required />
            @endif
            <input type="hidden" name="price" value="₦{{number_format($total, 2)}}" required >














            <hr class="mb-4">
            <button class="btn home_login_btn btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
    </div>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
@endsection