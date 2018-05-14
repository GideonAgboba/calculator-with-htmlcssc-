@include('layouts.app')
@extends('admin.layouts.navbar')
<div class="content-wrapper pt-5 mt-4">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#" class="text-dark">Profiles</a>
        </li>
        <li class="breadcrumb-item active">Guest Users</li>
      </ol>

      <!-- USERS -->
      <!-- Example DataTables Card-->
      <div class="row ml-1">
          <button class="text-white btn-primary p-4 mb-3 btn-sm" data-toggle="modal" data-target="#createguestusers">
            <i class="fa fa-user"></i> Create Guest User
          </button>
          @if(!empty(session()->get('createmsg')))
            <div class="alert alert-success text-center">
              <p class='mt-3'>{{session()->get('createmsg')}} <i class="fa fa-check-circle"></i></p>
            </div>
          @elseif(!empty(session()->get('deletemsg')))
            <div class="alert alert-danger text-center">
              <p class='mt-3'>{{session()->get('deletemsg')}} <i class="fa fa-check-circle"></i></p>
            </div>
          @elseif(!empty(session()->get('updatemsg')))
            <div class="alert alert-success text-center">
              <p class='mt-3'>{{session()->get('updatemsg')}} <i class="fa fa-check-circle"></i></p>
            </div>
          @endif
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> User Tables
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Edit</th>
                  <th>Delete</th>
                  <th>Userame</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Country</th>
                  <th>State</th>
                  <th>City</th>
                  <th>Zip</th>
                  <th>Bio</th>
                  <th>Image</th>
                  <th>Hash</th>
                  <th>Role</th>
                  <th>Created</th>
                  <th>Updated</th>
                </tr>
              </thead>
                @if($users = App\User::where('role_id','=','2')->get())
                    @foreach($users as $user)
                    <tr>
                        <td>
                          <button class="text-white btn-primary m-0 p-3 btn-sm" data-toggle="modal" data-target="#edit{{$user->id}}">
                            <i class="fa fa-edit"></i>
                          </button>
                          
                          <!-- Edit admin users Modal-->
                          <div class="modal fade" id="edit{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="edit{{$user->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="edit{{$user->id}}">Edit User: {{strtoupper($user->username)}}</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <form action="/adminprofilesguest/{{$user->id}}" enctype="multipart/form-data" method="post">
                                  <div class="modal-body pl-4 pr-4">
                                    {{csrf_field()}}
                                    <div class="row">
                                      <input type="text" name="name" placeholder="Username / Company" class="form-control col-lg-6" value="{{$user->name}}" required />
                                      <input type="text" name="firstname" placeholder="Firstname" class="form-control col-lg-6" value="{{$user->firstname}}" required />
                                    </div>
                                    <div class="row">
                                      <input type="text" name="lastname" placeholder="Lastname" class="form-control col-lg-6" value="{{$user->lastname}}" required />
                                      <input type="email" name="email" placeholder="Email" class="form-control col-lg-6" value="{{$user->email}}" required />
                                    </div>
                                    <div class="row">
                                      <input type="text" name="address" placeholder="Address" class="form-control col-lg-6" value="{{$user->address}}" required />
                                      <input type="number" name="phone" placeholder="Phone" class="form-control col-lg-6" value="{{$user->phone}}" required />
                                    </div>
                                    <div class="row">
                                      <input type="text" name="country" placeholder="Country" class="form-control col-lg-6" value="{{$user->country}}" required />
                                      <input type="text" name="state" placeholder="State" class="form-control col-lg-6" value="{{$user->state}}" required />
                                    </div>
                                    <div class="row">
                                      <input type="text" name="city" placeholder="City" class="form-control col-lg-6" value="{{$user->city}}" required />
                                      <input type="text" name="zip" placeholder="Zip" class="form-control col-lg-6" value="{{$user->zip}}" required />
                                    </div>
                                    <div class="row">
                                      <input type="hidden" name="password" placeholder="Password" class="form-control col-lg-6" value="{{$user->password}}" required />
                                    </div>
                                    <div class="row">
                                      <textarea type="text" name="bio" placeholder="Bio" class="form-control col-lg-12" required />{{$user->bio}}</textarea>
                                    </div>
                                    <input type="hidden" name="role_id" value="2">
                                    <input type="hidden" name="hash" name="hash" value="{{ rand('9786755466', 5) }}">
                                    <input type="hidden" name="path" value="test.png">
                                    <input type=hidden name="_method" value="PUT">
                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Update</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- ######## -->
                        </td>
                        <td>
                          <button class="text-white btn-danger m-0 pt-3 pb-3 pl-4 pr-4 btn-sm" data-toggle="modal" data-target="#delete{{$user->id}}">
                            <i class="fa fa-trash"></i>
                          </button>
                          
                          <!-- Delete Modal-->
                          <div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="delete{{$user->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="delete{{$user->id}}">Delete?</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div class="modal-body">Are you sure you want to DELETE {{strtoupper($user->username)}}</div>
                                <div class="modal-footer">
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                  <form class="" style="border-style: none;" action="/adminprofilesguest/{{$user->id}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn text-white btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- ######## -->
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->country}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->zip}}</td>
                        <td>{{$user->bio}}</td>
                        <td>{{$user->path}}</td>
                        <td>{{$user->hash}}</td>
                        <td>Guest</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      <!-- ## -->
    </div>
</div>