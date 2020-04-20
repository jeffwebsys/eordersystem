            @extends('layouts.app')
            @section('title','Edit Subcategories')

            @section('content')
            <section class="content">
            <div class="row d-flex">
            <div class="col-md-6">
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Subcategory Edit</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
            <form action="/subcategory/{{ $subcategory->id }}" method="post">
            @method('patch')
            @csrf
            <div class="form-group">
            <label for="name">SubCategory Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') ?? $subcategory->name }}">
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group">
            <label for="description">SubCategory Description</label>
            <input type="text" id="description" name="description" class="form-control" rows="4" value="{{ old('description') ?? $subcategory->description }}">
            @error('description')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group">
            <label for="status">Move SubCategory To.</label>
            <select class="form-control custom-select" id="category_id" name="category_id">
            <option selected disabled>Select one</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
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

            {{-- buttons --}}

            <div class="d-flex">
            <button type="submit" class="btn btn-success mr-2">Update</button>
            <a href="/subcategory" class="btn btn-dark">Go back</a>
            </div>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->    
            </form>      

            </div>
            </section>
            <!-- /.content -->
            @endsection
