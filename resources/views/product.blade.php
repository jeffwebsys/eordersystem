@extends('layouts.app')

@section('title','Products')
@section('active','active')


@section('content')

<section class="content">
<div class="row">
<div class="col-12">


<div class="card">
<div class="card-header">
<h3 class="card-title">Product Data</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead class="text-center">
<tr>
<th>ID</th>
<th>Item Name</th>
<th>Item Description</th>
<th>Price</th>
<th>Quantity</th>
<th>Status</th>
<th>Subcategory</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr class="text-center">

<td>{{ $product->id }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->description }}</td>
<td>{{ $product->price }}</td>
<td>{{ $product->quantity }}</td>
@if($product->status == 1)
<td> <span class="badge badge-danger">On Hold</span> </td>
@elseif($product->status == 2)
<td> <span class="badge badge-warning">Cancelled</span> </td>
@else
<td> <span class="badge badge-success">Available</span> </td>
@endif
<td>{{ $product->subcategory->name }}</td>
<td class="d-flex justify-content-center"><a href="/product/edit/{{ $product->id }}" class="btn btn-dark"><i class="fa fa-edit"></i></a>  |  <form action="/product/{{ $product->id }}" method="post">
@csrf
@method('delete')

<button type="submit" class="btn btn-danger" id="add"><i class="fa fa-trash"></i></button></td></form>

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