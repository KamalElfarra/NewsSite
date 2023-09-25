<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Models\Category;

use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_data = Sport::paginate(5);
        return view("sport.table",compact("get_data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view("sport.create",compact("category"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sport = new Sport();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\Sport",$photo);

        $sport->title = $request->title;
        $sport->content = $request->content;
        $sport->photo = $path;
        $sport->category_id = $request->category_id;
        $sport->save();
        return redirect("/create/sport");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function info($id)
    {
        $info = Sport::where("id",$id)->first();
        $sport = Sport::take(3)->get();
        $related = Sport::orderBy("id","desc")->take(3)->get();
        return view("sport.info",compact("info","sport","related"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Sport::where("id",$id)->first();
        $all = Category::all();
        return view("sport.edit",compact("edit","all"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
        $update = Sport::where("id",$id)->first();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\Sport",$photo);

        $update->title = $request->title;
        $update->content = $request->content;
        $update->photo = $path;
        $update->category_id = $request->category_id;
        $update->save();
        return redirect("/view/sport");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $delete = Sport::where("id",$id)->first();
        $delete->destroy($id);
        $delete->save();
        return redirect("/view/sport");

    }

    public function single(){

        $sport = Sport::take(3)->get();
        $all = Sport::paginate(4);
        $latest = Sport::latest()->first();

        return view("sport.single_page",compact("sport","all","latest"));

    }
}
