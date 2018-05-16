
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->


        <!-- Msgs Modal-->
        <div class="modal fade" id="msgsmodal" tabindex="-1" role="dialog" aria-labelledby="msgsmodalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="msgsmodalLabel">Messages:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="alert bg-primary">
              @if(App\Message::all()->count() > 0)
                @if($msgs = App\Message::all())
                  @foreach($msgs as $msg)
                  <div class="bg-primary m-2">
                    <div class="media">
                    <img src="uploads/{{$msg->path}}" class="rounded-circle ml-1" width="30" height="30" style="margin-right: -10px;z-index: 1000;">
                    <div class="media-content">
                      <div class="chat-box pl-3">
                        <div>
                          <small class="text-left">From: {{$msg->owner}}</small><br>
                          <small class="text-center">{{$msg->msg}}</small><br>
                          <small><small class="text-muted">Sent {{$msg->created_at->diffForHumans()}}</small></small>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>  
                  @endforeach
                @endif
              @else
                <div class="text-center alert alert-danger">
                  <p>No message available</p>
                </div>
              @endif
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->


    <!-- Task Modal-->
    <div class="modal fade" id="tasksmodal" tabindex="-1" role="dialog" aria-labelledby="tasksmodal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tasksmodal">Tasks:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="text-center alert bg-danger">
              @if(App\Order::all()->count() > 0)
                @if($orders = App\Order::all())
                  @foreach($orders as $order)
                  <div class="card mb-2">
                        <div class="card-header">
                            <div class="media text-center">
                                <img src="uploads/{{$order->path}}" width="50" height="50" class="img-responsive rounded-circle" alt="">
                                <div class="media-body ml-3">
                                    <h5>Task Details</h5>
                                    <small><a class="text-center">{{$order->firstname}} {{$order->lastname}}</a></small>
                                    <small><a>{{$order->owner}}</a></small>
                                    <small><p class="text-center"><small>Created {{$order->created_at->diffForHumans()}}</small></p></small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media text-center">
                                    <strong>Items:</strong>
                                    <br>
                                    <div class="media-body">
                                        <small>{{$order->items}}</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media text-center">
                                    <strong>Price:</strong>
                                    <br>
                                    <div class="media-body">
                                        <small>{{$order->price}}</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media text-center">
                                    <strong class="text-left">Delivery address:</strong>
                                    <br>
                                    <div class="media-body">
                                        <small>{{$order->address}}</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media text-center">
                                    <strong>Status:</strong>
                                    <br>
                                    <div class="media-body">
                                        <small>{{$order->status}}</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                              <form action="{{url('/adminpage')}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="owner"  value="{{$order->owner}}" required />
                                <input type="text" class="form-control" name="delivery_date"  placeholder="Delivery Period (1-6 days)" required />
                                <input type="hidden" name="firstname"  value="{{$order->firstname}}" required />
                                <input type="hidden" name="lastname"  value="{{$order->lastname}}" required />
                                <input type="hidden" name="email"   value="{{$order->email}}" required />
                                <input type="hidden" name="phone"  value="{{$order->phone}}" required />
                                <input type="hidden" name="status"   value="Processing" required />
                                <input type="hidden" name="hash"  value="{{$order->hash}}" required />
                                <input type="hidden" name="path"  value="{{$order->path}}" required />
                                <input type="hidden" name="price"  value="{{$order->price}}" required />
                                <input type="hidden" name="user_id"  value="{{$order->user_id}}" required />
                                <input type="hidden" name="address"  value="{{$order->address}}" required />
                                <input type="hidden" name="items"  value="{{$order->items}}" required />
                                <button type="submit" class="btn btn-dark justify-content-between my-auto d-flex container-fluid">
                                  Process <i class="ml-3 fa fa-refresh"></i>
                                </button>
                              </form>
                              <!-- <form action="{{url('/adminordersaccept')}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$order->id}}">
                                <input type="hidden" name="user_id" value="{{$order->user_id}}">
                                <button type="submit" class="btn btn-dark justify-content-between my-auto d-flex container-fluid"><small>#{{$order->hash}} </small> <i class="ml-3 fa fa-envelope"></i></button>
                              </form> -->
                            </div>
                        </div>
                    </div>
                  @endforeach
                @endif
              @else
              <div class="text-center alert alert-danger">
                <p>No task available</p>
              </div>
              @endif
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->

    <!-- Order Modal-->
    <div class="modal fade" id="processingmodal" tabindex="-1" role="dialog" aria-labelledby="processingmodal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="processingmodal">Processings:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert bg-warning">
            @if(App\Processing::all()->count() > 0)
                @if($orders = App\Processing::all())
                  @foreach($orders as $order)
                  <div class="card mb-2">
                        <div class="card-header">
                            <div class="media text-center">
                                <img src="uploads/{{$order->path}}" width="50" height="50" class="img-responsive rounded-circle" alt="">
                                <div class="media-body ml-3">
                                    <h5>Task Details</h5>
                                    <small><a class="text-center">{{$order->firstname}} {{$order->lastname}}</a></small>
                                    <small><a>{{$order->owner}}</a></small>
                                    <small><p class="text-center"><small>Created {{$order->created_at->diffForHumans()}}</small></p></small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media text-center">
                                    <strong>Items:</strong>
                                    <br>
                                    <div class="media-body">
                                        <small>{{$order->items}}</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media text-center">
                                    <strong>Price:</strong>
                                    <br>
                                    <div class="media-body">
                                        <small>{{$order->price}}</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media text-center">
                                    <strong class="text-left">Delivery address:</strong>
                                    <br>
                                    <div class="media-body">
                                        <small>{{$order->address}}</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media text-center">
                                    <strong>Status:</strong>
                                    <br>
                                    <div class="media-body">
                                        <small>{{$order->status}}</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                              <form action="{{url('/adminpage')}}/{{$order->id}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="owner"  value="{{$order->owner}}" required />
                                <input type="hidden" name="delivery_date" value="{{$order->delivery_date}}" required />
                                <input type="hidden" name="firstname"  value="{{$order->firstname}}" required />
                                <input type="hidden" name="lastname"  value="{{$order->lastname}}" required />
                                <input type="hidden" name="email"   value="{{$order->email}}" required />
                                <input type="hidden" name="phone"  value="{{$order->phone}}" required />
                                <input type="hidden" name="status"   value="Completed" required />
                                <input type="hidden" name="hash"   value="{{$order->hash}}" required />
                                <input type="text" disabled class="form-control" name="hash"  value="{{$order->hash}}" required />
                                <input type="hidden" name="path"  value="{{$order->path}}" required />
                                <input type="hidden" name="price"  value="{{$order->price}}" required />
                                <input type="hidden" name="user_id"  value="{{$order->user_id}}" required />
                                <input type="hidden" name="address"  value="{{$order->address}}" required />
                                <input type="hidden" name="items"  value="{{$order->items}}" required />
                                <button type="submit" class="btn btn-dark justify-content-between my-auto d-flex container-fluid">
                                  COMPLETED <i class="ml-3 fa fa-check-circle"></i>
                                </button>
                              </form>
                              <!-- <form action="{{url('/adminordersaccept')}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$order->id}}">
                                <input type="hidden" name="user_id" value="{{$order->user_id}}">
                                <button type="submit" class="btn btn-dark justify-content-between my-auto d-flex container-fluid"><small>#{{$order->hash}} </small> <i class="ml-3 fa fa-envelope"></i></button>
                              </form> -->
                            </div>
                        </div>
                    </div>
                  @endforeach
                @endif
              @else
              <div class="text-center alert alert-danger">
                <p>No task available</p>
              </div>
              @endif
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->

    <!-- Tickets Modal-->
    <div class="modal fade" id="completedmodal" tabindex="-1" role="dialog" aria-labelledby="completedmodal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="completedmodal">Completed:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            
          <div class="text-center alert bg-success">
              @if(App\Complete::all()->count() > 0)
                @if($orders = App\Complete::all())
                  @foreach($orders as $order)
                  <div class="card mb-2">
                        <div class="card-header">
                            <div class="media text-center">
                                <img src="uploads/{{$order->path}}" width="50" height="50" class="img-responsive rounded-circle" alt="">
                                <small><a class="ml-2 text-center">{{$order->firstname}} {{$order->lastname}}</a> <br>{{$order->owner}} <br>
                                <a class="text-center"><small>{{$order->email}}</small></a>
                                <p class="text-center"><small>Completed {{$order->created_at->diffForHumans()}}</small></p>
                                </small>
                                <div class="media-body ml-3">
                                    <h5>Task Details</h5>
                                    <small>
                                    <small>{{$order->items}}</small><br>
                                    <small>{{$order->price}}</small><br>
                                    <small>{{$order->hash}}</small>
                                    </small>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
                @endif
              @else
              <div class="text-center alert alert-danger">
                <p>No Completed Orders</p>
              </div>
              @endif
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->

    <!-- Create admin users Modal-->
    <div class="modal fade" id="createadminusers" tabindex="-1" role="dialog" aria-labelledby="createadminusers" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createadminusers">Create Users:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="{{url('/adminprofilesadmin')}}" enctype="multipart/form-data" method="post">
            <div class="modal-body pl-4 pr-4">
              {{csrf_field()}}
              <div class="row">
                <input type="text" name="name" placeholder="Username/Company Name" class="form-control col-lg-6" required />
                <input type="text" name="firstname" placeholder="Firstname" class="form-control col-lg-6" required />
              </div>
              <div class="row">
                <input type="text" name="lastname" placeholder="Lastname" class="form-control col-lg-6" required />
                <input type="email" name="email" placeholder="Email" class="form-control col-lg-6" required />
              </div>
              <div class="row">
                <input type="text" name="address" placeholder="Address" class="form-control col-lg-6" required />
                <input type="number" name="phone" placeholder="Phone" class="form-control col-lg-6" required />
              </div>
              <div class="row">
                <input type="text" name="country" placeholder="Country" class="form-control col-lg-6" required />
                <input type="text" name="state" placeholder="State" class="form-control col-lg-6" required />
              </div>
              <div class="row">
                <input type="text" name="city" placeholder="City" class="form-control col-lg-6" required />
                <input type="number" name="zip" placeholder="Zip" class="form-control col-lg-6" required />
              </div>
              <div class="row">
                <input type="password" name="password" placeholder="Password" class="form-control col-lg-12" required />
              </div>
              <div class="row">
                <textarea type="text" name="bio" placeholder="Bio" class="form-control col-lg-12" required /></textarea>
              </div>
              <input type="hidden" name="is_active" value="1">
              <input type="hidden" name="role_id" value="1">
              <input type="hidden" name="hash" name="hash" value="{{ rand('192831007', 9) }}">
              <input type="hidden" name="path" value="admin.png">
              <input type=hidden name="_method" value="POST">
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ######## -->








    <!-- Create guest users Modal-->
    <div class="modal fade" id="createguestusers" tabindex="-1" role="dialog" aria-labelledby="createguestusers" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createguestusers">Create Users:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="{{url('/adminprofilesguest')}}" enctype="multipart/form-data" method="post">
            <div class="modal-body pl-4 pr-4">
              {{csrf_field()}}
              <div class="row">
                <input type="text" name="name" placeholder="Username/Company Name" class="form-control col-lg-6" required />
                <input type="text" name="firstname" placeholder="Firstname" class="form-control col-lg-6" required />
              </div>
              <div class="row">
                <input type="text" name="lastname" placeholder="Lastname" class="form-control col-lg-6" required />
                <input type="email" name="email" placeholder="Email" class="form-control col-lg-6" required />
              </div>
              <div class="row">
                <input type="text" name="address" placeholder="Address" class="form-control col-lg-6" required />
                <input type="number" name="phone" placeholder="Phone" class="form-control col-lg-6" required />
              </div>
              <div class="row">
                <select name="gender" id="gender" class="form-control col-lg-4" required />
                  <option disabled>Choose gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
                <input type="text" name="country" placeholder="Country" class="form-control col-lg-4" required />
                <input type="text" name="state" placeholder="State" class="form-control col-lg-4" required />
              </div>
              <div class="row">
                <input type="text" name="city" placeholder="City" class="form-control col-lg-6" required />
                <input type="number" name="zip" placeholder="Zip" class="form-control col-lg-6" required />
              </div>
              <div class="row">
                <input type="password" name="password" placeholder="Password" class="form-control col-lg-12" required />
              </div>
              <div class="row">
                <textarea type="text" name="bio" placeholder="Bio" class="form-control col-lg-12" required /></textarea>
              </div>
              <input type="hidden" name="is_active" value="1">
              <input type="hidden" name="role_id" value="2">
              <input type="hidden" name="hash" name="hash" value="{{ rand('192831007', 9) }}">
              <input type="hidden" name="path" value="male.jpg">
              <input type=hidden name="_method" value="POST">
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ######## -->





    <!-- Mail Modal-->
    <div class="modal fade" id="sendmail" tabindex="-1" role="dialog" aria-labelledby="sendmail" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="sendmail">Send mail:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="{{url('/sendmail')}}" method="post">
                {{csrf_field()}}
                <input type="email" name="to" placeholder="To: example@example.com" class="form-control" required />
                <input type="text" name="subject" placeholder="Subject" class="form-control" required />
                <textarea type="text" name="body" id="msgbody" cols="30" rows="10" class="form-control" placeholder="Write mail here..." required /></textarea>
                <input type="submit" value="SEND MAIL" class="btn btn-dark form-control">
              </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->