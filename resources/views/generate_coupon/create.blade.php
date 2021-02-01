<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Material Dash</title>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   <div class="body-wrapper">

    <div class="main-wrapper mdc-drawer-app-content">
      
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <div class="card mb-3">
          <div class="card-body">
          @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            @if(Session::has('message'))
             <div class="alert alert-{{Session::get('class')}} alert-dismissible fade show mb-5" role="alert">
                  {{Session::get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
             </div>
           @endif 
            <div class="container mt-5">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value=""> 
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <textarea rows="4" cols="50" name="email" class="form-control" value="">{{old('description')}}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Phone_Number</label>
                        <input type="number" name="number" class="form-control" value="{{old('number')}}"> 
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input type="checkbox" name="gender[]" class="form-control" value="male">Male
                        <input type="checkbox" name="gender[]" class="form-control" value="female">Female 
                    </div>
                    <div class="form-group">
                        <label for="">DOB</label>
                        <input type="date" name="date" class="form-control" value="{{old('date')}}"> 
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <select name="video_events_id" id="" class="form-control">
                           <option value="">Select Video Events</option>
                           <option value="">India</option>
                           <option value="">USA</option>
                           <option value="">Russia</option>
                           <option value="">South Africa</option>
                        </select> 
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Save</button>  
                </form> 
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
</body>
</html>