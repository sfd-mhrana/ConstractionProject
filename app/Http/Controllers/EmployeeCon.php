<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeReq;
use App\Models\EmployeeModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class EmployeeCon extends Controller
{
    public function index($id)
    {
        $this->data['employees'] = EmployeeModel::where('user_id', $id)->get();
        $this->data['user_id'] = $id;
        return view('employee/employeelist', $this->data);
    }

    public function create($id)
    {
        $this->data['projects'] = EmployeeModel::where('user_id', $id)->get();
        $this->data['user_id'] = $id;
        return view('employee/employeefrom', $this->data);
    }

    public function store(EmployeeReq $request, $id)
    {
        $randomprojectID = rand();
        $todayDate = date("Y-m-d");
        if (EmployeeModel::where('name', $request->input('name'))->where('phone', $request->input('phone'))->exists()) {
        } else {
            if($request->file('image')!=null){
                $filea = $request->file('image');
            $filesnameWithExt = $filea->getClientOriginalName();
            $filesname = pathinfo($filesnameWithExt, PATHINFO_FILENAME);
            $extensions = $filea->getClientOriginalExtension();
            $fielsNameToStore = $filesname . '_' . time() . '.' . $extensions;
            $data = $filea->storeAs('public/employeeImage/', $fielsNameToStore);

            $project = new EmployeeModel;
            $project->user_id = $id;
            $project->name = $request->input('NAME');
            $project->email = $request->input('email');
            $project->phone = $request->input('phone');
            $project->address = $request->input('address');
            $project->image = $fielsNameToStore;
            $project->position = $request->input('position');
            $project->basic_salary = $request->input('basic_salary');

            if ($project->save()) {
                Session::flash('success', 'Data Update sucess');
            } else {
                Session::flash('success', 'Data Not Update');
            }

        return  redirect()->to('/employee/' . $id);
            }
            else{
                echo 'file null';
            }
        }

    }
}
