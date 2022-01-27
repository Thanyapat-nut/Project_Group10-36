@extends('layouts.admin.admin')
@section('content')
<div class="container">
    <h2>Create New Product</h2>
    <form action="{{route('product.c')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control"  name="image" id="image" required>
            @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="category">Category</label>
            <input type="category" class="form-control" name="category" id="category"placeholder="Enter Category">
            @error('category')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div> --}}


            <div class="form-group">
              <label>Category</label>
              <select class="form-control" name="category">
                  @foreach ($categories as $category)
                <option value="{{$category->category_id}}">{{$category->name}}</option>
                  @endforeach

              </select>
            </div>

        <div class="form-group">
            <label for="type">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price">
            @error('price')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection