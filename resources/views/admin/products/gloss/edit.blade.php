@extends('layouts.app')
@section('contents')
@include('admin.layouts.navbar')

<div class="content-wrapper pt-5" id="page-top" style="height: 100vh;">
    <div class="container-fluid pt-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="#" class="text-dark">Gloss</a>
            </li>
            <li class="breadcrumb-item active">edit</li>
        </ol>
        <div class="card mb-3 wow fadeInUp">
            <div class="card-header">
                <i class="fa fa-table"></i> Products table</div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>Save edit</th>
                        <th>Delete</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>price</th>
                        <th>image</th>
                        <th>Created</th>
                        <th>Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($products = App\Gloss::latest()->get())
                        @foreach($products as $product)
                            <tr>
                            <td>
                                <form action="{{url('/deleteproduct')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="description" value="{{$product->description}}">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                            <form action="{{url('/editproduct')}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="path" value="{{$product->path}}">
                            <input type="hidden" name="description" value="{{$product->description}}">
                            <td>
                                <input type="submit" class="btn btn-primary" value="Save edit">                          
                            </td>
                            <td><input type="text" name="title" class="form-control" value="{{$product->title}}"></td>
                            <td><input type="text" disabled class="form-control" value="{{$product->description}}"></td>
                            <td><input type="text" name="price" class="form-control" value="{{$product->price}}"></td>
                            <td><img src="assets/images/products/{{$product->path}}" width="50" height="50" class="img-responsive" alt=""></td>
                            <td>{{$product->created_at->diffForHumans()}}</td>
                            <td>{{$product->updated_at->diffForHumans()}}</td>
                            </tr>
                                </form>  
                        @endforeach
                        @endif
                    </tbody>
                    </table>
                </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
            </div>


    </div>
</div>
@endsection