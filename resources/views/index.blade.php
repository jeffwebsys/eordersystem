    @extends('layouts.app')
    @section('title','Dashboard')

    @section('content')
    <section class="content">
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
    <div class="inner">

    @if($products->count() == 0)
    <p>N/A</p>
    @else
    <h3>{{ $products->count() }}</h3>
    @endif

    <p>Products</p>
    </div>
    <div class="icon">
    <i class="ion ion-bag"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
    <div class="inner">
    @if($category->count() == 0)
    <p>N/A</p>
    @else
    <h3>{{ $category->count() }}</h3>
    @endif

    <p>Categories</p>
    </div>
    <div class="icon">
    <i class="ion ion-stats-bars"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
    <div class="inner">
    <h3>{{ Auth::user()->count() }}</h3>

    <p>User Registrations</p>
    </div>
    <div class="icon">
    <i class="ion ion-person-add"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
    <div class="inner">
    <h3>65</h3>

    <p>Unique Visitors</p>
    </div>
    <div class="icon">
    <i class="ion ion-pie-graph"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    
    </div><!-- /.container-fluid -->
    </section>
    @endsection