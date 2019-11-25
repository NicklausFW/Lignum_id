@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
     <form method="post" action="{{ route('admin.products.update',$product->id )}}" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     
     <div class="form-group"> 
     <div class="row"> 
     <label class ="col-md-3">Product name</label>
     <div class="col-md-6"><input type="text" name="product_name" class="form-control" value="{{$product->product_name}}"> </div> 
     &nbsp;
     <label class ="col-md-3">Price</label>
     <div class="col-md-6"><input type="text" name="price" class="form-control" value="{{$product->price}}"> </div> 
     &nbsp;
     <label class ="col-md-3">Promo</label>
     <div class="col-md-6"><input type="text" name="promo" class="form-control" value="{{$product->promo}}"> </div> 
     &nbsp;
     <label class ="col-md-3">description</label>
     <div class="col-md-6"><input type="text" name="description" class="form-control" value="{{$product->description}}"> </div> 
     &nbsp;
     <label class ="col-md-3">image</label>
     <div class="col-md-9"><input type="file" name="image"> </div>   
     <div class="clearfix"></div> 
     @if($product->image)
     <div class="col-md-3"></div>    
     <div class="col-md-9"> 
     <img src="{{ asset('storage/products/'.$product->image) }}" style="width:150px;">
     </div>
     <div class="clearfix"></div>
     @endif
     </div>
     
     </div>
     <div class="form-group"> </div>
     <input type="submit" class="btn btn-info" value="Save">
     </form>
      </div>
      </section>
      
@endsection