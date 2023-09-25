<?php

namespace App\Http\Controllers;

use App\Models\Popular;
use App\Models\Category;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_all = Popular::paginate(5);
       return view("popular.table",compact("get_all"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all = Category::all();
        return view("popular.create",compact("all"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $popular = new Popular();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\Popular",$photo);

        $popular->title = $request->title;
        $popular->content = $request->content;
        $popular->photo = $path;
        $popular->category_id = $request->category_id;
        $popular->save();
        return redirect("/create/popular");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function info($id)
    {
        $info = Popular::where("id",$id)->first();
        $get_data = Popular::take(3)->get();
        $related = Popular::orderBy("id","desc")->take(3)->get();
        return view("popular.info",compact("info","get_data","related"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function edit(Popular $popular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Popular $popular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popular $popular)
    {
        //
    }
}
