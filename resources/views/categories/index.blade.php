		@extends('layouts.app')

		@section('title','Categories')
		@section('active','active')


		@section('content')

		<section class="content">
		<div class="row">
		<div class="col-12">


		<div class="card">
		<div class="card-header">
		<h3 class="card-title">Category Data</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
		<thead class="text-center">
		<tr>
		<th>ID</th>
		<th>Category Name</th>
		<th>Category Description</th>
		<th>View Sub-Categories</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($categories as $category)
		<tr class="text-center">

		<td>{{ $category->id }}</td>
		<td>{{ $category->name }}</td>
		<td>{{ $category->description }}</td>
		@if($category->subcategories->count() == 0)
		<td><span class="badge badge-danger">Not Available</span></td>
		@else
		<td><a href="/category/subcategory/{{ $category->id }}"><span class="badge badge-success">View - {{ $category->subcategories->count() }}</span></a></td>
		@endif
		
		@if($category->status == 1)
		<td> <span class="badge badge-danger">On Hold</span> </td>
		@elseif($category->status == 2)
		<td> <span class="badge badge-warning">Cancelled</span> </td>
		@else
		<td> <span class="badge badge-success">Available</span> </td>
		@endif
		<td class="d-flex justify-content-center"><a href="/category/edit/{{ $category->id }}" class="btn-xs btn-dark"><i class="fa fa-edit"></i></a>  |  <form action="/category/{{ $category->id }}" method="post">
			@csrf
			@method('delete')

			<button type="submit" class="btn-xs btn-danger"><i class="fa fa-trash"></i></button></td></form>

		</tr>
		@endforeach

		</tbody>
		
		</table>
		</div>
		<!-- /.card-body -->
		</div>
		<!-- /.card -->
		</div>
		<!-- /.col -->
		</div>
		<!-- /.row -->
		</section>
		@endsection