<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
        <div class="card p-4 card-user">
                            <div class="content text-center">
                                <div class="author">
                                     <a>
                                    <img class="avatar border-gray rounded-circle" src="uploads/{{Auth::user()->path}}" width='150' height='150' alt="..."/>

                                      <h4 class="title">{{Auth::user()->firstname}} {{Auth::user()->lastname}}<br />
                                         <small>
                                         <small>{{Auth::user()->phone}}</small>
                                         <small>{{Auth::user()->email}}</small>                                         </small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center">
                                    <small>"{{Auth::user()->bio}}"</small>
                                </p>
                            </div>
                            <hr>
                            <form enctype="multipart/form-data" action="{{url('/changeprofileimage/{{Auth::user()->id}}')}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Change profile image:</label>
                                            <input type="file" name="path" class="form-control" required />
                                        </div>
                                    </div>
                                    <button class="btn home_login_btn from-control container" type="submit"><i class="fa fa-camera"></i> Update image</button>
                                </div>
                            </form>
                        </div>

            <div class="bg-light card mt-3 mb-3">
                <div class="card mb-3" style="overflow-y: auto;height: 30vh;">
                    <div class="card-header">
                    <i class="fa fa-bell"></i> Activities</div>
                    <div class="list-group list-group-flush small">
                    <a class="list-group-item list-group-item-action" href="#">
                        <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="uploads/{{Auth::user()->path}}" width="35" height="35" alt="">
                            <div class="media-body">
                                <strong>You </strong>Created this profile
                                <strong>{{Auth::user()->name}}</strong>.
                                <div class="text-muted smaller">{{Auth::user()->created_at->diffForHumans()}}</div>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                        <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="uploads/{{Auth::user()->path}}" width="35" height="35" alt="">
                            <div class="media-body">
                                <strong>You </strong>updated your profile <br>
                                <strong>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</strong>.
                                <div class="text-muted smaller">{{Auth::user()->updated_at->diffForHumans()}}</div>
                            </div>
                        </div>
                    </a>
                    @if($items = App\Cart::where('user_id', Auth::user()->id)->get())
                        @foreach($items as $item)
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="uploads/{{Auth::user()->path}}" width="35" height="35" alt="">
                                    <div class="media-body">
                                        <strong>You </strong>Added {{$item->quantity}} {{$item->title}} to your cart
                                        <strong>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</strong>.
                                        <div class="text-muted smaller">{{$item->updated_at->diffForHumans()}}</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif

                    @if($items = App\Order::where('user_id', Auth::user()->id)->get())
                        @foreach($items as $item)
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="uploads/{{Auth::user()->path}}" width="35" height="35" alt="">
                                    <div class="media-body">
                                        <strong>You </strong>Made an Order with id <strong>{{$item->hash}}</strong><br>
                                        <strong>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</strong>.
                                        <div class="text-muted smaller">{{$item->updated_at->diffForHumans()}}</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
                <div class="card p-3">
                    @if(!empty(session()->get('updatemsg')))
                        <div class="alert alert-success text-center">
                            <p>{{session()->get('updatemsg')}}</p>
                        </div>
                    @endif
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <form class="" enctype="multipart/form-data" action="{{url('/editprofile/{{Auth::user()->id}}')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="POST">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Username/Company</label>
                                    <input type="text" name="name" class="form-control" disabled placeholder="Company" value="{{Auth::user()->name}}" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="{{Auth::user()->firstname}}" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="{{Auth::user()->lastname}}" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{Auth::user()->email}}" required />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Adress" value="{{Auth::user()->address}}" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Phone" value="{{Auth::user()->phone}}" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>
                                    <select type="text" name="gender" class="form-control" required />
                                        <option value="{{Auth::user()->gender}}">{{Auth::user()->gender}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control" placeholder="Country" value="{{Auth::user()->country}}" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name="state" class="form-control" placeholder="State" value="{{Auth::user()->state}}" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" placeholder="City" value="{{Auth::user()->city}}" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" name="zip" class="form-control" placeholder="ZIP Code" value="{{Auth::user()->zip}}" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Profile Photo</label>
                                    <input type="hidden" name="path" value="{{Auth::user()->path}}">
                                    <input type="text" disabled name="path" class="form-control" value="{{Auth::user()->path}}" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Me</label>
                                    <textarea rows="5" name="bio" class="form-control" placeholder="Here can be your description" required />{{Auth::user()->bio}}</textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn home_login_btn btn-fill pull-right">Edit Profile</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h5>Orders <i class="fa fa-handshake-o"></i></h5>
                </div>
                <div class="card-body" style="overflow-y: auto;height: 98vh;">
                @if(App\Order::where('user_id', Auth::user()->id)->count() > 0)
                    @if($items = App\Order::where('user_id', Auth::user()->id)->get())
                        @foreach($items as $item)
                            <div class="card mb-2">
                                <div class="card-header">
                                    <div class="media text-center">
                                        <img src="uploads/{{Auth::user()->path}}" width="50" height="50" class="img-responsive rounded-circle" alt="">
                                        <div class="media-body ml-3">
                                            <h5>Task Details</h5>
                                            <small>
                                            <small>{{$item->items}}</small><br>
                                            <small>{{$item->price}}</small><br>
                                            <small>{{$item->hash}}</small><br>
                                            <small class="text-danger">{{$item->status}}</small>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
                @if(App\Processing::where('user_id', Auth::user()->id)->count() > 0)
                    @if($items = App\Processing::where('user_id', Auth::user()->id)->get())
                        @foreach($items as $item)
                            <div class="card mb-2">
                                <div class="card-header">
                                    <div class="media text-center">
                                        <img src="uploads/{{Auth::user()->path}}" width="50" height="50" class="img-responsive rounded-circle" alt="">
                                        <div class="media-body ml-3">
                                            <h5>Task Details</h5>
                                            <small>
                                            <small>{{$item->items}}</small><br>
                                            <small>{{$item->price}}</small><br>
                                            <small>{{$item->hash}}</small><br>
                                            <small class="text-warning">{{$item->status}}</small>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
                @if(App\Complete::where('user_id', Auth::user()->id)->count() > 0)
                    @if($items = App\Complete::where('user_id', Auth::user()->id)->get())
                        @foreach($items as $item)
                            <div class="card mb-2">
                                <div class="card-header">
                                    <div class="media text-center">
                                        <img src="uploads/{{Auth::user()->path}}" width="50" height="50" class="img-responsive rounded-circle" alt="">
                                        <div class="media-body ml-3">
                                            <h5>Task Details</h5>
                                            <small>
                                            <small>{{$item->items}}</small><br>
                                            <small>{{$item->price}}</small><br>
                                            <small>{{$item->hash}}</small><br>
                                            <small class="text-success">{{$item->status}}</small>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif

                <!-- IF NO ORDER ACTIVITIES -->
                @if(App\Order::where('user_id', Auth::user()->id)->count() == 0 && App\Processing::where('user_id', Auth::user()->id)->count() == 0 && App\Complete::where('user_id', Auth::user()->id)->count() == 0)
                    <div class="alert alert-danger text-center">
                        <p>No Orders</p>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>

                <div class="card card-footer">
                <form action="{{ url('/sendmsg') }}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="owner" value="{{Auth::user()->name}}">
                    <input type="hidden" name="path" value="{{Auth::user()->path}}">
                    <div class="row">
                        <label for="msg" class="text-muted ml-2">Drop message or complain... <i class="fa fa-envelope"></i></label>
                        <textarea name="msg" id="msg" cols="30" rows="10" class="form-control" placeholder="Write here..."></textarea>
                        <input type="submit" value="MESSAGE" class="form-control home_login_btn">
                    </div>
                </form>
                </div>
</div>