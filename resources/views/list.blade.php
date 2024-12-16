<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST OF EMPLOYEE</title>

    <link rel="stylesheet" href="{{asset('BS/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">DETAIL LIST OF EMPLOYEE <a href="{{route('employees.create')}}" class="btn btn-primary float-end">ADD EMPLOYEE</a></h3>
                    </div>
                    <hr>
                    <div class="d-flex justify-between">
                        <a href="{{route('employees.searchbyname')}}" style="font-weight:800;margin:5px 15px;text-decoration:none">GO TO SEARCH PAGE</a>
                        <a href="{{route('admins.login')}}" style="font-weight:800;margin:5px 15px;text-decoration:none">GO TO ADMIN LOGIN PAGE</a>
                        <a href="{{route('admins.register')}}" style="font-weight:800;margin:5px 15px;text-decoration:none">GO TO USER LOGIN PAGE</a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>IMAGE</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>PHONE</th>
                                    <th>GENDER</th>
                                    <th>ADDRESS</th>
                                    <th>DESIGNATION</th>
                                    <th>SKILLS</th>
                                    <th>SALARY</th>
                                    <th>CREATED DATE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr valign="middle">
                                    <td><b>{{$employee->id}}</b></td>
                                    <td>
                                        <img src="{{url('./uploads/'.$employee->image)}}" alt="..." width="70" height="70">
                                    </td>
                                    <td><b>{{$employee->name}}</b></td>
                                    <td><b>{{$employee->email}}</b></td>
                                    <td>+91 <b>{{$employee->phone}}</b></td>
                                    <td><b>{{$employee->gender}}</b></td>
                                    <td><b>{{$employee->address}}</b></td>
                                    <td><b>{{$employee->designation}}</b></td>
                                    <td><b>{{$employee->skills}}</b></td>
                                    <td><b>{{$employee->salary}} RS/-</b></td>
                                    <td><b>{{$employee->created_at}}</b></td>
                                    <td class="d-flex gap-2">
                                        <a href="{{route('employees.edit',$employee->id)}}"><button class="btn btn-warning">EDIT</button></a>
                                        <a href="{{route('employees.delete',$employee->id)}}"><button class="btn btn-danger">REMOVE</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>