		@extends('layouts.app')
		@section('content')



		<div class="container">

		<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Orders</h1>

		<hr class="mt-2 mb-2">

		<div class="row">





		@foreach($product as $prod)
		<div class="col-lg-3 col-md-2 col-6">
		<a href="{{ asset('storage')}}/{{ $prod->image }}" class="d-block mb-4 h-50">
		<img class="img-fluid img-thumbnail" src="{{ asset('storage')}}/{{ $prod->image }}" style="max-height: 200px;">
		</a>
		<p class="mt-5 pt-2 ml-1" style="font-family: Arial; font-size: 13px; font-weight: bold;">

		Name: {{ $prod->name }}<hr>
		Price: {{ $prod->price }}
		Description: {{ $prod->description }}



		</p>
		
		
		</div>

		@endforeach
		</div>

		</div>



		@endsection