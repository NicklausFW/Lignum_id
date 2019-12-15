@extends('layouts.admin')
@section('content')
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Messages From Costumer</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
        <div class="container-fluid">
        <table class="table table-bordered table-striped"> 
        <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Message</th>
        <th>action</th>
        </tr>
        @if(count($contact))
        @foreach($contact as $c)
        <tr> 
        <td>{{ $c->id }}</td>
        <td>{{ $c->firstname }} </td>
        <td>{{ $c->lastname }} </td>
        <td>{{ $c->email}} </td>
        <td>{{ $c->message }} </td>
        <td>
        <a href="javascript::void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
        <form action="{{route('contact.destroy',$c->id)}}" method="post"> 
        @method('DELETE')
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        </form>
        </td>
        </tr>
        @endforeach
        @else
        <tr><td colspan="8">No Contact Found</td></tr>
        @endif
        </table>
        </div>
        </section>
@endsection