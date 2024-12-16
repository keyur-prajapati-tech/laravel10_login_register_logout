<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH BY NAME</title>

    <link rel="stylesheet" href="{{asset('BS/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">SEARCH BY NAME <a href="{{route('employees.index')}}" class="btn btn-danger float-end">GO TO HOME PAGE</a></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('employees.searchbyname')}}" method="get" class="d-flex gap-3" style="border:3px solid #000;padding:10px;border-Radius:5px;">
                            @csrf
                            <input type="text" name="search_input" class="form-control" placeholder="SEARCH HERE...!">
                            <button type="submit" class="btn btn-success">SEARCH</button>
                        </form>

                        <hr>

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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($search_record as $employee)
                                <tr>
                                    <td>{{$employee->id}}</td>
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