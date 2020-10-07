<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>MCDRRMO | Relief Goods</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- site icons -->
    <link rel="icon" href="/images/fevicon/fevicon.png" type="image/gif" />
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="btn btn-success">Refresh</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        @foreach($selcenter as $s)
        <form action="{{ action('SelectController@updatestatus', $s->centerid) }}" method="POST">
         @csrf
         @endforeach
        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to reset all your request?');">Reset</button>
        </form>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#excessmodal">Excess Relief Goods</a>
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
    <a href="/itstaff" class="brand-link">
      <img src="/images/logos/logo.png" alt="MCDRRMO Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MCDRRMO</span>
    </a>

    

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                <a href="#" class="nav-link active">
                  <i class="fas fa-hand-holding-medical nav-icon"></i> 
                  <p>Relief Board</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-toggle="modal" data-target="#evaboard" class="nav-link active">
                  <i class="far fa-user nav-icon"></i>
                  <p>Evacuues Board</p>
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
            <h1>Relief Area</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/itstaff">Home</a></li>
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
        
             <h5 class="mb-2">Please Click To make Request</h5>
             
         
          <!-- =========================================================== -->
        <div class="row">
          <div class="col-md-3 col-sm-8 col-12">
            <div class="info-box bg-info open-modal">
              <span class="info-box-icon"><i class="fas fa-exclamation-circle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: black">All is Needed</span>
                @foreach($selcon as $sel)
               <span class="info-box-number" style="color: black" >{{$sel->request}}</span>
                @endforeach
              
                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  @foreach($lastneeded as $s)
                  <small style="color: black">Last {{$s->datereq}} {{$s->timedi}}</small>
                  @endforeach
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success medicine-modal">
              <span class="info-box-icon"><i class="ionicons ion-ios-medkit"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Medicine</span>
                @foreach($medicine as $sel)
                <span class="info-box-number">{{$sel->request}}</span>
                 @endforeach

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  @foreach($lasmedicine as $s)
                  <small>Last {{$s->datereq}} {{$s->timedi}}</small>
                   @endforeach
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning clothes-modal">
              <span class="info-box-icon"><i class="fas fa-tshirt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Clothes</span>
                @foreach($clothes as $sel)
                <span class="info-box-number">{{$sel->request}}</span>
                 @endforeach

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  @foreach($lasclothes as $s)
                  <small>Last {{$s->datereq}} {{$s->timedi}}</small>
                   @endforeach
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger foods-modal">
              <span class="info-box-icon"><i class="fas fa-bread-slice"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Foods</span>
                @foreach($foods as $sel)
                <span class="info-box-number">{{$sel->request}}</span>
                 @endforeach

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  @foreach($latest as $s)
                  <small>Last Request {{$s->datereq}} {{$s->timedi}}</small>
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

        <div class="row">
            <div class="col-12">
                <!-- /.card-body -->
              <!--  Request Table /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Request Information</h3>
                  
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
                      <th>Who Request</th>
                      <th>Category</th>
                      <th>Desrip</th>
                      <th>Date/Time</th>
                    </tr>
                    </thead>
                   <tbody>
                    
                    @foreach($req as $result)
                    <tr>
                      <td>{{$result->name}}</td>
                      <td>{{$result->reliefcategory}}</td>
                      <td>{{$result->refquest}}</td>
                      <td>{{$result->datereq}} {{$result->timepass}}</td>
                    </tr>
                   @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Who Request</th>
                        <th>Category</th>
                        <th>Desrip</th>
                        <th>Date/Time</th>
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
          <br>
          <div class="row">
          <div class="col-12 text-right">
            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#donate" style="width: 25%">Add Donation</button>
          </div>
          </div>
    <!-- Donation /.row -->
    <div class="row">
        <div class="col-12">
            <!-- /.card-body -->
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Individual Donation Information</h3>
              
             <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <!--<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
             </div>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example3" name="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Received By</th>
                  <th>Donator</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Date</th> 
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
               <tbody>
                   @foreach($donator as $dona)
                <tr>
                  <td>{{$dona->name}}</td>
                  <td>{{$dona->namedonate}}</td>
                  <td>{{$dona->reliefcategory}}</td>
                  <td>{{$dona->description}}</td>
                  <td>{{$dona->redate}}</td>
                  <td><img src="{{$dona->images}}" style="width:30px; height:30px;"alt=""></td>
                  <td>
                    <a href="#"  class="btn btn-info" data-toggle="modal" data-target="#">Update</a>
                  </td>
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Received By</th>
                    <th>Donator</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
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

      <!-- /.row Relief Goods From MCDRRMO -->
    <div class="row">
        <div class="col-12">
            <!-- /.card-body -->
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">MCDRRMO Donations</h3>
              
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
                  <th>Who Send</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Release</th>
                  <th>Image</th>
                  <th>Remarks</th>
                  <th>Action</th>
                </tr>
                </thead>
               <tbody>
                   @foreach($mcgive as $give)
                <tr>
                  <td>{{$give->statid}}</td>
                  <td>{{$give->name}}</td>
                  <td>{{$give->reliefcategory}}</td>
                  <td>{{$give->descripgoods}}</td>
                  <td>{{$give->releasedate}} {{$give->relet}}</td>
                  <td><img src="{{$give->images}}" style="width:30px; height:30px;"alt=""></td>
                  <td>{{$give->remarks}}</td>
                  <td>
                      <button class="btn btn-success updatebtn"><i class="fas fa-check"></i></button>
                  </td>
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Who Send</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Release</th>
                    <th>Image</th>
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

     <!-- Go Back Modal -->
     <div class="modal fade " id="evaboard"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">You are going to Evacuation Center Dashboard</h5>
            </div>
            <div class="modal-body">
            <form action="{{ action('SelectController@getback')}}" method="POST">
              @csrf
              @foreach($selcenter as $s)
                       <input type="hidden" class="form-control" id="ce" name="centerid" value="{{$s->centerid}}">
               @endforeach
               <h6>Before you proceed.</h6>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Proceed</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
            </form>
            </div>
          </div>
        </div>
      </div>
      
      <!-- End Modal -->

         <!-- Go Back Modal -->
     <div class="modal fade " id="excessmodal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Submit Info About Excess Relief Goods</h5>
          </div>
          <div class="modal-body">
          <form action="{{action('ReliefController@excessupdate')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-12">ReliefID</label>
                  <select name="reliefid" id="reliefid" class="form-control">
                    <option value="">Select Option</option>
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
                  <label class="col-md-12">Ilist ang Natira</label>
                  <textarea class="form-control" id="descripgo" name="descripgo"></textarea>
                </div>
              </div>
            </div>

            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-12">Date</label>
                  <input type="date" class="form-control" id="excedate" name="excedate">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-12">Time</label>
                  <input  type="time" class="form-control" id="excetime" name="excetime">
                </div>
              </div>
            </div>
          <input type="hidden" name="id" value="{{Auth::user()->id}}">
              <input type="hidden" name="remarks" value="excess">
            @foreach($selcenter as $s)
                     <input type="hidden" class="form-control" id="ce" name="centerid" value="{{$s->centerid}}">
             @endforeach
             
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
          </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- End Modal -->





      <!-- Received Modal -->
     <div class="modal fade " id="submodal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
          </div>
          <div class="modal-body">
          <form action="{{action('ReliefController@reliefupdate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach($selcenter as $s)
                     <input type="hidden" class="form-control" id="ce" name="centerid" value="{{$s->centerid}}">
             @endforeach
           <input type="hidden" name="id" value="{{Auth::user()->id}}">
           <input type="hidden" name="statid" id="stat">
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                   <label class="col-md-12"></label>
                    <select name="reliefid" id="relie" class="form-control">
                      <option value="">Select Option</option>
                      <option value="1">Foods</option>
                      <option value="2">Clothes</option>
                      <option value="3">Medicine</option>
                      <option value="4">All Everything</option>
                    </select>
                 </div>
               </div>

             </div>

             <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-md-12">Description</label>
                  <textarea type="text"  name="description"  class="form-control" required></textarea>
                </div>
              </div>
             </div>

             
             <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-12">Date Update:</label>
                  <input type="date"  name="reliedupdate"  class="form-control" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-12">Time Update:</label>
                  <input type="time"  name="relieftimeupdate"  class="form-control" required>
                </div>
              </div>
             </div>
             <input type="hidden" name="remark" value="received">
             <div class="row">
               <div class="col-md-6">
             <input type="file" name="images" class="form-control">
               </div>
             </div>
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
   


      <!-- Relief ALL Modal -->
     <div class="modal fade " id="reliboard"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Please Input Down Your Request</h5>
            </div>
            <div class="modal-body">
            <form action="{{ action('SelectController@reliefup')}}" method="POST">
              @csrf
              @foreach($selcenter as $s)
                       <input type="hidden" class="form-control" id="css" name="centerid" value="{{$s->centerid}}">
               @endforeach
               <h5 id="htitle"></h5>
               <input type="hidden" class="form-control" id="rel" name="reliefid" >
               <input type="hidden" class="form-control" id="rid" name="id" value=" {{ Auth::user()->id }}">
               <textarea type="text" class="form-control" id="req" name="reliefrequest" placeholder="If you had other request or you need to specify your request. Please Input here" required></textarea>
               <input type="hidden" class="form-control" id="last" name="lastupdate">
               <input type="hidden" class="form-control" id="la" name="lastdate" value="<?php $d = strtotime("today"); echo date("F d, Y", $d) ?>">
               <input type="hidden" name="remarks" value="no respond">
              </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
            </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal -->
  </div>


  <!-- Add Donation Modal -->
  <div class="modal fade " id="donate"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Please List down all the Donated</h5>
        </div>
        <div class="modal-body">
        <form action="{{action('SelectController@addonate')}}" method="POST" enctype="multipart/form-data">
           @csrf
           @foreach($selcenter as $s)
                    <input type="hidden" class="form-control" id="ce" name="centerid" value="{{$s->centerid}}">
           @endforeach
           <input type="hidden" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
           <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                <label class="col-md-12">Please Identify</label>
                 <select id="reliefid" type="text" class="form-control" name="reliefid"  required >
                 <option value="">Select Center</option>
                 <option value="1">Foods</option>
                 <option value="2">Clothes</option>
                 <option value="3">Medicine</option>
                 <option value="4">All Good</option>
                 </select>  
               </div>
             </div>


             <div class="col-md-6">
              <div class="form-group">
                <label class="col-md-12">Name of Donator (optional)</label>
                <input type="text" class="form-control" id="namedonate" name="namedonate" required> 
              </div>
            </div>
           </div>
          
          <div class="row">
            <label class="col-md-12">Date</label>
           <input type="date" class="form-control" id="redate" name="redate"  value=""required>
           <input type="hidden" class="form-control" id="reyear" name="reyear"  value="<?php echo date("Y"); ?>"required> 
        
          </div>
           <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="col-md-12">Please Indicate the goods that is given</label>
                <textarea type="text" class="form-control" id="description" name="description" required> </textarea>
              </div>
            </div>
          </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-md-12">Please Attached Image if Available</label>
                  <input type="file"  id="images" name="images" multiple>
                </div>
              </div>
            </div>
       

        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        </form>
        </div>
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
    $("#example1").DataTable({
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
    $('#example2').DataTable({
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
    $('#example3').DataTable({
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

</body>
</html>

<script>
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() ;
   
    document.getElementById("last").value = time;

    
</script>

<script>
  $("#description").keypress(function(event) {
    var character = String.fromCharCode(event.keyCode);   
    return isValid(character); 
    alert("You are Entering Special Characters");
   
});

function isValid(str) {
    return !/[~`!@#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
}
</script>

<script type="text/javascript">
    $(document).on("click", ".open-modal", function () {
   
   
     var allneed = 4;
     document.getElementById("rel").value = allneed;
     document.getElementById("htitle").innerHTML = "All is Needed";
    
      // $("#modal-body").html(dateTime + text_data + radio_data + incidentval_data + optionval_data + vehicleval_data );   
       $('#reliboard').modal('show');
  
     });
  
  </script>

<script type="text/javascript">
    $(document).on("click", ".medicine-modal", function () {
   
    
     var medicine = 3;
     document.getElementById("rel").value = medicine;
     document.getElementById("htitle").innerHTML = "Medicine";
       
       $('#reliboard').modal('show');
  
     });
  
  </script>

<script type="text/javascript">
    $(document).on("click", ".clothes-modal", function () {
   
     var clothes = 2;
     document.getElementById("rel").value = clothes;
     document.getElementById("htitle").innerHTML = "Clothes";
       
       $('#reliboard').modal('show');
  
     });
  
  </script>

<script type="text/javascript">
    $(document).on("click", ".foods-modal", function () {
   
     var foods = 1;
     document.getElementById("rel").value = foods;
     document.getElementById("htitle").innerHTML = "Foods";
     
       
       $('#reliboard').modal('show');
  
     });
  
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

      $('#stat').val(data[0]);
      
      

      $('#submodal').modal('show');      
    });
 });

</script>