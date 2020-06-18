@extends('home.includes') 
@section('content') 
      <div class="container  ">
        <div class="row">
          <div class="col-md-12 center">
            <div class="col-md-12 form-wrap"> 
             
                 <div class="col-md-10 form-group text-center font-weight-bold font-italic ">
                     <h2 class="mb-5">Teacher Register </h2> 
                    </div>
                  <h1>{{Session::get('message')}}</h1>
                  <form action="{{route('teacher-register')}}"  method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="name"> Name</label>
                      <input type="text" name="name" class="form-control py-2 px-0" placeholder="name" required>
                                 @error('name')
                                    <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                      
                    </div>
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="name"> surame</label>
                      <input type="hide" name="surname" class="form-control py-2 px-0" placeholder="surname" value="Teacher" > 
                                 
                      
                    </div>   

                        <div class="col-md-5 col-sm-10 form-group">
                      <label for="department">Department</label>
                      
                      <select name="department" name="department" id="department"  class="form-control" required>
                         <option value="">--select--</option>
                        @foreach ($data as $department)
                            <option value="{{$department->id}}">{{$department->department}}</option>
                        @endforeach
                        
                      </select>
                    </div>
                  
               
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="home">Address</label>
                      <input type="text" name="home" class="col-md-6 form-control py-2 px-5">
                           @error('home')
                                    <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="FatherName">FatherName</label>
                      <input type="text" name="FatherName" class="form-control py-2 px-0" required>
                          @error('FatherName')
                                    <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    {{-- <div class="col-md-5 col-sm-10 form-group">
                      <label for="FatherMobile">Father's Mobile No.</label>
                      <input type="text" name="FatherMobile" class="form-control py-2 px-0" minlength="11" maxlength="11" required>
                          @error('FatherMobile')
                                    <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div> --}}
                  
               
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="MotherName">Mother's Name</label>
                      <input type="text" name="MotherName" class="col-md-6 form-control py-2 px-5" required>
                          @error('MotherName')
                                    <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    {{-- <div class="col-md-5 col-sm-10 form-group">
                      <label for="MotherMobile">Mother's Mobile No.</label>
                      <input type="text" name="MotherMobile" class="form-control py-2 px-0" minlength="11" maxlength="11">
                          @error('MotherMobile')
                                    <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div> --}}
                  
               
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="fatherProfession">father's Profession</label>
                      <input type="text" name="fatherProfession" class="col-md-6 form-control py-2 px-5">
                        @error('fatherProfession')
                                    <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="MotherProfession">Mother's Profession</label>
                      <input type="text" name="MotherProfession" id="MotherProfession" class="form-control py-2 px-0">
                      @error('MotherProfession')
                      <span>
                      <strong>{{$message}}</strong>
                      </span>
                      @enderror
                    </div>
                  
               
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="name">Nationality</label>
                      <input type="text" id="nationality" name="nationality"class="col-md-6 form-control py-2 px-5">
                      @error('nationality')
                     <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                      @enderror
                    </div>
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="name">Education Info</label>
                      <input type="text" id="education_info" name="education_info"class="col-md-6 form-control py-2 px-5">
                      @error('education_info')
                     <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                      @enderror
                    </div>
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="name">previous_job</label>
                      <input type="text" id="previous_job" name="previous_job"class="col-md-6 form-control py-2 px-5">
                      @error('previous_job')
                     <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                      @enderror
                    </div>
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="name">Email Address</label>
                      <input type="text" id="email" name="email"class="col-md-6 form-control py-2 px-5">
                      @error('email')
                     <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                      @enderror
                    </div>

                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="Mobile">SMS Mobile No.</label>
                      <input type="text" name="Mobile" class="col-md-6 form-control py-2 px-5" minlength="11" maxlength="11" required>
                        @error('Mobile')
                                    <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="name">Joining	 Date</label>
                      <input type="date" date="date" name="date"class="col-md-6 form-control py-2 px-5" required>
                         @error('date')
                                    <span >
                                        <strong class=" text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                      
                    </div>
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="StudentPhoto">Photo</label>
                      <input type="file" name="photo" id="Photo" class="col-md-6 form-control py-2 px-5">
                      @error('photo')
                      <span>
                      <strong>{{$message}}</strong>
                      </span>
                      @enderror
                      
                    </div>
                
                    {{-- <div class="col-md-5 col-sm-10 form-group">
                      <label for="Shift">Shift</label>
                      <select name="Shift" id=""  class="form-control" required>
                        <option value="">--select</option>
                        <option value="1">Day</option>
                        <option value="2">Evening</option>
                      </select>
                    </div> --}}
                    {{-- <div class="col-md-5 col-sm-10 form-group">
                      <label for="intake">Intake</label>
                      <select name="intake" id="intake" class="form-control" required>
                        <option value="">select</option>
                      </select> --}}
                    {{-- </div>
                    <div class="col-md-5 col-sm-10 form-group">
                      <label for="section">section</label>
                     
                      <select name="section" id="section" class="form-control" required>
                        <option value="">--select--</option>
                      </select>
                    </div> --}}
                 
                
                  
                    <div class="col-md-10 form-group">
                      <input type="submit" class="btn btn-block btn-info px-5 py-2" > 
                    </div>
                  
                 
                </form>
              </div>
          </div>
        </div>
      </div>

      <script>


  //  ----------click department intake list show--------------------

      $("#department").change(function(){
        $data=$(this).val();
        $.get("{{route('intake-list')}}",{id:$data},function(data){
          $("#intake").empty().html(data);
        })
         
      })
        //-------  select intake show section ---------------------
        $("#intake").change(function(){
          $intakeid=$(this).val();
          $.get("{{route('intakewise-sectonList')}}",{id:$intakeid},function(data){
            $("#section").empty().html(data); 
         
          })

        }) 



      </script>

    
@endsection