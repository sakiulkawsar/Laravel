<!DOCTYPE html>
<html lang="en">
    @yield("head");

<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
    <!-- header will include here -->
     @include("backend.layouts.header");
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <!-- sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="dist/img/img1.jpg" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-envelope"></i></a> <a href="#"><i class="fa fa-gear"></i></a> <a href="#"><i class="fa fa-power-off"></i></a> </div>
      </div>
      
      <!-- sidebar menu shows here -->
       @include("backend.layouts.sidebar");
     
    </div>
    <!-- /.sidebar --> 
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
   @yield("content");
 
  <!-- /.content-wrapper -->
   <!-- Here we will show the footer -->
@include("backend.layouts.footer");
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"> 
    <!-- Tab panes -->
    <div class="tab-content"> 
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
      <!-- /.tab-pane --> 
    </div>
  </aside>
  <!-- /.control-sidebar --> 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper --> 

@yield("script");
<!--End of Tawk.to Script-->
</body>
</html>
