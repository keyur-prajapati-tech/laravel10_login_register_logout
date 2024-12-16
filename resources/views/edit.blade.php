<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE EMPLOYEE</title>

    <link rel="stylesheet" href="{{asset('BS/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">EDIT EMPLOYEE <a href="{{route('employees.index')}}" class="btn btn-danger float-end">BACK</a></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('employees.update',$employee->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE NAME</label>
                                <input type="text" class="form-control" name="name" value="{{$employee->name}}" placeholder="Enter Employee Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE EMAIL</label>
                                <input type="text" class="form-control" name="email" value="{{$employee->email}}" placeholder="Enter Employee Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE PHONE</label>
                                <input type="text" class="form-control" name="phone" value="{{$employee->phone}}" placeholder="Enter Employee Phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE IMAGE</label>
                                <input type="file" name="image" class="form-control">
                                <input type="text" class="form-control" value="{{$employee->image}}">
                                <img class="mt-2" src="{{url('./uploads/'.$employee->image)}}" alt="..." width="75px" height="75px">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE GENDER</label>
                                <br>
                                <input type="radio" name="gender" value="Male" {{$employee->gender === 'Male' ? 'checked' : ''}}> : Male &nbsp;
                                <input type="radio" name="gender" value="Female" {{$employee->gender === 'Female' ? 'checked' : ''}}> : Female
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE ADDRESS</label>
                                <textarea name="address" class="form-control" cols="10" rows="5" placeholder="Enter Employee Address">{{$employee->address}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE DESIGNATION</label>
                                <select name="designation" class="form-control">
                                    <option value="FULL-STACK TECHNOLOGY" {{$employee->designation === 'FULL-STACK TECHNOLOGY' ? 'selected' : ''}}>FULL-STACK TECHNOLOGY</option>
                                    <option value="ASP.NET TECHNOLOGY" {{$employee->designation === 'ASP.NET TECHNOLOGY' ? 'selected' : ''}}>ASP.NET TECHNOLOGY</option>
                                    <option value="MERN/MEAN TECHNOLOGY" {{$employee->designation === 'MERN/MEAN TECHNOLOGY' ? 'selected' : ''}}>MERN/MEAN TECHNOLOGY</option>
                                    <option value="FRONT-END TECHNOLOGY" {{$employee->designation === 'FRONT-END TECHNOLOGY' ? 'selected' : ''}}>FRONT-END TECHNOLOGY</option>
                                    <option value="BACK-END TECHNOLOGY" {{$employee->designation === 'BACK-END TECHNOLOGY' ? 'selected' : ''}}>BACK-END TECHNOLOGY</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE SKILLS</label><br>
                                <input type="checkbox" name="skills[]" value="CRICKET" {{in_array('CRICKET',explode(',',$employee->skills)) ? 'checked' : ''}}> : CRICKET&nbsp;
                                <input type="checkbox" name="skills[]" value="PLAYING GITAR" {{in_array('PLAYING GITAR',explode(',',$employee->skills)) ? 'checked' : ''}}> : PLAYING GITAR&nbsp;
                                <input type="checkbox" name="skills[]" value="READ BOOK" {{in_array('READ BOOK',explode(',',$employee->skills)) ? 'checked' : ''}}> : READ BOOK&nbsp;
                                <input type="checkbox" name="skills[]" value="TRAVELING" {{in_array('TRAVELING',explode(',',$employee->skills)) ? 'checked' : ''}}> : TRAVELING&nbsp;
                                <input type="checkbox" name="skills[]" value="LISTING MUSIC" {{in_array('LISTING MUSIC',explode(',',$employee->skills)) ? 'checked' : ''}}> : LISTING MUSIC
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE SALARY</label>
                                <input type="number" name="salary" class="form-control" placeholder="Enter Employee Salary" value="{{$employee->salary}}" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-warning">EDIT EMPLOYEE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>