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
      @foreach($products as $key=>$data)
      <tr>
          <td>{{$key+1}}</td>  
          <td>{{$data->name}}</td>  
          <td>{{$data->description}}</td>
          <td>{{$data->photo}}</td> 
          <td>{{$data->price}}</td>
          <td>{{$data->quantity}}</td>   
      </tr>
      @endforeach
    </tbody>
  </table>

 @endsection