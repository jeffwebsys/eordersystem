    @extends('layouts.app')
    @section('title','Add Sub Categories')

    @section('content')
    <section class="content">
    <div class="row d-flex">
    <div class="col-md-6">
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">General</h3>

    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
    <i class="fas fa-minus"></i></button>
    </div>
    </div>
    <div class="card-body">
    <form action="/subcategory/" method="post">
    @csrf
    <div class="form-group">
    <label for="name">SubCategory Name</label>
    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
     @error('name')
      <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group">
    <label for="description">SubCategory Description</label>
    <input type="text" id="description" name="description" class="form-control" rows="4" value="{{ old('description') }}">
     @error('description')
      <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-group">
    <label for="status">Select Category</label>
    <select class="form-control custom-select" id="category_id" name="category_id">
   
    <option selected disabled>Select Category</option>
     @foreach($category as $categories)
    <option value="{{ $categories->id }}">{{ $categories->name }}</option>
    @endforeach
    </select>
     @error('status')
      <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-group">
    <label for="status">Status</label>
    <select class="form-control custom-select" id="status" name="status">
    <option selected disabled>Select one</option>
    <option value="1">On Hold</option>
    <option value="2">Canceled</option>
    <option value="3">Success</option>
    </select>
     @error('status')
      <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    
   
     <button type="submit" class="btn btn-success mb-1">Add</button>
    </div>

    <!-- /.card-body -->
    
    </div>
    <!-- /.card -->
   
    </form>
    
    </div>
    
    
    
    </section>
    <!-- /.content -->
    @endsection
