@extends('layouts.master')

@section('title')
    Update
@endsection

@section('contenu')
    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                    
                @endforeach
            </ul>
        </div>
    @endif
      <form action="{{url('updateproduct',[$product->id])}}" method="POST" class="form-horizontal">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Product</label>
            <input type="text" name="product_name" value="{{$product->product_name}}" placeholder="Product Name" class="form-control" required>

        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="number" name="product_price" value="{{$product->product_price}}" placeholder="Product Price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Product description</label>
            <textarea name="product_description"  cols="30" rows="10" class="form-control" required>{{$product->product_description}}</textarea>
        </div>
        <input type="submit" value="Update Product" class="btn btn-primary">
      </form>
@endsection