<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view("departments.index", compact("departments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::whereNotIn('emp_id', function ($query) {
            $query->select('emp_id')
                ->from('departments');
        })->get();
        return view("departments.create", compact("employees"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'depart_name' => 'required',
            'depart_loca' => 'required',
            'leader_id' => 'required',
            'since' => 'required|date_format:Y-m-d',
        ]);
        $depart_name = $request->input('depart_name');
        $depart_loca = $request->input('depart_loca');
        $leader_id = $request->input('leader_id');
        $since = $request->input('since');

        DB::table('departments')->insert([
            'depart_name' => $depart_name,
            'depart_loca' => $depart_loca,
            'emp_id' => $leader_id,
            'since' => $since,

        ]);
        return redirect()->route('departments.index')->with('success','Department Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('departments.show',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        $employees = Employee::whereNotIn('emp_id', function ($query) {
            $query->select('emp_id')
                ->from('departments');
        })->get();
        return view('departments.edit',compact('department', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $depart_name = $request->input('depart_name');
        $depart_loca = $request->input('depart_loca');
        $leader_id = $request->input('leader_id');
        $since = $request->input('since');

        $validateData = $request->validate([
            'depart_name' => 'required',
            'depart_loca' => 'required',
            'leader_id' => 'required',
            'since' => 'required|date_format:Y-m-d',
        ]);

        $department->update([
            'depart_name' => $depart_name,
            'depart_loca' => $depart_loca,
            'emp_id' => $leader_id,
            'since' => $since,
        ]);
        return redirect()->route('departments.index')->with('success','Department Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('success','Department Data deleted successfully');
    }
}
