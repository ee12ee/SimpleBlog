<!DOCTYPE html>
<html lang="en">
@include('admin.layout.partials._meta')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset('Dashboard/dist/img/logo/logo.jpg')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    @include('admin.layout.base._header')

    <!-- Main Sidebar Container -->
    @include('admin.layout.partials._sidebar')

    @yield('content')
    @yield('post')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.layout.base._footer')
</div>
<!-- ./wrapper -->
@include('admin.layout.partials._scripts')
</body>
</html>
