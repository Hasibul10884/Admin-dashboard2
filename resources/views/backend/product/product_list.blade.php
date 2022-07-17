@extends('backend.master') 
@section('backend_content')

<a href="{{route('add.product')}}" class="btn btn-success">Create</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Photo</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>

      </tr>

    </tbody>
  </table>

 @endsection