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
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Pre-Information</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                    @foreach($rody as $result)
                    <div class="form-group">
                      <label for="gender">Victim's Gender</label>
                      <input type="text" placeholder="Gender" class="form-control" id="gender" name="gender" value="{{$result->victimgender}}" readonly>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Incident Location</label>
                      <input type="text" class="form-control" name='incidentlocation' placeholder="Incident Location" value="{{$result->incilocation}}" readonly>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="incidentid">Incident Type</label>
                        <input type="text" class="form-control" name='incidentid' placeholder="Incident Type" value="" readonly>      
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="team">Respond Team</label>
                        <input type="text" class="form-control" name='team' placeholder="Respond Team" value ="{{$result->team}}" readonly> 
                       <!-- <input type="text" class="form-control" name='roadate' id="roadate" value="{{$result->roadate}}" readonly> -->
                    </div>
                    @endforeach
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
            
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Visit <a href="/details">Caller Information</a> to make sure that you have correct data.
            </div>
          </div>
          <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
        <form  action="{{action('AccidentController@othersdetails')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">OB Incident</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <form action="" method="">
            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                <li class="nav-item li-tab">
                  <a class="nav-link active" id="mapcenter-tab" data-toggle="tab" href="#mapcenter" role="tab" aria-controls="mapcenter" aria-selected="true" style="color: black"><strong>Victim's Information</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"  style="color: black"><strong>Medical Assesment</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="color: black"><strong>Confirmation</strong></a>
                </li>
              </ul>
              <br>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="mapcenter" role="tabpanel" aria-labelledby="mapcenter-tab">
                   @foreach($rody as $r)
                  <input type="hidden" id="roadid" name="roadid" value="{{$r->roadid}}">
                    @endforeach
                    <input type="hidden" id="id" name="id" value="{{Auth::user()->id}}">
                    <input type="hidden" id="patientid" name="patientid" value="4">
                    <input type="hidden" id="incidentid" name="incidentid" value="5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-12">Name:</label>
                                <input type="text" id="victimname" name="victimname" class="form-control"> 
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-12">Address:</label>
                                <input type="text" id="vicaddress" name="vicaddress" class="form-control"> 
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-12">Age:</label>
                                <input type="text" id="vicage" name="vicage" class="form-control"> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-12">Phone Number:</label>
                                <input type="text" id="vicnumber" name="vicnumber" class="form-control" maxlength="11"> 
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-12">Time of Incident:</label>
                                <input type="time" id="timeincident" name="timeincident" class="form-control"> 
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-12">Time Cleared:</label>
                                <input type="time" id="timecleared" name="timecleared" class="form-control"> 
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-12">Type of Run:</label>
                                <select id="typerun" type="text" class="form-control" name="typerun"  required >
                                   <option value="">Select Type</option>
                                   <option value="Emergency Transport">Emergency Transport</option>
                                   <option value="Emergency Transfer">Emergency Transfer</option>
                                   <option value="No Transport">No Transport</option>
                                   <option value="Routine">Routine</option>
                                  </select> 
                            </div>
                        </div>

                        <div class="col-md-8 text-right">
                            <div id="button" style="postion: absolute; bottom: 0; right: 0;">
                                <label class="col-md-12">Click Me!</label>
                                <a type="button" class="btnNext" id="profile-tab" data-toggle="tab" href="#profile" role="tab"><img src="/images/arrow.png" style="width: 50px; height:30px;"></a>
                            </div>
                        </div>
                    </div>

           
                            
                       
                </div>
                <!-- Medical Assesment -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                       
       
                       <div class="col-md-4">
                           <div class="form-group">
                               <label class="col-md-12">Needed</label>
                                <input type="text" class="form-control" id="needed" name="needed"  required>
                           </div>
                       </div>
                    

                       
              
                    
                    <div class="col-md-4">
                      <div class="form-group">
                          <label class="col-md-12">Remarks</label>
                          <input type="text" class="form-control" id="remarks" name="remarks"  required>
                      </div>
                  </div>

                 
                   
                  <div class="col-md-4">
                    <div class="form-group"> 
                      <label for="images">Image input</label>
              
                          <input type="file"   id="images" name="images"  onchange="preview()">
                   
                      </div>
                    </div>

              </div>
                
                    <div class="row">
                 

                    
                       
                        <div class="col-md-12 text-right">
                            <div id="button">
                                <label class="col-md-12">Click Me!</label>
                                <a type="button" class="btnNext" id="contact-tab" data-toggle="tab" href="#contact" role="tab"><img src="/images/arrow.png" style="width: 50px; height:30px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <button type ="submit" class="btn btn-primary  btn-block" > Submit Report </button>
                </form>
                 
                </div>
                 
              </div>
              <!--------  End -->

          </div>
          <button type ="submit" name="second" id="second" class="btn btn-primary " style="display:none;" onclick="ExistingLogic()"> Sub </button>
         
          <!-- /.card-body-->
        </div>
        <!-- /.card <button  class="btn btn-primary btn-block open-modal">Confirm </button> -->
        
            
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

   
    


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
  $(document).on("click", ".btnNext", function () {
 
    var text = $('input[name="callfrom"]').val();
    var text_label = $('label[for="callfrom"]').text();
    var gender = $('input[name="victimgender"]').val();
    var incidenttext = $('input[name="incilocation"]').val();
    var call = $('input[name="calltime"]').val();
    var rema = $('input[name="remarks"]').val();

    var intval = $('input[name="phonum"]').val();
       //Relationship with the Victim
       var optionval = $('#levelcon option:selected').val();
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


</body>
</html>

  
 <script>
     $(".whereto").hide();
     $(".transport").click(function() {
    if($(this).is(":checked")) {
        $(".whereto").show();
        $('#signed').html('none');
    } else {
        $(".whereto").hide();
    }
   });   

   $(".signedup").hide();
     $(".alive").click(function() {
    if($(this).is(":checked")) {
        $(".signedup").show();
    } else {
        $(".signedup").hide();
    }
   }); 

   $(".involve").hide();
   $(".plate").hide();
     $(".vehicle").click(function() {
    if($(this).is(":checked")) {
        
        $(".involve").show();
        $(".plate").show();
    } else {
       
       $(".involve").hide();
       $(".plate").hide();
    }
   }); 
   
   $(".shock").hide();
     $(".numshock").hide();
     $(".death").hide();
     $(".timedeath").hide();
     $(".life").click(function() {
    if($(this).is(":checked")) {
        $(".shock").show();
        $(".numshock").show();
        $(".death").show();
        $(".timedeath").show();
    } else {
        $(".shock").hide();
        $(".numshock").hide();
        $(".death").hide();
     $(".timedeath").hide();
    }
   }); 

   $(".estimated").hide();
   $(".car").click(function(){
       if($(this).is(":checked")) {
        $(".estimated").show();
       }else{
        $(".estimated").hide();
       }
   });

   $(".burntbsa").hide();
   $(document).ready(function(){
    $('.selectburn').on('change', function() {
      if ( this.value == 'Burn')
      {
        $(".burntbsa").show();
      }
      else
      {
        $(".burntbsa").hide();
      }
    });
});
 </script>

 <script>
       
<script>