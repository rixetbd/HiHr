<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function store(Request $request)
    {

        Attendance::insert([
            'employee_id'=>Auth::id(),
            'status'=>'1',
            'created_at'=>Carbon::now(),
        ]);


        // $time  = Carbon::now();
        // // $diff_in_hours = $to->diffInHours($from);
        // // $diff_in_hours = $start->diff($end)->format('%H:%I:%S');
        // $diff_in_hours = $to->diffInSeconds($end);



        // dd($diff_in_hours);

        return response()->json([
            // 'time'=>gmdate('H:i:s', $diff_in_hours),
            // 'date'=>Carbon::now()->toDateString(),
        ]);
    }







    public function activity(Request $request)
    {

        $attendance_data = Attendance::where('employee_id', Auth::id())->whereDate('created_at', Carbon::today())->get();


        $attendance_table_data = "";

        foreach ($attendance_data as $key => $value) {
            $attendance_table_data .= "<tr><td>".($key+1)."</td><td>".$value->employee_id."</td><td>10 AM</td><td>7 PM</td><td>9 hrs</td><td>1 hrs</td><td>0</td></tr>";
        }



        // $time  = Carbon::now();
        // // $diff_in_hours = $to->diffInHours($from);
        // // $diff_in_hours = $start->diff($end)->format('%H:%I:%S');
        // $diff_in_hours = $to->diffInSeconds($end);

        return response()->json([
            'attendance_data'=>$attendance_data,
            'attendance_table_data'=>$attendance_table_data,
        ]);
    }
}
