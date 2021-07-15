<?php

namespace App\Http\Controllers;

use App\Models\SlideEngineer;
use Illuminate\Http\Request;

class SlideeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engineer = SlideEngineer::all();
        return view('admin/slidee.list', ['engineer' => $engineer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/slidee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slidee = new SlideEngineer;

        $file = $request->avatar;
        $avatar = 'img/slidee/' . time() . '.' . $file->getClientOriginalExtension();
        $request->avatar->move(public_path('img/slidee'), $avatar);
        $slidee->avatar = $avatar;
        $slidee->name = $request->name;
        $slidee->position = $request->position;

        $slidee->save();
        return redirect()->route('slidee.index');
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
        $slidee = SlideEngineer::find($id);
        return view('admin/slidee.edit', ['slidee' => $slidee]);
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
        $slidee = SlideEngineer::find($id);
        $slidee->name = $request->name;

        if ($request->file('avatar')) {
            $file = $request->avatar;
            $avatar = 'img/slidee/' . time() . '.' . $file->getClientOriginalExtension();
            $request->avatar->move(public_path('img/slidee'), $avatar);
            $slidee->avatar = $avatar;
        } else {
            $slidee->avatar = $request->avatar;
        }
        $slidee->position = $request->position;
        $slidee->save();
        return redirect()->route('slidee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $engineer = SlideEngineer::find($id);
        $engineer->delete();
        return redirect()->route('slidee.index');
    }
}
