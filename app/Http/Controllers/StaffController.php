<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::join('departments', 'staff.department', '=', 'departments.id')
            ->join('positions', 'staff.position', '=', 'positions.id')
            ->join('salaries', 'positions.id', '=', 'salaries.position_id')
            ->select('staff.*', 'departments.name as department_name', 'salaries.factor', 'positions.name as position_name')
            ->get();
        return view('admin/staff.list', ['staff' => $staff]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        $position = Position::all();
        return view('admin/staff.create', ['department' => $department, 'position' => $position]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new Staff;
        $file = $request->file('avatar');
        $avatar = 'img/staff/' . time() . '.' . $file->getClientOriginalExtension();
        $request->avatar->move(public_path('img/staff'), $avatar);
        $staff->avatar = $avatar;
        $staff->name = $request->name;
        $staff->department = $request->department;
        $staff->position = $request->position;
        $staff->age = $request->age;
        $staff->address = $request->address;
        $staff->phone = $request->phone;
        $staff->bank_number = $request->bank_number;
        $staff->email = $request->email;
        $staff->save();
        return redirect()->route('staff.index');
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
        $department = Department::all();
        $position = Position::all();
        $staff = Staff::find($id);
        return view('admin/staff.edit', ['department' => $department, 'position' => $position, 'staff' => $staff]);
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
        $staff = Staff::find($id);
        $staff->name = $request->name;
        $staff->department = $request->department;
        $staff->position = $request->position;
        $staff->age = $request->age;
        $staff->address = $request->address;
        $staff->phone = $request->phone;
        $staff->bank_number = $request->bank_number;
        $staff->email = $request->email;

        $staff->save();
        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect()->route('staff.index');
    }
}
