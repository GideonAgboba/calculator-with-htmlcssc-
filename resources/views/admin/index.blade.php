@extends('layouts.app')
@section('contents')
@extends('admin.layouts.navbar')



<div class="content-wrapper pt-5 mt-4" id="page-top">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#" class="text-dark">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- ICONS -->
      <div class="row wow fadeInUp">
        <div class="col-xl-3 col-sm-6 mb-3" style="height:20vh !important;">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">{{App\Message::all()->count()}} New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#msgsmodal">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3" style="height:20vh !important;">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">{{App\Order::all()->count()}} New Tasks</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#tasksmodal">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3" style="height:20vh !important;">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">{{App\Processing::all()->count()}} Proccessing</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#processingmodal">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3" style="height:20vh !important;">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">{{App\Complete::all()->count()}} Completed Orders</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#completedmodal">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>



<!--Emulsion DataTables Card-->
<div class="card mb-3 wow fadeInUp">
        <div class="card-header">
          <i class="fa fa-table"></i> Products table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>price</th>
                  <th>image</th>
                  <th>Created</th>
                  <th>Updated</th>
                </tr>
              </thead>
              <tbody>
                @if($products = App\EmulsionExterior::all())
                  @foreach($products as $product)
                    <tr>
                      <td>{{$product->title}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->price}}</td>
                      <td><img src="assets/images/products/{{$product->path}}" width="50" height="50" class="img-responsive" alt=""></td>
                      <td>{{$product->created_at->diffForHumans()}}</td>
                      <td>{{$product->updated_at->diffForHumans()}}</td>
                    </tr>
                  @endforeach
                @endif
                @if($products = App\EmulsionInterior::all())
                  @foreach($products as $product)
                    <tr>
                      <td>{{$product->title}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->price}}</td>
                      <td><img src="assets/images/products/{{$product->path}}" width="50" height="50" class="img-responsive" alt=""></td>
                      <td>{{$product->created_at->diffForHumans()}}</td>
                      <td>{{$product->updated_at->diffForHumans()}}</td>
                    </tr>
                  @endforeach
                @endif
                @if($products = App\TexcoteExterior::all())
                  @foreach($products as $product)
                    <tr>
                      <td>{{$product->title}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->price}}</td>
                      <td><img src="assets/images/products/{{$product->path}}" width="50" height="50" class="img-responsive" alt=""></td>
                      <td>{{$product->created_at->diffForHumans()}}</td>
                      <td>{{$product->updated_at->diffForHumans()}}</td>
                    </tr>
                  @endforeach
                @endif
                @if($products = App\TexcoteInterior::all())
                  @foreach($products as $product)
                    <tr>
                      <td>{{$product->title}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->price}}</td>
                      <td><img src="assets/images/products/{{$product->path}}" width="50" height="50" class="img-responsive" alt=""></td>
                      <td>{{$product->created_at->diffForHumans()}}</td>
                      <td>{{$product->updated_at->diffForHumans()}}</td>
                    </tr>
                  @endforeach
                @endif
                @if($products = App\Gloss::all())
                  @foreach($products as $product)
                    <tr>
                      <td>{{$product->title}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->price}}</td>
                      <td><img src="assets/images/products/{{$product->path}}" width="50" height="50" class="img-responsive" alt=""></td>
                      <td>{{$product->created_at->diffForHumans()}}</td>
                      <td>{{$product->updated_at->diffForHumans()}}</td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>

    <a class="scroll-to-top rounded-circle" href="#page-top">
      <i class="fa text-white fa-2x fa-angle-up"></i>
    </a>
</div>


@endsection