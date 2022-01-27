@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h2><Strong>My Profile</Strong></h2></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><Strong>Name :</Strong> {{Auth::user()->name}}</p>
                    <p><Strong>Email :</Strong> {{Auth::user()->email}}</p>
                    <p><Strong>Address :</Strong> {{Auth::user()->address}}</p>
                    <p><Strong>Phone :</Strong> {{Auth::user()->phone}}</p>
                    <p><Strong>created_at :</Strong> {{Auth::user()->created_at}}</p>
                    {{-- ปุ่ม --}}
                    @if (Auth::user()->checkIsAdmin())
                    <a href="{{route('index')}}" class="btn btn-primary">Product</a>
                    @endif
                    
                    <a href="{{route('page')}}"class="btn btn-success">Home</a>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
