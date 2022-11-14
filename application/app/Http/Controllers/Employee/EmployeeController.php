<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{


    public function index()
    {
        return view('employee-dashboard');
    }
    public function all()
    {
        return view('employee.all_employee');
    }
    public function holidays()
    {
        return view('employee.holidays');
    }
    public function profile()
    {
        return view('employee.profile');
    }
    public function leaves()
    {
        return view('employee.leaves');
    }
    public function leave_settings()
    {
        return view('employee.leave-settings');
    }
    public function attendance()
    {
        
        return view('employee.attendance');
    }
    public function departments()
    {
        return view('employee.departments');
    }
    public function designations()
    {
        return view('employee.designations');
    }
    public function timesheet()
    {
        return view('employee.timesheet');
    }
    public function overtime()
    {
        return view('employee.overtime');
    }
    public function salary()
    {
        return view('payroll.salary');
    }
    public function salary_settings()
    {
        return view('payroll.salary-settings');
    }
    public function salary_view()
    {
        return view('payroll.salary-view');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
