<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>MCDRRMO | User Information</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- site icons -->
   <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">

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
                  <a href="/centeradmin" class="nav-link">
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
                  <a href="#" class="nav-link">
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">User Info</li>
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
            <div class="col-md-12 text-right">
              <a data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-success" style="color: white">Add User</a>
            </div>
          </div>
        </div>
        <br> 
        <!-- Row Table for Other Users -->
        <div class="row">
          <div class="col-12">
            
              <!-- /.card-body -->
          
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Information</h3>
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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Number</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                 <tbody>
                  @foreach($admins as $ad)
                  <tr>
                    <td>{{$ad->id}}</td>
                    <td>{{$ad->name}}</td>
                    <td>{{$ad->username}}</td>
                    <td>{{$ad->email}}</td>
                    <td>{{$ad->description}}</td>
                    <td>{{$ad->userphone}}</td>
                    <td>
                      <button href="javascript:void(0)" class="btn btn-info updatebtn" id="edititem"> <i class="fa fa-edit"></i></button>
                      <button  href="javascript:void(0)" class="btn btn-info assignedbtn"> <i class="fa fa-plus"></i></button>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Number</th>
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


        
    <div class="row">
      <div class="col-12">
        
          <!-- /.card-body -->
      
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Persons Handled Evacuation</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <!--<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example4" name="example4" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Number</th>
                <th>Center Handled</th>
                <th>Time Available</th>
              </tr>
              </thead>
             <tbody>
              @foreach($evacu as $adu)
              <tr>
                <td>{{$adu->id}}</td>
                <td>{{$adu->contactperson}}</td>
                <td>{{$adu->phonenumber}}</td>
                <td>{{$adu->centername}}</td>
              <td>{{$adu->timefrom}}  {{$adu->timeto}}</td>
              </tr>
              @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Number</th>
                  <th>Center Handled</th>
                  <th>Time Available</th>            
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

      <!-- Modal Starts Here -->
        
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



    <!-- Assigned Modal -->
    <div class="modal fade " id="assigned" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Assigned Personnel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  action="{{ action('CrudController@assin')}}" method="post">
              @csrf
              <input type="hidden" name="id" id="userid">
              <div class="row">

                <div class="col-md-6">
                 <div class="form-group">
                   <label for="name" class="col-sm-12 control-label">Name</label>
                   <input type="text" class="form-control" id="what" name="contactperson" required>
                 </div>
              </div>

              <div class="col-sm-6">
                 <div class="form-group">
                     <label class="col-sm-12 control-label">Evacuation</label>
                     <select id="centerid" type="text" class="form-control @error('description') is-invalid @enderror" name="centerid"  required >
                      <option value="">Select Center</option>
                      @foreach($sell as $sel)
                     <option value="{{$sel->centerid}}">{{$sel->centername}}</option>
                      @endforeach
                     </select> 
                     </div>
                 </div>

              </div>
              <!-- End Row -->

              <div class="row">

                <div class="col-md-6">
                 <div class="form-group">
                   <label for="name" class="col-sm-12 control-label">For Center</label>
                   <select id="forcenter" type="text" class="form-control" name="forcenter"  required >
                    <option value="">Please Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                   </select> 
                 </div>
              </div>

              <div class="col-sm-6">
                 <div class="form-group">
                     <label class="col-sm-12 control-label">For Relief Goods</label>
                     <select id="forelief" type="text" class="form-control" name="forelief"  required >
                      <option value="">Please Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                     </select> 
                     </div>
                 </div>

              </div>
              <!-- End Row -->
               <!-- End Row -->

               <div class="row">

              <div class="col-md-6">
                 <div class="form-group">
                   <label for="name" class="col-sm-12 control-label">Time From</label>
                   <select id="tim" name="timefrom" class="form-control">
                    <option value="">Select Time</option>
                    <?php for($i = 0; $i < 24; $i++): ?>
                      <option value="<?php printf('%1$02d.00',(($i+1) > 12)? ($i+1)-12 : $i+1)?><?php echo (($i < 12)? 'AM' : 'PM'); ?>"><?php printf('%1$02d.00',(($i+1) > 12)? ($i+1)-12 : $i+1)?><?php echo (($i < 12)? 'AM' : 'PM'); ?></option>
                    <?php endfor ?>
                  </select>
                 </div>
              </div>

              <div class="col-sm-6">
                 <div class="form-group">
                     <label class="col-sm-12 control-label">To</label>
                     <select id="tom" name="timeto" class="form-control">
                      <option value="">Select Time</option>
                      <?php for($i = 0; $i < 24; $i++): ?>
                        <option value="<?php printf('%1$02d.00',(($i+1) > 12)? ($i+1)-12 : $i+1)?><?php echo (($i < 12)? 'AM' : 'PM'); ?>"><?php printf('%1$02d.00',(($i+1) > 12)? ($i+1)-12 : $i+1)?><?php echo (($i < 12)? 'AM' : 'PM'); ?></option>
                      <?php endfor ?>
                    </select>
                  </div>
              </div>

              </div>
              <!-- End Row -->

              <div class="form-group">
                <label for="name" class="col-sm-12 control-label">Phone Number</label>
                <input type="text" class="form-control" id="pho" name="phonenumber" required>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->

    <!-- Edit Modal  Modal -->
    <div class="modal fade " id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action ="{{ action('CrudController@editadmin')}}" method="post">
              @csrf
               <input type="hidden" name="id" id="id">
               <div class="row">

                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="name" class="col-sm-12 control-label">Name</label>
                    <input type="text" class="form-control" id="na" name="name" required>
                  </div>
               </div>

               <div class="col-sm-6">
                  <div class="form-group">
                      <label class="col-sm-12 control-label">UserName</label>
                        <input class="form-control" id="us" name="username" required>
                      </div>
                  </div>

               </div>
               <!-- End Row -->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-12 control-label">Email</label>
                      <input class="form-control" id="em" name="email" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Position</label>
                      <input type="text" class="form-control" id="de" name="description" required>
                    </div>
                  </div>

                </div>
                <!-- End row -->

               <div class="form-group">
                    <label class="col-sm-12 control-label">Phone Number</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="use" name="userphone" maxlength="11" required>
                    </div>
               </div>

                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            
          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->


     <!-- Update Assigned Modal -->
     <div class="modal fade " id="editassigned" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Personnel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action ="{{ action('CrudController@updateperson') }}" method="post">
              @csrf
               <input type="hidden" name="contactid" id="conid">
             
                <div class="row">
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="col-sm-12 control-label">Assigned New Center</label>
                      <select id="centerid" type="text" class="form-control @error('description') is-invalid @enderror" name="centerid"  required >
                        <option value="">Select Center</option>
                        @foreach($soils as $sol)
                       <option value="{{$sol->centerid}}">{{$sol->centername}}</option>
                        @endforeach
                       </select> 
                    </div>
                  </div>

                </div>
                <!-- End row -->

               <div class="row">
                 <div class="col-md-6">
                 <div class="form-group">
                    <label class="col-sm-12 control-label">For Center</label>
                    <input type="text" class="form-control" id="cen" name="forcenter"  required>
                 </div>
                 </div>

                 <div class="col-md-6">
                  <div class="form-group">
                     <label class="col-sm-12 control-label">For Relief</label>
                     <input type="text" class="form-control" id="lief" name="forelief" required>
                  </div>
                  </div>
               </div>

               <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                   <label class="col-sm-12 control-label">Time From</label>
                   <select id="from" name="timefrom" class="form-control">
                    <option value="">Select Time</option>
                    <?php for($i = 0; $i < 24; $i++): ?>
                      <option value="<?php printf('%1$02d.00',(($i+1) > 12)? ($i+1)-12 : $i+1)?><?php echo (($i < 12)? 'AM' : 'PM'); ?>"><?php printf('%1$02d.00',(($i+1) > 12)? ($i+1)-12 : $i+1)?><?php echo (($i < 12)? 'AM' : 'PM'); ?></option>
                    <?php endfor ?>
                  </select>
                </div>
                </div>

                <div class="col-md-6">
                 <div class="form-group">
                    <label class="col-sm-12 control-label">To</label>
                    <select id="toti" name="timeto" class="form-control">
                      <option value="">Select Time</option>
                      <?php for($i = 0; $i < 24; $i++): ?>
                        <option value="<?php printf('%1$02d.00',(($i+1) > 12)? ($i+1)-12 : $i+1)?><?php echo (($i < 12)? 'AM' : 'PM'); ?>"><?php printf('%1$02d.00',(($i+1) > 12)? ($i+1)-12 : $i+1)?><?php echo (($i < 12)? 'AM' : 'PM'); ?></option>
                      <?php endfor ?>
                    </select>
                 </div>
                 </div>
              </div>
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            
          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->



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

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->



<script>
  $(function () {
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
    $('#example1').DataTable( {
        initComplete: function () { 
            this.api().columns([4]).every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value="">Filter Position</option></select>')
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

<script>
  $(document).ready(function() {
    $('#example4').DataTable( {
        initComplete: function () { 
            this.api().columns([3]).every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value="">Filter Center</option></select>')
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

<script>
      
  $(document).ready( function () {
    $('#example1').DataTable();

    $('#example1').on('click', '.updatebtn', function () {
      
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function () {
        return $(this).text();
      }).get();

      //console.log(data);

      $('#id').val(data[0]);
      $('#na').val(data[1]);
      $('#us').val(data[2]);
      $('#em').val(data[3]);
      $('#de').val(data[4]);
      $('#use').val(data[5]);

      $('#edituser').modal('show');      
    });
 });

</script>

<script>
      
  $(document).ready( function () {
    $('#example1').DataTable();

    $('#example1').on('click', '.assignedbtn', function () {
      
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function () {
        return $(this).text();
      }).get();

      //console.log(data);

      $('#userid').val(data[0]);
      $('#what').val(data[1]);
      $('#pho').val(data[5]);
      

      $('#assigned').modal('show');      
    });
 });

</script>

<script>
      
  $(document).ready( function () {
    $('#example2').DataTable();

    $('#example2').on('click', '.staffbtn', function () {
      
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function () {
        return $(this).text();
      }).get();

      //console.log(data);

      $('#conid').val(data[0]);
      $('#cen').val(data[4]);
      $('#lief').val(data[5]);
      

      $('#editassigned').modal('show');      
    });
 });

</script>

</body>
</html>
