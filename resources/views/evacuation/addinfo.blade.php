<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>MCDRRMO | Relief Information</title>
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
            <a href="#" class="d-block">Danica Martin</a>
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
                  <a href="#" class="nav-link">
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Relief Area</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Relief</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         @include('inc.messages')
         <h5 class="mb-2">Status of Request</h5>
         <!-- =========================================================== -->
       <div class="row">
         <div class="col-md-3 col-sm-8 col-12">
           <div class="info-box bg-info" data-toggle="modal" data-target="#allneeded">
             <span class="info-box-icon"><i class="fas fa-exclamation-circle"></i></span>

             <div class="info-box-content">
               <span class="info-box-text" style="color: black">All is Needed</span>
               @foreach($allneed as $need)
             <span class="info-box-number" style="color: black">{{$need->damidona}}</span>
              @endforeach
             
               <div class="progress">
                 <div class="progress-bar" style="width: 100%"></div>
               </div>
               <span class="progress-description">
                @foreach($allneedate as $all)
                 <small style="color: black">Last {{$all->datereq}} {{$all->timedi}} </small>
               @endforeach
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-12">
           <div class="info-box bg-success" data-toggle="modal" data-target="#medicinemodal">
             <span class="info-box-icon"><i class="ionicons ion-ios-medkit"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Medicine</span>
              
               @foreach($medicine as $need)
             <span class="info-box-number" style="color: black">{{$need->damidona}}</span>
              @endforeach
               <div class="progress">
                 <div class="progress-bar" style="width: 100%"></div>
               </div>
               <span class="progress-description">
                @foreach($medicinedate as $all)
                <small style="color: black">Last {{$all->datereq}} {{$all->timedi}} </small>
                @endforeach
                 
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-12">
           <div class="info-box bg-warning" data-toggle="modal" data-target="#clothesmodal">
             <span class="info-box-icon"><i class="fas fa-tshirt"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Clothes</span>
               
               @foreach($clothes as $need)
               <span class="info-box-number" style="color: black">{{$need->damidona}}</span>
                @endforeach
              

               <div class="progress">
                 <div class="progress-bar" style="width: 100%"></div>
               </div>
               <span class="progress-description">
               
                @foreach($clothesdate as $all)
                <small style="color: black">Last {{$all->datereq}} {{$all->timedi}} </small>
                @endforeach
                 
             
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-12">
           <div class="info-box bg-danger" data-toggle="modal" data-target="#foodsmodal">
             <span class="info-box-icon"><i class="fas fa-bread-slice"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Foods</span>
              
               @foreach($foods as $need)
               <span class="info-box-number" style="color: black">{{$need->damidona}}</span>
                @endforeach
              
               <div class="progress">
                 <div class="progress-bar" style="width: 100%"></div>
               </div>
               <span class="progress-description">
                 
                @foreach($foodate as $all)
                <small style="color: black">Last {{$all->datereq}} {{$all->timedi}} </small>
                @endforeach
                 
                
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->

       <!-- =========================================================== -->



         <br>
         <div class="row">
           <div class="col-md-6">
         <button class="btn btn-info" data-toggle="modal" data-target="#addrelief">Send Relief</button>
           </div>

           <div class="col-md-6">
            <button class="btn btn-success" data-toggle="modal" data-target="#addmc">Add Donations</button>
              </div>
         </div>
         <br>
        <!-- Row Table for Relief Users -->
        <div class="row">
          <div class="col-12">
            
              <!-- /.card-body -->
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Relief Information</h3>
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
                    <th>Center Name</th>
                    <th>Who Release</th>
                    <th>Category </th>
                    <th>Description</th>
                    <th>Release Date/Time</th>
                    <th>Remark</th>
                    <th>Proof</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                 <tbody>
                  @foreach($pasa as $ad)
                  <tr>
                    <td>{{$ad->centername}}</td>
                    <td>{{$ad->name}}</td>
                    <td>{{$ad->reliefcategory}}</td>
                    <td>{{$ad->descripgoods}}</td>
                    <td>{{$ad->releasedate}} - {{$ad->tam}}</td> 
                    <td>{{$ad->remarks}}</td>
                  <td ><img src="{{$ad->images}}" id="geeks" GFG="250" style="width: 50px; height:50px; transition: -webkit-transform 0.25s ease;" onclick="zoomin()"></td>  
                    <td>
                      <a href="{{action('CheckController@seedetails', $ad->centerid) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                   
                    </td>    
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Center Name</th>
                      <th>Who Release</th>
                      <th>Category </th>
                      <th>Description</th>
                      <th>Release Date/Time</th>
                      <th>Remark</th>
                      <th>Proof</th>
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

          <!-- Row Table for Other Users -->
          <div class="row">
            <div class="col-12">
              
                <!-- /.card-body -->
            
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Donation Information</h3>
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
                      <th>Center Name</th>
                      <th>Who Received</th>
                      <th>Donator </th>
                      <th>Catergory</th>
                      <th>Description</th>
                      <th>Date Received</th>
                      <th>Proof</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                   <tbody>
                    @foreach($kuhadonasyon as $kuha)
                    <tr>
                    <td>{{$kuha->centername}}</td>
                    <td>{{$kuha->name}}</td>
                    <td>{{$kuha->namedonate}}</td>
                    <td>{{$kuha->reliefcategory}}</td>
                    <td>{{$kuha->description}}</td>
                    <td>{{$kuha->redate}}</td>
                    <td><img src="{{$kuha->images}}" style="width: 50px; height:50px;"></td>  
                    <td>
                      <button class="btn btn-info" type="button" ><i class="fas fa-eye"></i></button>
                    </td>      
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Center Name</th>
                        <th>Who Received</th>
                        <th>Donator </th>
                        <th>Catergory</th>
                        <th>Description</th>
                        <th>Date Received</th>
                        <th>Proof</th>
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
       

          <!-- Table Received of MCDRRMO -->
          <div class="row">
            <div class="col-12">
              
                <!-- /.card-body -->
              <!-- /.card -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Relief Donation to MCDRRMO</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <!--<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="addre" name="addre" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Donator</th>
                      <th>Category </th>
                      <th>Description</th>
                      <th>Date Received</th>
                      <th>Images</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                   <tbody>
                    @foreach($mcdrrmo as $ad)
                    <tr>
                      <td>{{$ad->namedonator}}</td>
                      <td>{{$ad->reliefcategory}}</td>
                      <td>{{$ad->descigood}}</td>
                      <td>{{$ad->dategive}}</td>
                    <td ><img src="{{$ad->images}}" style="width: 50px; height:50px; transition: -webkit-transform 0.25s ease;" onclick="zoomin()"></td>  
                      <td>
                        <button class="btn btn-info" type="button" ><i class="fas fa-edit"></i></button>
                      </td>    
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Donator</th>
                        <th>Category </th>
                        <th>Description</th>
                        <th>Date Received</th>
                        <th>Images</th>
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
  

            <!-- Row Table for Other Users -->
            <div class="row">
              <div class="col-12">
                
                  <!-- /.card-body -->
              
                <!-- /.card -->
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Excess Relief Goods Update</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                      <!--<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="excess" name="excess" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Center Name</th>
                        <th>Who Update</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Date Update</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                     <tbody>
                      @foreach($tira as $kuha)
                      <tr>
                      <td>{{$kuha->centername}}</td>
                      <td>{{$kuha->name}}</td>
                      <td>{{$kuha->reliefcategory}}</td>
                      <td>{{$kuha->descripgo}}</td>
                      <td>{{$kuha->excedate}}</td>
                      <td>
                        <button class="btn btn-info" type="button" ><i class="fas fa-eye"></i></button>
                      </td>      
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Center Name</th>
                          <th>Who Update</th>
                          <th>Catergory</th>
                          <th>Description</th>
                          <th>Date Update</th>
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

      <!-- Donation to MCDRRMO Modal -->
  <div class="modal fade" id="addmc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Donation Received By MCDRRMO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{action('ReportController@sendgift')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <input type="hidden" name="id" value="{{Auth::user()->id}}">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label class="col-md-12">Name of Donator(Optional):</label>
                <input type="text" class="form-control" id="namedonator" name="namedonator" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label class="col-md-12">Type of Relief:</label>
                <select name="reliefid" id="rel" class="form-control">
                  <option value="">Select Relief</option>
                  <option value="1">Foods</option>
                  <option value="2">Clothes</option>
                  <option value="3">Medicine</option>
                  <option value="4">Assorted Need</option>
                </select>
                </div>
              </div>

            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                <label class="col-md-12">Description</label>
                <textarea type="text" class="form-control" id="descigood" name="descigood" required></textarea>
              </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label class="col-md-12">Date:</label>
                <input type="date" class="form-control" id="dategive" name="dategive" required>
                <input type="text" class="form-control" id="daive" name="dateyear" required>
              </div>
              </div>
          
              <div class="col-md-6">
                <div class="form-group">
                <label class="col-md-12">Image</label>
                <input type="file" class="form-control" id="images" name="images">
              </div>
              </div>
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

      <!-- Modal -->
  <div class="modal fade" id="addrelief" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Release Relief Goods</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       <div class="modal-body">
       <form action="{{ action('ReportController@chartbar')}}" method="POST" enctype="multipart/form-data">
        @csrf
         <input type="hidden" id="id" name="id" value="{{Auth::user()->id}}">
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <label class="col-md-12">List of Active Center</label>
               <select name="centerid" id="centerid" class="form-control" required>
                <option value="">Evacuation Center</option>
                 @foreach($goods as $go)
                <option value="{{$go->centerid}}">{{$go->centername}}</option>
                 @endforeach
               </select>
             </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
              <label class="col-md-12">List of Relief</label>
              <select name="reliefid" id="reliefid" class="form-control" required>
                <option value="">Relief Category</option>
                @foreach($reliefs as $re)
               <option value="{{$re->reliefid}}">{{$re->reliefcategory}}</option>
                @endforeach
              </select>
            </div>
          </div>
         </div>

         <div class="row">
           
          <div class="col-md-12">
            <div class="form-group">
              <label class="col-md-12">Please Input the List of Goods</label>
             <textarea type="text" id="descriptions" name="descripgoods" class="form-control" required></textarea>
            </div>
          </div>

         </div>
             <input type="hidden" name="whogive" value="mcdrrmo">
         <div class="row">
           
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-md-12">Release Date</label>
             <input type="date" id="releasedate" name="releasedate" class="form-control" required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-md-12">Estimated Time of Release</label>
             <input type="time" id="releasetime" name="releasetime" class="form-control" required>
            </div>
          </div>

         </div>

         <div class="row">
           
          <div class="col-md-12">
            <div class="form-group">
              <label class="col-md-12">Please Attached Image if Available</label>
              <input type="file"  id="images" name="images" >
            </div>
          </div>

         </div>

         <input type="hidden" value="not received" name="remarks">
         <button type="submit" class="btn btn-primary">Save changes</button>
        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
        </div>
      </div>
    </div>
  </div>

<!-- End Modal -->

    <!-- All Needed Modal -->
<div class="modal fade" id="allneeded" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Below are the Centers Who Request for All</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="alltable" name="alltable" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Center Name</th>
            <th>Who Request</th>
            <th>Description</th>
            <th>Ask Date/Time</th>
            <th>Action</th>
          </tr>
          </thead>
         <tbody>
            @foreach($getall as $get)
          <tr>
            <td>{{$get->centername}}</td>
            <td>{{$get->name}}</td>
            <td>{{$get->refquest}}</td>
            <td>{{$get->datereq}} {{$get->timedi}}</td>
            <td>
              <a href="{{action('CheckController@seedetails', $get->centerid) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
              <a href="{{action('CheckController@respondup', $get->reqid) }}" class="btn btn-success"  onclick="return confirm('Tag this already as respond?');"><i class="fas fa-check"></i></a>
            </td>    
          </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Center Name</th>
              <th>Who Request</th>
              <th>Description</th>
              <th>Ask Date/Time</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- End Modal -->


          <!-- Foods Modal -->
<div class="modal fade" id="foodsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Below are the request for Foods</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="foodstable" name="foodstable" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Center Name</th>
            <th>Who Request</th>
            <th>Description</th>
            <th>Ask Date/Time</th>
            <th>Action</th>
          </tr>
          </thead>
         <tbody>
          @foreach($getfoods as $food)
          <tr>
            <td>{{$food->centername}}</td>
            <td>{{$food->name}}</td>
            <td>{{$food->refquest}}</td>
            <td>{{$food->datereq}} {{$food->timedi}}</td>
            <td>
              <a href="{{action('CheckController@seedetails', $food->centerid) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
              <a href="{{action('CheckController@respondup', $food->reqid) }}" class="btn btn-success"  onclick="return confirm('Tag this already as respond?');"><i class="fas fa-check"></i></a>
            </td>    
          </tr>
         @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Center Name</th>
              <th>Who Request</th>
              <th>Description</th>
              <th>Ask Date/Time</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- End Modal -->

        <!-- Clothes Modal -->
<div class="modal fade" id="clothesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Below are the request for Clothes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="clothestable" name="clothestable" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Center Name</th>
            <th>Who Request</th>
            <th>Description</th>
            <th>Ask Date/Time</th>
            <th>Action</th>
          </tr>
          </thead>
         <tbody>
        @foreach($getclothes as $cloth)
          <tr>
            <td>{{$cloth->centername}}</td>
            <td>{{$cloth->name}}</td>
            <td>{{$cloth->refquest}}</td>
            <td>{{$cloth->datereq}} {{$cloth->timedi}}</td>
            <td>
              <a href="{{action('CheckController@seedetails', $cloth->centerid) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
              <a href="{{action('CheckController@respondup', $cloth->reqid) }}" class="btn btn-success"  onclick="return confirm('Tag this already as respond?');"><i class="fas fa-check"></i></a>
            </td>    
          </tr>
         @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Center Name</th>
              <th>Who Request</th>
              <th>Description</th>
              <th>Ask Date/Time</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- End Modal -->

      <!-- Medicine Modal -->
<div class="modal fade" id="medicinemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Below are the Request of Medicine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="medicinetable" name="medicinetable" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Center Name</th>
            <th>Who Request</th>
            <th>Description</th>
            <th>Ask Date/Time</th>
            <th>Action</th>
          </tr>
          </thead>
         <tbody>
        @foreach($getmedicine as $med)
          <tr>
            <td>{{$med->centername}}</td>
            <td>{{$med->name}}</td>
            <td>{{$med->refquest}}</td>
            <td>{{$med->datereq}} {{$med->timedi}}</td>
            <td>
              <a href="{{action('CheckController@seedetails', $med->centerid) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
              <a href="{{action('CheckController@respondup', $med->reqid) }}" class="btn btn-success"  onclick="return confirm('Tag this already as respond?');"><i class="fas fa-check"></i></a>
            </td>    
          </tr>
         @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Center Name</th>
              <th>Who Request</th>
              <th>Description</th>
              <th>Ask Date/Time</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- End Modal -->


       <!-- Checking Modal  -->
<div class="modal fade" id="checkmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Respond for Goods</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
  $("#descriptions").keypress(function(event) {
    var character = String.fromCharCode(event.keyCode);   
    return isValid(character); 
    alert("You are Entering Special Characters");
   
});

function isValid(str) {
    return !/[~`!@#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
}
</script>

<script>
  $(function () {
    $("#excess").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      "pageLength":5,
      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ],
    });

    $("#alltable").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      "pageLength":5,
      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ],
    });

    $("#foodstable").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      "pageLength":5,
      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ],
    });

    $("#clothestable").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      "pageLength":5,
      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ],
    });

    $("#medicinetable").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      "pageLength":5,
      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ],
    });

    $("#addre").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
      "pageLength":5,
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
            this.api().columns([2]).every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value="">Filter Donator</option></select>')
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
    $('#example2').DataTable( {
        initComplete: function () {
            this.api().columns([5]).every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value="">Filter Remarks</option></select>')
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
  $(".showmedmodal").hide();
     $(".hidemodal").click(function() {
      $(".foodshow").show();
      $(".showmedmodal").hide();
   });  

   $(".foodshow").hide();
    $(".showmedmodal").hide();
     $(".medicine").click(function() {
      $(".foodshow").hide();
      $(".showmedmodal").show();
   });   
</script>

<script type="text/javascript"> 
  function zoomin() { 
      var GFG = document.getElementById("geeks"); 
      var currWidth = GFG.clientWidth; 
      GFG.style.width = (currWidth + 100) + "px"; 
  } 
    
  function zoomout() { 
      var GFG = document.getElementById("geeks"); 
      var currWidth = GFG.clientWidth; 
      GFG.style.width = (currWidth - 100) + "px"; 
  } 
</script> 

</body>
</html>
 