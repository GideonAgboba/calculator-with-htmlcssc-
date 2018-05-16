@extends('layouts.app')
@section('contents')
@include('admin.layouts.navbar')

<div class="content-wrapper pt-5" id="page-top" style="height: 100vh;">
    <div class="container-fluid pt-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="#" class="text-dark">Texcote</a>
            </li>
            <li class="breadcrumb-item active">texcote-exterior</li>
            <li class="breadcrumb-item active">create</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <h5>Add a product</h5>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{url('/createproduct')}}" method="post">
                    @if(!empty(session()->get('createmsg')))
                        <div class="alert alert-success pt-4 text-center">
                            <p>{{session()->get('createmsg')}}</p>
                        </div>
                    @elseif(!empty(session()->get('errormsg')))
                        <div class="alert alert-danger pt-4 text-center">
                            <p>{{session()->get('errormsg')}}</p>
                        </div>
                    @endif
                    {{csrf_field()}}
                    <input type="hidden" name="description" value="Texcote-exterior">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <input type="text" name="title" placeholder="Title" class="form-control" required />
                            </div>
                            <div class="col-lg-3">
                                <input type="text" placeholder="Texcote-exterior" disabled  class="form-control" required />
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input type="number" name="price" placeholder="Price" class="form-control" required />
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h5>Image:</h5>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="file" id="path" name="path" class="form-control" style="margin-top: -3px;" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <button type="submit" class="form-control btn text-white btn-success"><i class="fa fa-check"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
            
            </div>
        </div>





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




    </div>
</div>
@endsection