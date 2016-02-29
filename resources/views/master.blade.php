<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<!-- Template taken from  Almsaeed Studio Open Source AdminLTE project -->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="lib/font-awesome-4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="lib/ionicons-2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="dist/css/padmin.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-yellow.min.css">
  
  <link rel="stylesheet" href="file-upload/css/drop.css" >

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-yellow sidebar-mini">


<!-- Modal Start-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="box box-primary">
            <div class="box-header with-border">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3 class="box-title"> @yield('modal-header')</h3>
            </div>
            <!-- /.box-header -->
            

            
            <!-- form start -->
            <form role="form"  id="upload_form" enctype="multipart/form-data" method="post" action="upload.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input class="form-control" id="exampleInputEmail1" placeholder="Title" type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea class="form-control" id="Description" placeholder="Description" ></textarea>
                </div>
        <div class="well">
          <div class="drop">Drop files here
          </div>
          <p><font size="4px" color="grey">or Select File <input type="file" name="file" id="file"></font></p>
          
          <br>
          <div class="progress progress-striped active">
            <div class="progress-bar" role="progressbar" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100" style="width: 0%">
              <span class="sr-only">0% Complete</span>
            </div>
          </div>
          <input type="hidden" id="uploadedFile" name="file" ></input>
          <div class="image"></div>
        </div>
        
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" onclick="myFunction()" class="btn btn-primary" id="saved">Save changes</button>
              </div>
            </form>

      </div>
      </div>
    </div>
  </div>
</div>

<!-- End of Modal -->

<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b></b> Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
           
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                
                  Alexander Pierce - Web Developer
                  <small>EMail@email.com</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li <?php if(isset($this->page) && $this->page == 'dashboard') echo 'class="active"'; ?> ><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li <?php if(isset($this->page) && $this->page == 'items') echo 'class="active"'; ?> class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Items</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li ><a href="items/news"><i class="fa fa-check-circle-o"></i>News</a></li>
            <li ><a href="items/events"><i class="fa fa-check-circle-o"></i>Events</a></li>
            <li ><a href="items/others"><i class="fa fa-check-circle-o"></i>Others</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Items
        <small>  @yield('description')</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Items</a></li>
        <li class="active">  @yield('title')</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      @yield('content')

      <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">@yield('title') Items</h3>

              <div class="box-tools pull-right">
              
                 <ul id="paginate" class="pagination pagination-sm inline">

                 </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="todo-list">
              
                <li class="post">                  
                  <!-- todo text -->
                  <span class="text">hffgfhffjgfj
                  <!-- drag handle -->
                  <small class="label label-info"><i class="fa fa-clock-o"></i>sdsf</small>
                  <small class="label label-primary"><i class="fa fa-download"></i> Download</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                   <a href=""> <i class="fa fa-edit"></i></a>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>

              
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
            
              <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>
          <!-- /.box -->
    


    </section>

   </div>
  <!-- /.content-wrapper -->
 <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Pansoi</a>.</strong> All rights reserved.
  </footer>
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script src="dist/js/padmin.js"></script>

<!-- DataTables -->
<script src="bootstrap/js/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugins/pagination/paginate.js"></script>



<!-- File Upload -->
<script src="plugins/file-uploader/js/file-upload.js">
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>