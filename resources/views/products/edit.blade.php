            @extends('layouts.app')
            @section('title','Edit Products')

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
            <form action="/product/{{ $product->id }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') ?? $product->name }}">
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group">
            <label for="description">Product Description</label>
            <input type="text" id="description" name="description" class="form-control" rows="4" value="{{ old('description') ?? $product->description }}">
            @error('description')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group">
             <label for="image">Product Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <label for="image">Current Image</label>
            <img src="{{ asset('storage') }}/{{ $product->image }}" class="img-thumbnail" style="max-height: 50px">
            @error('image')
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
            @if($subcategory->count() == 0)
            <p>No Subcategories Yet</p>
            @else
            <select class="form-control custom-select" id="subcategory_id" name="subcategory_id">
            <option selected disabled>Select one</option>
            @foreach($subcategory as $subcategories)
            <option value="{{ $subcategories->id }}">{{ $subcategories->name }}</option>
            @endforeach
            </select>
            @endif
            @error('subcategory_id')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
            <div class="form-group col-2">
            <label for="price">Price</label>
            <input type="text" id="price"class="form-control" name="price" value="{{ old('price') ?? $product->price}}">

            </div>
            @error('price')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            <div class="form-group col-2">
            <label for="quantity">QTY</label>
            <input type="text" id="quantity" class="form-control" name="quantity" value="{{ old('quantity') ?? $product->quantity }}">

            </div>
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
            @enderror

            
              {{-- buttons --}}

            <div class="d-flex">
            <button type="submit" class="btn btn-success mr-2">Update</button>
            <a href="/product" class="btn btn-dark">Go back</a>
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
