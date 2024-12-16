<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD NEW EMPLOYEE</title>

    <link rel="stylesheet" href="{{asset('BS/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">ADD NEW EMPLOYEE <a href="{{route('employees.index')}}" class="btn btn-danger float-end">BACK</a></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE NAME</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Employee Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE EMAIL</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Employee Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE PHONE</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter Employee Phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE IMAGE</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE GENDER</label>
                                <br>
                                <input type="radio" name="gender" value="Male"> : Male &nbsp;
                                <input type="radio" name="gender" value="Female"> : Female
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE ADDRESS</label>
                                <textarea name="address" class="form-control" cols="10" rows="5" placeholder="Enter Employee Address"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE DESIGNATION</label>
                                <select name="designation" class="form-control">
                                    <option value="FULL-STACK TECHNOLOGY">FULL-STACK TECHNOLOGY</option>
                                    <option value="ASP.NET TECHNOLOGY">ASP.NET TECHNOLOGY</option>
                                    <option value="MERN/MEAN TECHNOLOGY">MERN/MEAN TECHNOLOGY</option>
                                    <option value="FRONT-END TECHNOLOGY">FRONT-END TECHNOLOGY</option>
                                    <option value="BACK-END TECHNOLOGY">BACK-END TECHNOLOGY</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE SKILLS</label><br>
                                <input type="checkbox" name="skills[]" value="CRICKET"> : CRICKET&nbsp;
                                <input type="checkbox" name="skills[]" value="PLAYING GITAR"> : PLAYING GITAR&nbsp;
                                <input type="checkbox" name="skills[]" value="READ BOOK"> : READ BOOK&nbsp;
                                <input type="checkbox" name="skills[]" value="TRAVELING"> : TRAVELING&nbsp;
                                <input type="checkbox" name="skills[]" value="LISTING MUSIC"> : LISTING MUSIC
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">EMPLOYEE SALARY</label>
                                <input type="number" name="salary" class="form-control" placeholder="Enter Employee Salary" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">ADD EMPLOYEE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>