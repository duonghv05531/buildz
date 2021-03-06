<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin/service.list', ['service' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->delay = $request->delay;
        $file = $request->file('image');
        $img = 'img/service/' . time() . '.' . $file->getClientOriginalExtension();
        $request->image->move(public_path('img/service'), $img);
        $service->img = $img;

        $service->save();
        return redirect()->route('service.index');
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
        $service = Service::find($id);
        return view('admin/service.edit', ['service' => $service]);
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
        $service = Service::find($id);

        if ($request->file('image')) {
            $file = $request->file('image');
            $img = 'img/service/' . time() . '.' . $file->getClientOriginalExtension();
            $request->image->move(public_path('img/service'), $img);
            $service->img = $img;
        } else {
            $service->img = $request->img;
        }
        $service->name = $request->name;
        $service->description = $request->description;
        $service->delay = $request->delay;
        $service->save();

        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.index');
    }
}
