		@extends('layouts.app')

		@section('title','Sub Categories')
		@section('active','active')


		@section('content')

		<section class="content">
		<div class="row">
		<div class="col-12">


		<div class="card">
		<div class="card-header">
		<h3 class="card-title">Sub Category Data</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
		<thead class="text-center">
		<tr>
		<th>ID</th>
		<th>SubCategory Name</th>
		<th>SubCategory Description</th>
		<th>Category</th>
		<th>Products Available</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($subcategories as $subcategory)
		<tr class="text-center">

		<td>{{ $subcategory->id }}</td>
		<td>{{ $subcategory->name }}</td>
		<td>{{ $subcategory->description }}</td>
		<td>{{ $subcategory->category->name }}</td>
		<td>{{ $subcategory->products->count() }}</td>
		@if($subcategory->status == 1)
		<td> <span class="badge badge-danger">On Hold</span> </td>
		@elseif($subcategory->status == 2)
		<td> <span class="badge badge-warning">Cancelled</span> </td>
		@else
		<td> <span class="badge badge-success">Available</span> </td>
		@endif
		<td class="d-flex justify-content-center"><a href="/subcategory/edit/{{ $subcategory->id }}" class="btn btn-dark"><i class="fa fa-edit"></i></a>  |  <form action="/subcategory/{{ $subcategory->id }}" method="post">
			@csrf
			@method('delete')

			<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></td></form>

		</tr>
		@endforeach

		</tbody>
		{{-- <tfoot>
		<tr class="text-center">
		<th>ID</th>
		<th>Subcategory Name</th>
		<th>Subcategory Description</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
		</tfoot> --}}
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