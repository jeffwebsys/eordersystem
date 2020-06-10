@extends('layouts.app')
@section('title','Profile Info')

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
<form action="/profile/" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="image">Profile Image</label>
<input type="file" class="form-control-file" id="image" name="image">

@error('image')
<small class="text-danger">{{ $message }}</small>
@enderror
</div>
<div class="form-group">
<label for="fullname">Full Name</label>
<input type="text" id="fullname" name="fullname" class="form-control" rows="4" value="{{ old('fullname') }}">
@error('fullname')
<small class="text-danger">{{ $message }}</small>
@enderror
</div>

<div class="form-group">
<label for="position">Position</label>
<input type="text" id="position" name="position" class="form-control" rows="4" value="{{ old('position') }}">
@error('position')
<small class="text-danger">{{ $message }}</small>
@enderror
</div>

<div class="form-group">
<label for="education">Education</label>
<input type="text" id="education" name="education" class="form-control" rows="4" value="{{ old('education') }}">
@error('education')
<small class="text-danger">{{ $message }}</small>
@enderror
</div>
<div class="form-group">
<label for="location">Location</label>
<input type="text" id="location" name="location" class="form-control" rows="4" value="{{ old('location') }}">
@error('location')
<small class="text-danger">{{ $message }}</small>
@enderror
</div>
<div class="form-group">
<label for="skills">Skills</label>
<input type="text" id="skills" name="skills" class="form-control" rows="4" value="{{ old('skills') }}">
@error('skills')
<small class="text-danger">{{ $message }}</small>
@enderror
</div>
<div class="form-group">
<label for="notes">Notes</label>
<input type="text" id="notes" name="notes" class="form-control" rows="4" value="{{ old('notes') }}">
@error('notes')
<small class="text-danger">{{ $message }}</small>
@enderror
</div>



<button type="submit" class="btn btn-success mb-3">Add</button>
</div>

<!-- /.card-body -->

</div>
<!-- /.card -->

</form>

</div>



</section>
<!-- /.content -->
@endsection
