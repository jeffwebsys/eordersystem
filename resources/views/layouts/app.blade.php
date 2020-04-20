
<!DOCTYPE html>
<html>
@include('layouts.partials.upper-links')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
@include('layouts.nav')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
@include('layouts.breadcrumbs')
<!-- /.content-header -->

<!-- Main content -->
@yield('content')
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('layouts.footer')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.partials.lower-links')
</body>
</html>
