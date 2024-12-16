<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::orderBy('id','ASC')->get();

        return view('list',['employees'=>$employees]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->gender = $request->gender;
        $employee->address = $request->address;
        $employee->designation = $request->designation;
        $employee->salary = $request->salary;

        $checkbox_data = $request->skills;
        $employee->skills = implode(",",$checkbox_data);

        if($request->image){
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time().'.'.$ext;
            $request->image->move(public_path().'/uploads/',$newFileName);
            $employee->image = $newFileName;
        }

        $employee->save();

        return redirect()->route('employees.index')->with('success','Employees Added Successfully...!');
    }

    public function delete($id){
        $employee = Employee::findOrFail($id);

        File::delete(public_path().'/uploads/'.$employee->image);

        $employee->delete();

        return redirect()->route('employees.index')->with('success','Employees Deleted Successfully...!');
    }

    public function edit($id){
        $employee = Employee::findOrFail($id);

        return view('edit',['employee'=>$employee]);
    }

    public function update($id,Request $request){
        $employee = Employee::findOrFail($id);

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->gender = $request->gender;
        $employee->address = $request->address;
        $employee->designation = $request->designation;
        $employee->salary = $request->salary;

        $checkbox_data = $request->skills;
        $employee->skills = implode(",",$checkbox_data);

        if($request->image){
            $oldImage = $employee->image;

            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time().'.'.$ext;
            $request->image->move(public_path().'/uploads/',$newFileName);
            $employee->image = $newFileName;

            File::delete(public_path().'/uploads/'.$oldImage);
        }

        $employee->save();

        return redirect()->route('employees.index')->with('success','Employees Updated Successfully...!');
    }

    public function searchbyname(Request $request){
        $search_data = $request->input('search_input');

        $search_record = Employee::orderBy('id')->where('name','like','%'.$search_data.'%')->get();

        return view('search',['search_record'=>$search_record]);
    }
}
