<?php

namespace App\Http\Controllers;

use App\Models\Economy;
use App\Models\Category;

use Illuminate\Http\Request;

class EconomyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $get_data = Economy::paginate(5);
        return view("economy.table",compact("get_data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view("economy.create",compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $economy = new Economy();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\Economy",$photo);

        $economy->title = $request->title;
        $economy->content = $request->content;
        $economy->photo = $path;
        $economy->category_id = $request->category_id;
        $economy->save();
        return redirect("/create/economy");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Economy  $economy
     * @return \Illuminate\Http\Response
     */
    public function info($id)
    {

        $info = Economy::where("id",$id)->first();
        $economy = Economy::take(3)->get();
        $related = Economy::orderBy("id","desc")->take(3)->get();

        return view("economy.info",compact("info","economy","related"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Economy  $economy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Economy::where("id",$id)->first();
        $all = Category::all();

        return view("economy.edit",compact("edit","all"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Economy  $economy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Economy::where("id",$id)->first();
        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\Economy",$photo);

        $update->title = $request->title;
        $update->content = $request->content;
        $update->photo = $path;
        $update->category_id = $request->category_id;
        $update->save();
        return redirect("/view/economy");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Economy  $economy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Economy::where("id",$id)->first();
        $delete->destroy($id);
        $delete->save();
        return redirect("/view/economy");
    }

    public function single(){

        $economy = Economy::take(3)->get();
        $all = Economy::paginate(4);
        $latest = Economy::latest()->first();

        return view("economy.single_page",compact("economy","all","latest"));

    }
}
