<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MCDRRMO | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
  
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
  
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="images/logos/logo.png" alt="MCDRRMO Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MCDRRMO</span>
    </a>

    

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Management
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-user nav-icon"></i>
                    <p>Users</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a data-toggle="modal" data-target=".bd-example-modal-lg" class="nav-link">
                    <i class="far fa-registered nav-icon"></i>
                    <p>Register</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Reports
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/status" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Evacuation</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Relief</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/details" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Accidents</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/infovac" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Others</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Submit Data
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Road Conditions</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Weather Warnings</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Announcement</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit Information</p>
                  </a>
                </li>
              </ul>
            </li>
            
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @include('inc.messages')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Evacuation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Evacuation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @include('inc.messages')
        <div class="row">
            <div class="col-12">
              
                <!-- /.card-body -->
            
              <!-- /.card -->
             
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Evacuation Center Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" name="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Center Name</th>
                      <th># Person in Center</th>
                      <th>Remarks</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                   <tbody>
                       @foreach($status as $stat)
                    <tr>
                      <td>{{$stat->centername}}</td>
                      <td>{{$stat->numberofper}}</td>
                      <td>{{$stat->active}}</td>
                      <td>
                        <a href="#"  class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal">Update</a>
                      </td>
                    </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Center Name</th>
                        <th># Person in Center</th>
                        <th>Remarks</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
  
       
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal Starts Here     For Update of The Evacuation -->
        <!-- Large modal -->
        <div class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Your Center</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                            <form method="POST" action="#">
                                  @csrf
                                  <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="name">{{ __('Name') }}</label>
                                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          
                                           @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                           @enderror
                                       </div>
                                    </div>
                                       <!-- Form Group End -->
                                       <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="username">{{ __('Username') }}</label>
                                          <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
          
                                           @error('username')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                           @enderror
                                       </div>
                                       </div>
                                       <!-- Form Group End -->
                                       
                                    
                                  </div>
                                  <!-- Row -->

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                         <label for="email">{{ __('E-Mail Address') }}</label>
                                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
         
                                         @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                      </div>
                                      </div>
                                      <!-- Form Group End -->
                                      <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                          <label for="description">{{ __('Description') }}</label>
                                          <select id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus >
                                           <option value="None">Please Select</option>
                                           <option value="Super Admin">Super Admin</option>
                                           <option value="IT Staff">Admin</option>
                                           <option value="Evacuation Staff">Evacuation Staff</option>
                                          </select>    
                                            @error('description')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                             @enderror
                                         </div>
                                       </div>
                                       <!-- Col --> 
                                  </div>

                                  <!-- Line Break -->
                                  
                                  <div class="row">
                                    
                                       <!-- Form Group End -->
                                       <div class="col-12 col-sm-6">
                                       <div class="form-group">
                                          <label for="password" >{{ __('Password') }}</label>
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          
                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                       </div>
                                       </div>
                                       <!-- Form Group End -->
                                       <div class="col-12 col-sm-6">
                                       <div class="form-group">
                                        <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                       </div>
                                       </div>
                                       <!-- Form Group End -->

                                  </div>
                                  <!-- Row -->

                                  <!-- End -->          
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
              </button>
              </div>
            </form>
              </div>
            </div>
          </div>
        </div>
    <!-- Modal Ends Here -->

      
    <!-- Modal Starts Here -->
        <!-- Large modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                            <form method="POST" action="{{ action('CrudController@regist')}}">
                                  @csrf
                                  <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="name">{{ __('Name') }}</label>
                                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          
                                           @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                           @enderror
                                       </div>
                                    </div>
                                       <!-- Form Group End -->
                                       <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="username">{{ __('Username') }}</label>
                                          <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
          
                                           @error('username')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                           @enderror
                                       </div>
                                       </div>
                                       <!-- Form Group End -->
                                       
                                    
                                  </div>
                                  <!-- Row -->

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                         <label for="email">{{ __('E-Mail Address') }}</label>
                                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
         
                                         @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                      </div>
                                      </div>
                                      <!-- Form Group End -->
                                      <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                          <label for="description">{{ __('Description') }}</label>
                                          <select id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus >
                                           <option value="None">Please Select</option>
                                           <option value="Super Admin">Super Admin</option>
                                           <option value="IT Staff">Admin</option>
                                           <option value="Evacuation Staff">Evacuation Staff</option>
                                          </select>    
                                            @error('description')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                             @enderror
                                         </div>
                                       </div>
                                       <!-- Col --> 
                                  </div>

                                  <!-- Line Break -->
                                  
                                  <div class="row">
                                    
                                       <!-- Form Group End -->
                                       <div class="col-12 col-sm-6">
                                       <div class="form-group">
                                          <label for="password" >{{ __('Password') }}</label>
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          
                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                       </div>
                                       </div>
                                       <!-- Form Group End -->
                                       <div class="col-12 col-sm-6">
                                       <div class="form-group">
                                        <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                       </div>
                                       </div>
                                       <!-- Form Group End -->

                                  </div>
                                  <!-- Row -->

                                  <!-- End -->          
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
              </button>
              </div>
            </form>
              </div>
            </div>
          </div>
        </div>

    <!-- Modal Ends Here -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <strong>Copyright &copy; 2020 <a href="#">TUP Taguig Students </a>with help of AdminLTE.io for Dashboard.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.0.5
  </div>
 </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->
 
  
  
 

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->



<script>
  $(function () {
    $("#example1").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      "pageLength":5,
    });
    $('#example2').DataTable({
      "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      "pageLength":5,
    });
  });
</script>

</body>
</html>
