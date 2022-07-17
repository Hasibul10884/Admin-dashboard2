@extends('backend.master') 
@section('backend_content')
<h1>Create New Product</h1>
<form action="{{route('product.store')}}" method="POST">
    @csrf
    <label for="">Product Name *</label>
    <input type="text" class="form-control" name="name" required>
    <label for="">Product Price *</label>
    <input type="number" class="form-control" name="price" required min="1">
    <label for="">Product Qty *</label>
    <input type="number" class="form-control" name="qty" required min="1">
    <label for="">Product Description (optional)</label>
    <input type="text" class="form-control" name="description">
    <label for="">Product Photo</label>
    <input type="file" class="form-control" name="photo">



    <button type="submit" class="btn btn-success">Submit</button>

</form>

@endsection