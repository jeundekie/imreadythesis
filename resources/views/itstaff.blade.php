<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>MCDRRMO | Evacuation Board</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- site icons -->
   <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
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
      <li class="nav-item d-none d-sm-inline-block">
        @foreach($sel as $s) 
        <a href="{{route('refresh.dashboard', $s->centerid) }}" class="btn btn-success">Refresh</a>
        @endforeach
      </form>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        @foreach($sel as $s)
        <form action="{{ action('SelectController@updatecen', $s->centerid) }}" method="POST">
         @csrf
         @endforeach
        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to reset the Number of Evacuues?');">Reset</button>
        </form>
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
    <a href="/itstaff" class="brand-link">
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
                @foreach($sel as $s)
                <a href="{{action('SelectController@relief', $s->centerid) }}" class="nav-link active">
                  <i class="fas fa-hand-holding-medical nav-icon"></i>
                  <p>Relief Board</p>
                </a>
                @endforeach
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @foreach($sel as $s)
            <h1 class="m-0 text-dark">{{$s->centername}}</h1>
            @endforeach
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Evacuation Staff Dashboard</li>
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
            <div class="small-box bg-info" data-toggle="modal" data-target="#status">
              <div class="inner">
                @foreach($sel as $s)
               <h3 id="numperson">{{$s->numberofper}}</h3>
                @endforeach
                <p>Number of Person</p>
              </div>
              <div class="icon">
                <i class="fa fa-user" aria-hidden="true"></i>
              </div>
              @foreach($sel as $s)
              <p><small style="margin-left: 5px">  Last Update {{$s->dateadds}} {{$s->timedi}}</small></p>
               @endforeach
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

            <!-- Small boxes (Stat box) -->
       
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary" data-toggle="modal" data-target="#summa">
              <div class="inner">
                
               <h3 id="relief">Click to See!</h3>
               <p>Relief Received</p>
              </div>
              <div class="icon">
                <i class="fas fa-hand-holding-medical nav-icon" aria-hidden="true"></i>
              </div>
             <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               @foreach($total as $row)
               <h3>{{$row->active}}</h3>
               @endforeach
                <p>Number Active Center</p>
              </div>
              <div class="icon">
                <ion-icon ios="ios-home" md="md-home"></ion-icon>
                <i class="ion ion-home"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-3 col-6">
        <button class="btn btn-danger" data-toggle="modal" data-target="#minusmodal"><i class="fas fa-minus"></i></button>
          </div>
        </div>
        @include('inc.messages')
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
             
            
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
           
            <!-- Map card -->
           
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Update Assigned Modal -->
    <div class="modal fade " id="status"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update the Evacuation</h5>
          </div>
          <div class="modal-body">
          <form action="{{ action('SelectController@addper')}}" method="post">
            @csrf
              <div class="row">
                <div class="col-md-6">
                  <label class="col-sm-12 control-label">Add Evacuues</label> 
                  <div class="input-group">
                      <input type="number" class="form-control" id="num" name="num">
                      <div class="input-group-append">
                        <span class="input-group-text" id=""><img src="/images/check.png" style="width:20px;height:20px;" type="button" onClick="subtractBy()"></span>
                      </div>
                      @foreach($sel as $s)
                     <input type="hidden" class="form-control" id="ce" name="centerid" value="{{$s->centerid}}">
                      @endforeach
                 
                      <input type="hidden" class="form-control" id="userid" name="id" value="{{ Auth::user()->id }}">
                      <input type="hidden" class="form-control" id="datetimeupda" name="datetimeupda" value="<?php $d = strtotime("today"); echo date("F d, Y", $d) ?>">
                      <input type="hidden" class="form-control" id="timeda" name="timeda">
                      
                  </div>
                </div>
            </div>
            <br>
            <input type="hidden" class="form-control" id="numberofper" name="numberofper">
            <label>Remaining Capacity</label>
            <input type="text" class="form-control" id="numcan" name="numcan">
 
          
            @foreach($sel as $s)
           <input type="hidden" class="form-control" id="subtract" name="subtract" value="{{$s->capacity}}">
           <input type="hidden" class="form-control" id="decoy" name="decoy" value="{{$s->numberofper}}">
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


    

    <!--  Minus Modal -->
    <div class="modal fade " id="minusmodal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">You are going to lessen the Count of Evacuees</h5> 
          </div>
          <div class="modal-body">
          <form action="{{action('SelectController@upminus')}}" method="POST">
            @csrf
            <div class="row">
              <div class="input-group">
                <label class="col-md-12">No. of Evacuee who left:</label>
                <input type="number" class="form-control" id="dito" name="dito">
                <div class="input-group-append">
                  <span class="input-group-text" id=""><img src="/images/check.png" style="width:20px;height:20px;" type="button" onClick="addBy()"></span>
                </div>
              </div>
              <br>

            <div class="col-md-6">
              <div class="form-group">
                <label class="col-md-12">New Count of Evacuees:</label>
                <input type="number" class="form-control" id="many" name="numberofper" value="">
              </div>
            </div>
            <input type="hidden" class="form-control" id="userid" name="id" value="{{ Auth::user()->id }}">
            <div class="col-md-6">
              <div class="form-group">
                <label class="col-md-12">Time Update:</label>
                <input type="time" class="form-control" id="" name="timeupdate" value="">
                <input type="text" class="form-control" id="" name="dateadds" value="<?php $d = strtotime("today"); echo date("F d, Y", $d) ?>">
              </div>
            </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-12">No. of that Can be Accomodated:</label>
                  <input type="text" class="form-control" id="anynum" name="numcan" value="">
                </div>
              </div>
            </div>
            @foreach($sel as $s)
                     <input type="hidden" class="form-control" id="ce" name="centerid" value="{{$s->centerid}}">

          <input type="hidden" class="form-control" id="minnum" name="minnum" value="{{$s->numberofper}}">
          <input type="hidden" class="form-control" id="any" name="num2" value="{{$s->numcan}}">
             @endforeach
             
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


     <!--  Summary Modal -->
     <div class="modal fade " id="summa"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Summary Info of What we Received</h5>
          </div>
          <div class="modal-body">
            <table id="example1" name="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Donator</th>
                <th>Description</th>
                <th>Date</th>
              </tr>
              </thead>
             <tbody>
                 @foreach($indi as $give)
              <tr>
                <td>{{$give->namedonate}}</td>
                <td>{{$give->description}}</td>
                <td>{{$give->redate}}</td>
              </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Donator</th>
                  <th>Description</th>
                  <th>Date</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
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
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
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


</body>
</html>

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
  });
</script>

<script>
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() ;

    document.getElementById("timeda").value = time;
</script>

<script>
  $("#num").keyup(function(){
  var n1 = $("#decoy").val();
  var n2 = $("#num").val();
  var ans = +n1 + +n2;
  document.getElementById("numberofper").value = ans;
}); 

$("#dito").keyup(function(){
  var n3 = $("#any").val();
  var n4 = $("#dito").val();
  var ans = +n3 + +n4;
  document.getElementById("anynum").value = ans;
}); 

function subtractBy()
{
        num1 = document.getElementById("subtract").value;
        num2 = document.getElementById("numberofper").value;
     if (num2 > num1)
     {
      document.getElementById("numcan").value = '0';
      alert("The Evacuation Center Already Full Contact MCDRRMO");
     }else
     {
        num1 = document.getElementById("subtract").value;
        num2 = document.getElementById("numberofper").value;
        document.getElementById("numcan").value = num1 - num2;
     }
       
       
}

function addBy()
{
        num3 = document.getElementById("dito").value;
        num4 = document.getElementById("minnum").value;
     if (num3 > num4)
     {
      document.getElementById("many").value = '0';
      alert("Reached Limit Check");
     }else
     {
        num3 = document.getElementById("dito").value;
        num4 = document.getElementById("minnum").value;
        document.getElementById("many").value = num4 - num3;
     }
       
       
}
</script>


