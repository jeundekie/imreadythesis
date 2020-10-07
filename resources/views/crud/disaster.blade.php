<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MCDRRMO | Dashboard</title>
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
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}"
  >
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
                      <p>Disaster Area</p>
                    </a>
                  </li>
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
            <h1>Accident Details</h1>
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
      
        <!-- SELECT2 EXAMPLE -->
      <form  action="{{ action('DisasterController@insrtdisaster')}}" method="post" >
          @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Disaster Report Information</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <input type="hidden" class="form-control" id="id" name="id" value="{{Auth::user()->id}}">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-md-6">Call From:</label>
                   <input type="text" class="form-control" id="callername" name="callername" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-md-6">Phone Number:</label>
                   <input type="text" class="form-control" id="callernum" name="callernum"  maxlength="11" required>
                   <span id="error_phone"></span>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-md-6">Reported Location</label>
                   <input type="text" class="form-control" id="dislocation" name="dislocation" required>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-md-6">Team Respondent:</label>
                  <select name="team" id="team" class="form-control" required>
                    <option value="">-- Select Option --</option>
                    <option value="RV1">RV1</option>
                    <option value="RV2">RV2</option>
                    <option value="RV3">RV3</option>
                    <option value="RV4">RV4</option>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-md-6">Coordinated</label>
                  <select name="coordinated" id="coordinated" class="form-control" required>
                    <option value="">-- Select Option --</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-md-6">Who Coor</label>
                  <input type="text" id="whocoor" name="whocoor" class="form-control">
                </div>
              </div>
            </div>
            
            <div class="row">
            

            <div class="col-md-4">
              <div class="form-group">
                <label class="col-md-6">Call Time</label>
                 <input type="time" class="form-control" id="calltime" name="calltime" required>
              </div>
            </div>

            
            <div class="col-md-4">
                <div class="form-group">
                  <label class="col-md-6">Disaster Type</label>
                  <select name="disasterid" id="disasterid" class="form-control" required>
                    <option value="">-- Select Option --</option>
                    <option value="1">Flood</option>
                    <option value="2">Fire</option>
                    <option value="3">Earthquake</option>
                  </select>
                </div>
              </div>


            </div>
             <input type="date" id="calldate" name="calldate">
             <input type="text" id="callyear" name="callyear" >
             <input type="hidden" id="remark" name="remark"  value="no">
             <input type="hidden" id="tag" name="tag"  value="none">


          </div>
          <button type ="submit" class="btn btn-primary" style="color: black">Submit Call </button>
          </form>
          <!-- /.card-body-->
        </div>
        <!-- /.card <button  class="btn btn-primary btn-block open-modal"> Confirm </button> -->
        
            <br>

             
        <div class="row">
            <div class="col-12">
              
                <!-- /.card-body -->
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Summary Information</h3>
  
                  
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
                      <th>Call From</th>
                      <th>Number</th>
                      <th>Location</th>
                      <th>Team</th>
                      <th>Coordinated</th>
                      <th>Date/Time</th>
                      <th>Tag</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                   <tbody>
                   
                    @foreach($disasters as $result)
                    <tr>
                      <td>{{$result->disid}}</td>
                      <td>{{$result->callername}}</td>
                      <td>{{$result->callernum}}</td>
                      <td>{{$result->dislocation}}</td>
                      <td>{{$result->team}}</td>
                      <td>{{$result->coordinated}}</td>
                      <td>{{$result->calldate}} {{$result->calltime}}</td>
                      <td>{{$result->tag}}</td>
                      <td>
                        <button href="javascript:void(0)" class="btn btn-info accidentbtn"> <i class="fa fa-plus"></i></button>
                      
                
                      <a href="#" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                   
                      
                      </td>
                    </tr>
                    @endforeach
                  
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Call From</th>
                        <th>Number</th>
                        <th>Location</th>
                        <th>Team</th>
                        <th>Coordinated</th>
                        <th>Date/Time</th>
                        <th>Tag</th>
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

     <!--Select Accident Modal -->
     <div class="modal fade " id="selectacc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Please Select to Proceed</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form  action="{{ action('AccidentController@kuha')}}" method="post" >
                @csrf
               
                 <input type="hidden" name="disid" id="roid">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-sm-12 control-label">Please Selet the Disaster</label>
                        <select id="disasterid" type="text" class="form-control" name="disasterid"  required >
                          <option value="">Select Type</option>
                          <option value="1">Flood</option>
                          <option value="2">Fire</option>
                          <option value="3">Earthquake</option>
                         </select> 
                      </div>
                    </div>
  
                  </div>
                  <!-- End row -->

                  <button type="submit" class="btn btn-primary">Proceed</button>
                </form>
                    
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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

<script type="text/javascript">
  $(document).on("click", ".open-modal", function () {
    var today = new Date();
    var x = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() ;
    var dateTime = date +' '+ time;
    var text = $('input[name="callfrom"]').val();
    var text_label = $('label[for="callfrom"]').text();
    var gender = $('input[name="victimgender"]').val();
    var incidenttext = $('input[name="incilocation"]').val();
    var call = $('input[name="calltime"]').val();
    var rema = $('input[name="remarks"]').val();

    var intval = $('input[name="phonum"]').val();
       //Relationship with the Victim
       var optionval = $('#relation option:selected').val();
       var optionval_label = $('label[for="relation"]').text();
       var optval = '';
       if(optionval == 'Family') {
           optval = 'Family';
       } else if(optionval == 'Friend') {
           optval = 'Friend';
       } else if(optionval == 'Good Samaritan') {
           optval = 'Good Samaritan';
       } 
       var optionval_data = '<p><strong>' + optionval_label + '</strong> : ' + optval + '</p>';

       //selection for the vehicle
       var vehicleval = $('#team option:selected').val();
       var vehicleval_label = $('label[for="team"]').text();
       var vehval = '';
       if(vehicleval == 'RV1') {
           vehval = 'RV1';
       } else if(vehicleval == 2) {
           vehval = 'RV2';
       } else if(vehicleval == 3) {
           vehval = 'RV3';
       } else if(vehicleval == 4) {
           vehval = 'RV4';
       } 
       var vehicleval_data = '<p><strong>' + vehicleval_label + '</strong> : ' + vehval + '</p>';
    
       
       var descriptions = document.getElementById('remarks');
          descriptions.onkeyup = descriptions.onkeypress = function(){
         document.getElementById('rems').innerHTML = this.value;
        }

      $('#from').html(text);
      $('#toc').html(call);
      //$('#rems').html(rema);
     $('#location').html(incidenttext);
     $('#relationship').html(optval);
     $('#typeincident').html(intval);
     $('#respond').html(vehicleval);
     $('#datetime').html(dateTime);
     $('#genvictim').html(gender);
     
    // $("#modal-body").html(dateTime + text_data + radio_data + incidentval_data + optionval_data + vehicleval_data );   
     $('#modal').modal('show');

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
      
    $(document).ready( function () {
      $('#example1').DataTable();
  
      $('#example1').on('click', '.accidentbtn', function () {
        
        $tr = $(this).closest('tr');
  
        var data = $tr.children("td").map(function () {
          return $(this).text();
        }).get();
  
        //console.log(data);
  
        $('#roid').val(data[0]);
        
        
  
        $('#selectacc').modal('show');      
      });
   });
  
  </script>

</body>
</html>

  
 