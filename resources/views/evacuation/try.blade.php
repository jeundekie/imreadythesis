<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{ action('ReportController@chartbar')}}" method="POST">
            @csrf
             <input type="hidden" id="id" name="id" value="1">
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
                 <textarea type="text" id="descriptions" name="description" class="form-control" required></textarea>
                </div>
              </div>
    
             </div>
    
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
    
             <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
    </div>
    
</body>
</html>