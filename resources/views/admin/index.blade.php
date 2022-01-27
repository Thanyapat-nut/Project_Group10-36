@extends('layouts.admin.admin')
@section('content')

<div class="container">
    <div class="row mt-4">
      <h2>Product</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($product as $products)
            <tr>
              <th scope="row">{{$products->id_product}}</th>
              <td>{{$products->name}}</td>
              <td><img src="{{asset('admin/images/'.$products->image)}}" alt="" style="width:100px"></td>
              <td>{{$products->category->name}}</td>
              <td>{{number_format($products->price)}} ฿</td>
              <td>
                <a href="{{url('/admin/product/edit/'.$products->id_product)}}" class="btn btn-success">
                  <i class="fas fa-edit"></i></a>
                <a href="{{url('/admin/product/delete/'.$products->id_product)}}" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>
</div>

@endsection