@extends('layouts.admin.admin')
@section('content')

<div class="container">
  <h2>Create New Category</h2>
  <form action="{{route('create')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
      @error('name')
      <span class="text-danger">{{$message}}</span>
      @enderror
        </div>
      <button type="submit" name="submit" class="btn btn-success">Submit</button>
  </form>
</div>

<div class="container">
  <div class="row mt-4">
    <h2>Category</h2>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category as $categories)
        <tr>
          <th scope="row">{{($categories->category_id)}}</th>
          <td>{{($categories->name)}}</td>
          <td>
            <a href="{{url('/admin/category/Edit/'.$categories->category_id)}}" class="btn btn-success">
              <i class="fas fa-edit"></i></a></a>
            <a href="{{url('/admin/category/Delete/'.$categories->category_id)}}" class="btn btn-danger">
              <i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>


@endsection