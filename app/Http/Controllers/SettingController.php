<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $set = Setting::all();
        return view('admin/setting.list', ['set' => $set]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $set = new Setting;
        $set->work_time = $request->work_time;
        $set->hotline = $request->hotline;
        $set->address = $request->address;
        $set->email = $request->email;
        $set->site_name = $request->site_name;
        $set->year = $request->year;

        $set->save();

        return redirect()->route('setting.index');
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
        $set = Setting::find($id);
        return view('admin/setting.edit', ['set' => $set]);
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
        $set = Setting::find($id);
        $set->work_time = $request->work_time;
        $set->hotline = $request->hotline;
        $set->address = $request->address;
        $set->email = $request->email;
        $set->site_name = $request->site_name;
        $set->year = $request->year;

        $set->save();
        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $set = Setting::find($id);
        $set->delete();
        return redirect()->route('setting.index');
    }
}
