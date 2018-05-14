    <!-- Register Modal-->
    <div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registermodal">Register <i class="fa fa-address-card"></i></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username/Company</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required />
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-12">
                                <select id="gender" type="text" class="form-control" name="gender" required />
                                    <option></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div> 
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required />
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required />
                            </div>
                        </div>
                <div class="modal-footer">
                <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> -->
                <button type="submit" class="btn home_login_btn">Create Account</button>
                </div>

                </form>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ######## -->


        <!-- Register Modal-->
        <div class="modal fade" id="forgotpass" tabindex="-1" role="dialog" aria-labelledby="forgotpass" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="forgotpass">Reset Password <i class="fa fa-refresh"></i></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="/adminprofilesadmin" enctype="multipart/form-data" method="post">
            <div class="modal-body p-2 pl-4 pr-4">
                <div class="form-group">
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email address">
                </div>
                <button type="submit" class="btn btn-primary form-control">Reset Password</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ######## -->