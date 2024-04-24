@extends('layout')
@include('headers')
@section('title')
<title>Home</title>
@endsection

@section('content')
<div class="container-fluid py-3">
   
        <div class="row">
            <div class="col-lg-8 position-relative ">
                @include('vendor.list')
            </div>
            <div class="col-lg-4 pt-4 pt-lg-0">
                @include('vendor.sidebar')
            </div>
        </div>
  
</div>
@endsection