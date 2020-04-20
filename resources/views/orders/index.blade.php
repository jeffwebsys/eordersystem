@extends('layouts.app')
@section('content')


<section class="content">
<div class="container-fluid">
<div class="row">
<!-- left column -->
<div class="col-md-6">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Bible App</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form role="form" action="/bible/" method="post">
@csrf
<div class="card-body">
<div class="form-group">
<label for="bible">Enter Verse</label>
<input type="text" class="form-control" id="bible" name="bible" placeholder="Example John 3:16" required="">
</div>

@foreach($data as $item)

<{{-- h1 class="text-dark">Cases <span class="badge badge-danger">{{ $data['infected'] }} </span></h1>
<h1 class="text-dark">Recovered <span class="badge badge-success">{{ $data['recovered'] }}</span> </h1> --}}


<p class="font-weight-lighter">You searched for: "{{ $data['reference'] }} "</p>
<p class="font-weight-lighter">Book of {{ $item['book_name'] }} Chapter: {{ $item['chapter'] }} Verse: {{ $item['verse'] }}</p>
<p class="font-weight-lighter" style="color: red;">" {{ $item['text'] }} "</p>
<h5 class="font-weight-normal">Translation: {{ $data['translation_name'] }}</h5>
@endforeach

</div>
<!-- /.card-body -->

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
<!-- /.card -->



</div>
</div>
</div>
</section>

@endsection