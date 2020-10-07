<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MCDRRMO | 401</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color: #E8E8E8">

     <!-- Content Wrapper. Contains page content -->
  <div class="container">
    

    <!-- Main content -->
    <section class="content" style="margin-top: 200px">
      <div class="error-page">
        <h2 class="headline text-warning"> 401</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Need to Contact Admin.</h3>

          <p>
            It looks like the Center is not yet on the list that is open. Please Call MCDRRMO to fixed.
            Meanwhile, you may <a href="/itstaff">return to select</a> or logout and get back.
          </p>

         
            <div class="input-group">

              <div class="input-group-append">
                <a href="{{ route('logout') }}" class="btn btn-warning"
                 onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                {{ __('Log out') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
             
                </button>
              </div>
            </div>
            <!-- /.input-group -->
       
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
</body>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

</html>