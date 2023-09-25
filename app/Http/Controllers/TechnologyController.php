<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use App\Models\Category;

use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_data = Technology::paginate(5);
        return view("technology.table",compact("get_data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view("technology.create",compact("category"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tech = new Technology();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\Technology",$photo);

        $tech->title = $request->title;
        $tech->content = $request->content;
        $tech->photo = $path;
        $tech->category_id = $request->category_id;
        $tech->save();
        return redirect("/create/technology");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function info($id)
    {
        $info = Technology::where("id",$id)->first();
        $technology = Technology::take(3)->get();
        $related = Technology::orderBy('id','desc')->take(3)->get();

        return view("technology.info",compact("info","technology","related"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Technology::where("id",$id)->first();
        $all = Category::all();
        return view("technology.edit",compact("edit","all"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update = Technology::where("id",$id)->first();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\Technology",$photo);

        $update->title = $request->title;
        $update->content = $request->content;
        $update->photo = $path;
        $update->category_id = $request->category_id;
        $update->save();
        return redirect("/view/technology");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Technology::where("id",$id)->first();
        $delete->destroy($id);
        $delete->save();
        return redirect("/view/technology");

    }

    public function single(){

        $technology = Technology::take(3)->get();
        $all = Technology::paginate(4);
        $latest = Technology::latest()->first();

        return view("technology.single_page",compact("technology","all","latest"));

    }
}
