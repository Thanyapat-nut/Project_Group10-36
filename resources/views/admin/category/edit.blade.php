@extends('layouts.admin.admin')
@section('content')

<div class="container">
  <h2>Edit Category</h2>
  <form action="{{url('/admin/category/Update/'.$category->category_id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
      @error('name')
      <span class="text-danger">{{$message}}</span>
      @enderror
        </div>
      <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection