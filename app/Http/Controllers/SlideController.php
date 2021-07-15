<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        return view('admin/slide.list', ['slide' => $slide]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide = new Slide;
        $file = $request->file('img');
        $img = 'img/slide/' . time() . '.' . $file->getClientOriginalExtension();
        $request->img->move(public_path('img/slide'), $img);
        $slide->img = $img;
        $slide->content = $request->content;
        $slide->slogan = $request->slogan;
        $slide->slug = $request->slug;

        $slide->save();
        return redirect()->route('slide.index');
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
        $slide = Slide::find($id);

        return view('admin/slide.edit', ['slide' => $slide]);
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
        $slide = Slide::find($id);
        if ($request->file('img')) {
            $file = $request->file('img');
            $img = 'img/slide/' . time() . '.' . $file->getClientOriginalExtension();
            $request->img->move(public_path('img/slide'), $img);
            $slide->img = $img;
        } else {
            $slide->img = $request->img;
        }
        $slide->content = $request->content;
        $slide->slogan = $request->slogan;
        $slide->slug = $request->slug;
        $slide->save();
        return redirect()->route('slide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return redirect()->route('slide.index');
    }
}
