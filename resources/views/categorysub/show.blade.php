    @extends('layouts.app') 
    @section('title','Subcategory Details')
    @section('content')
    <section class="content">

    <!-- Default box -->
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Category - Subcategory Detail</h3>

    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
    <i class="fas fa-minus"></i></button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
    <i class="fas fa-times"></i></button>
    </div>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
    <div class="row">
    
    <div class="col-12 col-sm-4">
    <div class="info-box bg-light">
    <div class="info-box-content">
    <span class="info-box-text text-center text-muted">Total Subcategories</span>
    <span class="info-box-number text-center text-muted mb-0">{{ $category->subcategories->count() }}</span>
    </div>
    </div>
    </div>

    </div>
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Subcategory table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table class="table table-bordered">
    <thead>                  
    <tr>
    <th>ID</th>
    <th>Sub Name</th>
    <th>Description</th>
    <th>Status</th>
    <th>Total Products</th>
    </tr>
    </thead>
    <tbody>
    @foreach($category->subcategories as $catsub)
    <tr>
    <td>{{ $catsub->id }}</td>
    <td>{{ $catsub->name }}</td>
    <td>{{ $catsub->description }}</td>
    
    <td>{{ $catsub->status }}</td> 
    <td>{{ $catsub->products->count() }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    <!-- /.card-body -->
   
    </div>
    <!-- /.card -->

    </div>
    </div>

    </div>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
    @endsection