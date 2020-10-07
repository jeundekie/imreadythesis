@extends('layouts.admin')
  

@section('content')

<div class="jumbotron">
  <header class="text-center p-1 text-white bg-dark">
      <h4>Caller Information</h4>
  </header>
<form action = "#" method = "">
      @csrf
  <div class="form-group">
      <div class="row">
          <div class="col-4">
               <label>Incident Location</label>
               <input type="text" class="form-control" name='incidentlocation' placeholder="Incident Location"  required>
          </div>
          <div class="col-3">
              <label>Incident Type</label>
              <input type="text" class="form-control" name='incidenttype' placeholder="Incident Type"  required>
         </div>
         <div class="col-3">
              <label>Call Received From</label>
              <input type="text" class="form-control" name='callrf' placeholder="Call Received From"  required>
          </div>
          <div class="col-2">
              <label>Vehicle</label>
              <input type="text" class="form-control" name='vehicle' placeholder="Vehicle"  required>
          </div>
      </div>
  </div>
      <div class="form-group">
          <div class="row">
              <div class="col-3">
                  <label>First Name</label>
                  <input type='text'class="form-control" name='firstname' placeholder="First Name" required >
              </div>
              <div class="col-3">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name='lastname' placeholder="Last Name" required>
              </div>
              <div class="col-2">
                  <label>Gender</label>
                  <select class="form-control" name="gender" required>
                      <option >Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                  </select>   
              </div>
              <div class="col-1">
                  <label>Age</label>
                  <input type="text" class="form-control" name='age' placeholder="Age" required>
              </div>
              <div class="col-3">
                  <label>Date:</label>
                  <input type="date" class="form-control" name='date' id="myDate" required>
              </div>
          </div>
      </div>
      <header class="">
          <h6>PRIMARY ASESSMENT</h6>
      </header>

      
      <div class="form-group">
          <div class="row">
              <div class="col-4">
                  <button type ='submit' name="submit" class="btn btn-primary"> Submit </button>
              </div>
           </div>
      </div>
</form>
</div>

@endsection

