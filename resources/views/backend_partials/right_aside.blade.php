<div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('backend_partials.header')
        <!-- /#header -->
        <!-- Content -->
        @yield('content')
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        @include('backend_partials.footer')
        <!-- /.site-footer -->
    </div>