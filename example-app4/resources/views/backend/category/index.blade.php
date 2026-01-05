@extends("backend.layouts.master")
@section("head")
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="uxliner"/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


</head>
@endsection("content")

@section("script")

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script>  
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/bizadmin.js"></script> 

<!-- Jquery Sparklines --> 
<script src="dist/plugins/jquery-sparklines/jquery.sparkline.min.js"></script> 
<script src="dist/plugins/jquery-sparklines/sparkline-int.js"></script> 

<!-- Morris JavaScript --> 
<script src="dist/plugins/raphael/raphael-min.js"></script> 
<script src="dist/plugins/morris/morris.js"></script> 
<script src="dist/plugins/functions/dashboard1.js"></script> 

<!-- for demo purposes --> 
<script src="dist/js/demo.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

@endsection


@section('content')
 
 <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Basic Tables</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> <a href="#">Tables</a></li>
        <li><i class="fa fa-angle-right"></i> Basic Tables</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="card">
      <div class="card-body">
        <h4 class="text-black">Category list <span class="pull-right"> <button class="btn btn-primary">New Category</button></span></h4>
       
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> Name</th>
                <th scope="col"> Action</th>
             
              </tr>
            </thead>
            @foreach ( $cats as  $cat)
              
          
            <tbody>
              <tr>
                <th scope="row">{{ $cat->id }}</th>
                <td>{{ $cat->name }}</td>
                <td>
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                </td>
             
              </tr>
        
           @endforeach
       
            </tbody>
          </table>
        </div>
       
   
    
    </div>
    <!-- /.content --> 
  </div>



@endsection