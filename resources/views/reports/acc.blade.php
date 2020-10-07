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
        <img src="images/logos/logo.png" alt="MCDRRMO" class="brand-image img-circle elevation-3"
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
            <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
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
                  <a data-toggle="modal" data-target=".bd-example-modal-lg" class="nav-link">
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
            <h1>Road Accidents</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">PreHospital</li>
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
                <h3 class="card-title">Accident Summary Information</h3>
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
                    <th>Victim Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Location</th>
                    <th>Incident Type</th>
                    <th>Assesment</th>
                    <th>Description</th>
                    <th>Remarks</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                 <tbody>
                 
                  @foreach($acci as $result)
                  <tr>
                    <td>{{$result->roadid}}</td>
                    <td>{{$result->victimname}}</td>
                    <td>{{$result->victimgender}}</td>
                    <td>{{$result->age}}</td>
                    <td>{{$result->incidentlocation}}</td>
                    <td>{{$result->incident}}</td>
                    <td>{{$result->assesment}}</td>
                    <td>{{$result->descriptions}}</td>
                    <td>{{$result->remarks}}</td>
                    <td><img id="frame" src="{{$result->images}}" width="100px" height="100px"/></td>
                    <td>
                     <a href="#"  class="btn btn-info">Add Details</a>
                     <a href="#" class="btn btn-warning">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Victim Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Location</th>
                        <th>Incident Type</th>
                        <th>Assesment</th>
                        <th>Description</th>
                        <th>Remarks</th>
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
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
     <!----modal starts here--->
          <div id="modal" class="modal fade" role='dialog'>
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Please Check the Details</h4>
                  </div>
                  <div class="modal-body" id= "modal-body">
                    <table id="classTable" class="table table-bordered">

                      <thead>
                      </thead>
                      <tbody>
                                  <tr>
                                        <th>Victim's Name</th>
                                        <td id="vicname"></td>
                                  </tr>
                                  <tr>
                                        <th>Gender of Victim</th>
                                        <td id="gen"></td>
                                  </tr>
                                  <tr>
                                        <th>Age</th>
                                        <td id="aged"></td>
                                  </tr>
                                  <tr>
                                        <th>Location</th>
                                        <td id="loca"></td>
                                  </tr>
                                  <tr>
                                        <th>Incident Type</th>
                                        <td id="inci"></td>
                                  </tr>
                                    <tr>
                                        <th>Respond Team</th>
                                        <td id="respond"></td>
                                  </tr>
                                  <tr>
                                        <th>Assesment</th>
                                        <td id="asses"></td>
                                  </tr>
                                  <tr>
                                        <th>Description</th>
                                        <td id=descrip></td>
                                  </tr>
                                  <tr> 
                                        <th>Remarks</th>
                                        <td id="rema"></td>
                                  </tr>
                                  <tr>
                                        <th>Image</th>
                                        <td id="imag"> <img id="frame" src="" width="100px" height="100px"/></td>
                                  </tr>
                      </tbody>
                                </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type ='button' name="first" id="first" class="btn btn-primary" onclick="document.getElementById('second').click()"> Submit </button>
                  </div>
              </div>
            </div>
          </div>
      <!--Modal ends here--->
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

<script type="text/javascript">
  $(document).on("click", ".open-modal", function () {

    var today = new Date();
    var x = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() ;
    var dateTime = date +' '+ time;
    var text = $('input[name="victimname"]').val();
    var agetext = $('input[name="age"]').val();
    var gende = $('input[name="gender"]').val();
    var incidenttext = $('input[name="incidentlocation"]').val();
    var respo = $('input[name="team"]').val();
    var incitype = $('input[name="incidentid"]').val();
   // var desi = $('input[name="descriptions"]').val();
    var rem = $('input[name="remarks"]').val();
    //var text_label = $('label[for="callfrom"]').text();
    //var text_data = '<p><strong>' + text_label + '</strong> : ' + text + '</p>';
    //var incident_label = $('label[for="incidentlocation"]').text();
    //var incident_data = '<p><strong>' + incident_label + '</strong> : ' + incidenttext + '</p>';

    //selection for incident type 
       var incidentval = $('#assesment option:selected').val();
       var incidentval_label = $('label[for="incidentid"]').text();
       var intval = '';
       if(incidentval == 'Major Injury') {
           intval = 'Major Injury';
       } else if(incidentval == 'Minor Injury') {
           intval = 'Minor Injury'; 
       } else if(incidentval == 3) {
           intval = 'Emergency Assistance';
       } else if(incidentval == 4) {
           intval = 'Highway Accident';
       } 
       var incidentval_data = '<p><strong>' + incidentval_label + '</strong> : ' + intval + '</p>';

       var remas = $('#remarks option:selected').val();
       var incidentval_label = $('label[for="incidentid"]').text();
       var intval = '';
       if(remas == 'Responded') {
           intval = 'Responded';
       } else if(incidentval == 'Not Found') {
           intval = 'Not Found'; 
       }
       var incidentval_data = '<p><strong>' + incidentval_label + '</strong> : ' + intval + '</p>';


       var descriptions = document.getElementById('descriptions');
          descriptions.onkeyup = descriptions.onkeypress = function(){
         document.getElementById('descrip').innerHTML = this.value;
        }

    
       $('#vicname').html(text);
       $('#gen').html(gende);
       $('#aged').html(agetext);
       $('#loca').html(incidenttext );
       $('#respond').html(respo);
       $('#inci').html(incitype );
       $('#asses').html(incidentval);
      // $('#descrip').html(desi );
       $('#rema').html(remas);
     
    // $("#modal-body").html(dateTime + text_data + radio_data + incidentval_data + optionval_data + vehicleval_data );   
     $('#modal').modal('show');

   });

</script>

<script>
  function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
  }
</script>

<script>
  $(".first").click(function(){
    $(".second").click(); 
    return false;
});  
</script>

<script>
  $(function () {
    $("#example1").DataTable({
       "paging": true,
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "ordering": true,
      "retreive": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
