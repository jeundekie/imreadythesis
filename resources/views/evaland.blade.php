<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MCDRRMO | Select</title>
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
<body>

     <!-- Modal -->
    <!-- Update Assigned Modal -->
    <div class="modal fade " id="myModal" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hellow! {{ Auth::user()->name }}</h5>
            </div>
            <div class="modal-body">
            
            <form action="{{ action('SelectController@selectcenter')}}" method="post">
             @csrf
           
                <h5> Please Select Center You Want to Update </h5>
                <br>
                @include('inc.messages')
                <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                <select id="centerid" type="text" class="form-control" name="centerid"  required >
                    <option value="">Select Center</option>
                    @foreach($selects as $sol)
                   <option value="{{$sol->centerid}}">{{$sol->centername}}</option>
                    @endforeach
                   </select> 
                </div>
                </div>
                </div>
                
                <h6>Note: if you cannot find the center please click the button to search your assigned center</h6>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#activate">
                                 Activate Center
                              </button>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
             <a href="{{ route('logout') }}" id="logo" class="btn btn-secondary"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Cancel') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
           
             
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal -->
     <!-- End Modal -->



     <!-- Activate Center -->
    <div class="modal fade " id="activate" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
           
            <div class="modal-body">
            <form action="{{ action('SelectController@updatecenter')}}" method="post">
             @csrf
                <input type="hidden"  name="contactperson" value="{{Auth::user()->name}}">
                <input type="hidden"  name="phonenumber" value="{{Auth::user()->userphone}}">
                <h5> Please Select Center You Want to Activate </h5>
                <br>
                <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                  <select id="centerid" type="text" class="form-control" name="centerid"  required >
                    <option value="">Select Center</option>  
                    @foreach($inactive as $an)
                   <option value="{{$an->centerid}}">{{$an->centername}}</option>
                    @endforeach 
                  </select> 
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-12">Best Time to Contact you</label>
                    <input type="time" class="form-control" id="timefrom" name="timefrom" required>
                  </div>
                </div> 
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-12">To</label>
                    <input type="time" class="form-control" id="timeto" name="timeto" required>
                  </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
             
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal -->
    
</body>
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
</html>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
  </script>

<script>
    $(function(){
    $('a#logo').click(function(){
        if(confirm('Are you sure you want to cancel? It will logout')) {
            return true;
        }

        return false;
    });
});
</script>