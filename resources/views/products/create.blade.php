    @extends('layouts.app')
    @section('title','Project Add')

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
    <form action="/product/" method="post">
    @csrf
    <div class="form-group">
    <label for="name">Product Name</label>
    @if($subcategory->count() == 0)
    <p>No Subcategories Added</p>
    @else
    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
     @error('name')
      <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group">
    <label for="description">Product Description</label>
    <input type="text" id="description" name="description" class="form-control" rows="4" value="{{ old('description') }}">
     @error('description')
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
    <div class="form-group">
    <label for="status">subcategories</label>
    
    <select class="form-control custom-select" id="subcategory_id" name="subcategory_id">
    <option selected disabled>Select one</option>
    @foreach($subcategory as $subcategories)
    <option value="{{ $subcategories->id }}">{{ $subcategories->name }}</option>
    @endforeach
    </select>
     @error('subcategory_id')
      <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group col-2">
    <label for="price">Price</label>
    <input type="text" id="price"class="form-control" name="price" value="{{ old('price') }}">
     
    </div>
    @error('price')
      <small class="text-danger">{{ $message }}</small>
      @enderror
    <div class="form-group col-2">
    <label for="quantity">QTY</label>
    <input type="text" id="quantity" class="form-control" name="quantity" value="{{ old('quantity') }}">
     
    </div>
    @error('quantity')
      <small class="text-danger">{{ $message }}</small>
      @enderror
       <button type="submit" class="btn btn-success mb-3">Add</button>
    </div>

    <!-- /.card-body -->
    
    </div>
    <!-- /.card -->

    </form>
    
    </div>
    
    
     @endif
    </section>

    <!-- /.content -->
    @endsection
