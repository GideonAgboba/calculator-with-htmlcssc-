<div class="row">
                    <div class="col-md-8">
                        <div class="card p-4">
                            <div class="header">
                                <h4 class="title">Update Profile</h4>
                            </div>
                            <div class="content">
                                <form class="" enctype="multipart/form-data" action="/profile/{{Auth::user()->id}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PUT">
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
                                                <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="" required />
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
                                                <input type="text" name="address" class="form-control" placeholder="Adress" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="number" name="phone" class="form-control" placeholder="Phone" value="" required />
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
                                                <input type="text" name="country" class="form-control" placeholder="Country" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" name="state" class="form-control" placeholder="State" value="" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" name="zip" class="form-control" placeholder="ZIP Code" required />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Profile Photo</label>
                                                <input type="file" name="path" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" name="bio" class="form-control" placeholder="Here can be your description" value="" required /></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn home_login_btn btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 card-user">
                            <div class="content text-center">
                                <div class="author">
                                     <a>
                                    <img class="avatar border-gray rounded-circle" src="uploads/{{Auth::user()->path}}" width='150' height='150' alt="..."/>

                                      <h4 class="title">{{Auth::user()->name}}<br />
                                         <small>{{Auth::user()->email}}</small>
                                      </h4>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
        </div>