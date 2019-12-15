@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Products</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
      <p> <a href="/lignum/public/pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
          <a href="{{route('admin.products.create')}}" class="btn btn-primary">Add New Products</a> 
      </p>
      <table class="table table-bordered table-striped"> 
      <tr>
      <th>ID</th>
      <th>product_name</th>
      <th>price</th>
      <th>promo</th>
      <th>description</th>
      <th>image</th>
      <th>action</th>
      </tr>
      @if(count($products))
      @foreach($products as $c)
      <tr> 
      <td>{{ $c->id }}</td>
      <td>{{ $c->product_name }} </td>
      <td>{{ $c->price }} </td>
      <td>{{ $c->promo}} </td>
      <td>{{ $c->description }} </td>
      <td><img src="<?php echo asset('img/product_photo/'.$c->image)?>" style="width:150px;"></img></td>
      <td>
      <a href="{{route('admin.products.edit',$c->id)}}" class="btn btn-info">Edit</a>
      <a href="javascript::void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
      <form action="{{route('admin.products.destroy',$c->id)}}" method="post"> 
      @method('DELETE')
      <input type="hidden" name="_token" value="{{ csrf_token()}}">
      </form>
      </td>
      </tr>
      @endforeach
      @else
      <tr><td colspan="8">No Product Found</td></tr>
      @endif
      </table>
      </div>
      </section>
@endsection