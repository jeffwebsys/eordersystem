            @extends('layouts.app')
            @section('title','Edit Categories')

            @section('content')
            <section class="content">
            <div class="row d-flex">
            <div class="col-md-12">
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
            <form action="/category/{{ $category->id }}" method="post">
            @method('patch')
            @csrf
            <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') ?? $category->name }}">
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group">
            <label for="description">Category Description</label>
            <input type="text" id="description" name="description" class="form-control" rows="4" value="{{ old('description') ?? $category->description }}">
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

            {{-- buttons --}}

            <div class="d-flex">
            <button type="submit" class="btn btn-success mr-2">Update</button>
            <a href="/category" class="btn btn-dark">Go back</a>
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
