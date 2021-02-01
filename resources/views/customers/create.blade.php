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
            <div class="container mt-5">
                <form action="{{url('save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                      <h1 style="text-align:center">Customer Create</h1>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label> 
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"> 
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="number" name="phone_number" class="form-control" value="{{old('phone_number')}}"> 
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input type="checkbox" name="gender" class="" value="male">Male
                        <input type="checkbox" name="gender" class="" value="female">Female 
                    </div>
                    <div class="form-group">
                        <label for="">DOB</label>
                        <input type="date" name="dob" class="form-control" value="{{old('dob')}}"> 
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <select name="country" id="" class="form-control">
                           <option value="">Select Your Country</option>
                           <option value="India">India</option>
                           <option value="USA">USA</option>
                           <option value="Russia">Russia</option>
                           <option value="South_Africa">South Africa</option>
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








