<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>MCDRRMO | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    <!-- site icons -->
    <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
  
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
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
    <a href="#" class="brand-link">
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
          <a href="#" class="d-block">{{ Auth::user()->name }} </a>
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
                <a href="/user" class="nav-link active">
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
                <a href="/disaster" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Disaster Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/evacu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Evacuees Information</p>
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
                  <p>Disaster Tips Hacks</p>
                </a>
              </li>
            </ul>
          </li>
        <!-- OTHERS -->
        
               
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                @foreach($active as $s)
              <h3>{{$s->activecenter}}</h3>
                @endforeach
                <p>Active Evacuation Center</p>
              </div>
              <div class="icon">
                <ion-icon ios="ios-home" md="md-home"></ion-icon>
                <i class="ion ion-home"></i>
              </div>
              <a href="/centeradmin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                @foreach($calls as $c)
              <h3>{{$c->calltoday}}</h3>
                @endforeach
                <p>Number Calls Received</p>
              </div>
              <div class="icon">
                <i class="fas fa-phone"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>

                <p>Covid-19 Case</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>

                <p>Soon</p>
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
        @include('inc.messages')
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">

             <!-- Bar CHART -->
             <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Evacuation Information Details</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="barChart" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
              
                <a data-toggle="modal" data-target="#lamanmodal" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Relief Goods Yearly Information</h3>
 
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 text-left">
                    <select name="year" class="form-control" id="year">
                      <option value="">Select Year</option>
                      @foreach($taon as $year)
                  <option value="{{$year->ikaw}}">{{$year->ikaw}}</option>
                      @endforeach
                  </select>
                  </div>

                  
                  <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Total</span>
                    </div>
                    <input type="text" class="form-control" id ="total2" readonly>
                  </div>
                </div>
                
                <div id="chart_area" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 120%;"></div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Natural Disaster Yearly Information</h3>
 
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 text-left">
                    <select name="recordyear" class="form-control" id="recordyear">
                      <option value="">Select Year</option>
                      @foreach($countyear as $year)
                    <option value="{{$year->recor}}">{{$year->recor}}</option>
                      @endforeach
                  </select>
                  </div>

                  
                  <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Total</span>
                    </div>
                    <input type="text" class="form-control" id ="total3" readonly>
                  </div>
                </div>
                
                <div id="chart_disaster" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 120%;"></div>
                <a href="/inputdisas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </section>

          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Incident Calls Counting</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                <select name="yearda" class="form-control" id="yearda">
                  <option value="">Select Year</option>
               @foreach($perincident as $year)
              <option value="{{$year->numyear}}">{{$year->numyear}}</option>
              @endforeach
              </select>
                  </div>

                  <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Total</span>
                    </div>
                    <input type="text" class="form-control" id ="total" readonly>
                  </div>
                </div>

                <div class="chart">
                  <div id="chart_incident" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 120%;"></div>
                 
                  <a href="/information" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
               
               
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              <!-- BAR CHART -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Casualties</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="pull-right">
                    <div class="col-md-6 text-left">
                      <select name="callyear" class="form-control" id="callyear">
                        <option value="">Select Year</option>
                        @foreach($peryear as $year)
                    <option value="{{$year->ako}}">{{$year->ako}}</option>
                        @endforeach
                    </select>
                    </div>
                  </div>
                  <div class="chart">
                    <div id="chart_casualties" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 120%;"></div>
                    <a data-toggle="modal" data-target="#casmodal" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <!-- Map card -->
             
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              
            </div>
            <!-- /.card -->
          </section>
           <!-- Left col -->
              

             
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


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
                                  <div class="row">
                                    <div class="col-12 col-sm-6">
                                      <div class="form-group">
                                         <label for="userphone" >{{ __('Phone Number') }}</label>
                                         <input id="userphone" type="text" class="form-control @error('userphone') is-invalid @enderror" name="userphone" required>
                                         @error('userphone')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                      </div>
                                  </div>

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


  <!-- Evacuation Modal -->
<div class="modal fade" id="lamanmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <!-- Row Table for Other Users -->
           <div class="row">
            <div class="col-12">
              
                <!-- /.card-body -->
            
              <!-- /.card -->
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Not Full Evacuation Center</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <!--<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" name="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Evacuation Center</th>
                      <th>Number of Evacuues</th>
                      <th>No. that can be Accomodated</th>
                    </tr>
                    </thead>
                   <tbody>
                    @foreach($laman as $ad)
                    <tr>
                      <td>{{$ad->centername}}</td>
                      <td>{{$ad->numberofper}}</td>
                      <td>{{$ad->natira}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Evacuation Center</th>
                        <th>Number of Evacuues</th>
                        <th>No. that can be Accomodated</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


              
                <!-- /.card-body -->
            
              <!-- /.card -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Full Evacuation Center</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <!--<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" name="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Evacuation Center</th>
                      <th>Capacity</th>
                      <th>Number of Evacuues</th>
                      <th>No. of Exceed</th>
                    </tr>
                    </thead>
                   <tbody>
                    @foreach($sobra as $ad)
                    <tr>
                      <td>{{$ad->centername}}</td>
                      <td>{{$ad->capacity}}</td>
                      <td>{{$ad->numberofper}}</td>
                      <td>{{$ad->sobra}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Evacuation Center</th>
                      <th>Capacity</th>
                      <th>Number of Evacuues</th>
                      <th>No. of Exceed</th>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->



  <!--Disaster Evacuation Modal -->
  <div class="modal fade" id="casmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Casualties Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
             <!-- Row Table for Other Users -->
                  <!-- /.card-body -->
              
                <!-- /.card -->
                <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title">Casualties</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                      <!--<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example6" name="example6" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Disaster</th>
                        <th>Injured</th>
                        <th>Deaths</th>
                        <th>Damage</th>
                        <th>Description</th>
                        <th>Year</th>
                      </tr>
                      </thead>
                     <tbody>
                      @foreach($cas as $add)
                      <tr>
                        <td>{{$add->disastertype}}</td>
                        <td>{{$add->numinjured}}</td>
                        <td>{{$add->numdeaths}}</td>
                        <td>{{$add->estdamage}}</td>
                        <td>{{$add->dmgdescrip}}</td>
                        <td>{{$add->callyear}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Disaster</th>
                          <th>Injured</th>
                          <th>Deaths</th>
                          <th>Damage</th>
                          <th>Description</th>
                          <th>Year</th>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <!--<script src="plugins/sparklines/sparkline.js"></script>-->
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <!--<script src="plugins/moment/moment.min.js"></script>-->

  <!--<script src="plugins/daterangepicker/daterangepicker.js"></script>-->
  <!-- Tempusdominus Bootstrap 4 -->
  <!--<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>-->
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

  <!-- DataTables -->
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ],
    });
    $("#example2").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ],
    });
 
 
  });
</script>



<script>
  $(document).ready(function() {
    $('#example6').DataTable( {
        initComplete: function () {
            this.api().columns([5]).every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value="">Year</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ],
        "pageLength":5,
    } );
} );
</script>

<script type="text/javascript">
 
  $(document).ready(function(){
    $("#yearda").change(function(){
       var yearda = $("#yearda").val();
       $.ajax({
           url:"{{ route('total.incidente') }}",
           method:"POST",
           data:{ "_token": "{{ csrf_token() }}",
           "yearda": yearda},
           success:function(data)
           {
             JSON.parse(data);
            $("#total").val(data);
           }
 
           })
   
    });


    $("#recordyear").change(function(){
       var recordyear = $("#recordyear").val();
       $.ajax({
           url:"{{ route('total.disaster') }}",
           method:"POST",
           data:{ "_token": "{{ csrf_token() }}",
           "recordyear": recordyear},
           success:function(data)
           {
             JSON.parse(data);
            $("#total3").val(data);
           }
 
           })
   
    });


    $("#year").change(function(){
       var year = $("#year").val();
       $.ajax({
           url:"{{ route('total.donations') }}",
           method:"POST",
           data:{ "_token": "{{ csrf_token() }}",
           "year": year},
           success:function(data)
           {
             JSON.parse(data);
            $("#total2").val(data);
           }
 
           })
   
    });


   });
</script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback();

function load_monthwise_data(year, title)
{
    var temp_title = title + ' '+year+'';
    $.ajax({
        url:"{{ route('filter.year') }}",
        method:"POST",
        data:{ "_token": "{{ csrf_token() }}",
        year:year},
        dataType:"JSON",
        success:function(data)
        {
            drawMonthwiseChart(data, temp_title);
        }
    });
}

function drawMonthwiseChart(chart_data, chart_main_title)
{
    var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Nakuha');
    data.addColumn('number', 'Donation');
    $.each(jsonData, function(i, jsonData){
        var nakuha = jsonData.nakuha;
        var donasyon = parseFloat($.trim(jsonData.donasyon));
        data.addRows([[nakuha, donasyon]]);
    });
    var options = {
        title:chart_main_title,
        hAxis: {
            title: "Type of Goods"
        },
        vAxis: {
            title: 'Number of Donations'
        }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
    chart.draw(data, options);
}

</script>

<script>
    
$(document).ready(function(){

    $('#year').change(function(){
        var year = $(this).val();
        if(year != '')
        {
            load_monthwise_data(year, 'Number of Donations Received For');
        }
    });

});

</script>

<script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback();
  
  function load_yearly_disaster(recordyear, title)
  {
      var temp_title = title + ' '+recordyear+'';
      $.ajax({
          url:"{{ route('num.disaster') }}",
          method:"POST",
          data:{ "_token": "{{ csrf_token() }}",
          recordyear:recordyear},
          dataType:"JSON",
          success:function(data)
          {
             disasterCountChart(data, temp_title);
          }
      });
  }
  
  function disasterCountChart(chart_data, chart_main_title)
  {
      var jsonData = chart_data;
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Kalamidad');
      data.addColumn('number', 'Dami ng Kalamidad');
      $.each(jsonData, function(i, jsonData){
          var kalamidad = jsonData.kalamidad;
          var dami = parseFloat($.trim(jsonData.dami));
          data.addRows([[kalamidad, dami]]);
      });
      var options = {
          title:chart_main_title,
          hAxis: {
              title: "Type of Disaster"
          },
          vAxis: {
              title: 'Number of Natural Disaster'
          }
      };
  
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_disaster'));
      chart.draw(data, options);
  }
  
  </script>
  
  <script>
      
  $(document).ready(function(){
  
      $('#recordyear').change(function(){
          var recordyear = $(this).val();
          if(recordyear != '')
          {
            load_yearly_disaster(recordyear, 'Number of Disaster Record For');
          }
      });
  
  });
  
  </script>

<script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback();
  
  function load_yearly_casualties(callyear, title)
  {
      var temp_title = title + ' '+callyear+'';
      $.ajax({
          url:"{{ route('bilang.damage') }}",
          method:"POST",
          data:{ "_token": "{{ csrf_token() }}",
          callyear:callyear},
          dataType:"JSON",
          success:function(data)
          {
              yearlySumdamageChart(data, temp_title);
          }
      });
  }
  
  function yearlySumdamageChart(chart_data, chart_main_title)
  {
      var jsonData = chart_data;
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Incident');
      data.addColumn('number', 'Totalcasualties');
      data.addColumn('number', 'Deaths');
      data.addColumn('number', 'Injured');
      $.each(jsonData, function(i, jsonData){
          var incidente = jsonData.incidente;
          var totalcasualties = parseFloat($.trim(jsonData.totalcasualties));
          var namatay = parseFloat($.trim(jsonData.namatay));
          var sugat = parseFloat($.trim(jsonData.sugat));
          data.addRows([[incidente,totalcasualties,namatay,sugat]]);
      });
      var options = {
          title:chart_main_title,
          hAxis: {
              title: "Type of Disaster"
          },
          vAxis: {
              title: 'Number of Natural Disaster'
          }
      };
  
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_casualties'));
      chart.draw(data, options);
     
  
  
  }
  
  </script>
  
  <script>
      
  $(document).ready(function(){
  
      $('#callyear').change(function(){
          var callyear = $(this).val();
          if(callyear != '')
          {
              load_yearly_casualties(callyear, 'Disaster Record For');
          }
      });
  
  });
  
  </script>

<script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback();
  
  function load_incident_data(yearda, title)
  {
      var temp_title = title + ' '+yearda+'';
      $.ajax({
          url:"{{ route('bilang.incidente') }}",
          method:"POST",
          data:{ "_token": "{{ csrf_token() }}",
          yearda:yearda},
          dataType:"JSON",
          success:function(data)
          {
              yearlyIncidentChart(data, temp_title);
          }
      });
  }
  
  function  yearlyIncidentChart(chart_data, chart_main_title)
  {
      var jsonData = chart_data;
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Type of Incident');
      data.addColumn('number', 'Number of Incident');
      $.each(jsonData, function(i, jsonData){
          var klase = jsonData.klase;
          var totalincident = parseFloat($.trim(jsonData.totalincident));
          data.addRows([[klase,totalincident]]);
      });
      var options = {
          title:chart_main_title,
          hAxis: {
              title: "Type of Incident"
          },
          vAxis: {
              title: 'Number of Incident'
          }
      };
  
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_incident'));
      chart.draw(data, options);
  }
  
  </script>
  
  <script>
      
  $(document).ready(function(){
  
      $('#yearda').change(function(){
          var yearda = $(this).val();
          if(yearda != '')
          {
            load_incident_data(yearda, 'Number of Incident Record For');
          }
      });
  
  });
  
  </script>
  


</body>
</html>

<script>
  var year = <?php echo $pangalan; ?>;
  var data_click = <?php echo $click; ?>;
  var data_viewer = <?php echo $viewer; ?>;


  var barChartData = {
      labels: year,
      datasets: [{
          label: 'Puno na',
          backgroundColor: "rgb(139,0,0)",
          data: data_click
      }, {
          label: 'Pede pa Lagyan',
          backgroundColor: "rgb(0,0,205)",
          data: data_viewer
      }]
  };


  window.onload = function() {
      var ctx = document.getElementById("barChart").getContext("2d");
      window.myBar = new Chart(ctx, {
          type: 'bar',
          data: barChartData,
          options: {
              elements: {
                  rectangle: {
                      borderWidth: 1,
                      borderColor: 'rgb(0, 255, 0)',
                      borderSkipped: 'bottom'
                  }
              },
              responsive: true,
              title: {
                  display: true,
                  text: 'Evacuation Center Number of Person'
              }
          }
      });


  };
</script>

