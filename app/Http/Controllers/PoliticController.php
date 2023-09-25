<?php

namespace App\Http\Controllers;

use App\Models\Politic;
use App\Models\Category;

use Illuminate\Http\Request;

class PoliticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_all = Politic::paginate(5);
        return view("politic.table",compact("get_all"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all = Category::all();
        return view("politic.create",compact("all"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $politic = new Politic();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\politic",$photo);

        $politic->title = $request->title;
        $politic->content = $request->content;
        $politic->photo = $path;
        $politic->category_id = $request->category_id;
        $politic->save();
        return redirect("/create/politic");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function show(Politic $politic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Politic::where("id",$id)->first();
        $all = Category::all();
        return view("politic.edit",compact("edit","all"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update = Politic::where("id",$id)->first();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\politic",$photo);

        $update->title = $request->title;
        $update->content = $request->content;
        $update->photo = $path;
        $update->category_id = $request->category_id;
        $update->save();
        return redirect("/view/politic");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Politic  $politic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Politic::where("id",$id)->first();
        $destroy->destroy($id);
        $destroy->save();
        return redirect("/view/politic");

    }

    public function info($id){

        $info = Politic::where("id",$id)->first();
        $politic = Politic::take(3)->get();
        $related = Politic::orderBy("id","desc")->take(3)->get();

        return view("politic.info",compact("info","politic","related"));

    }

    public function single(){

        $politic = Politic::take(3)->get();
        $all = Politic::paginate(4);
        $latest = Politic::latest()->first();

        return view("politic.single_page",compact("politic","all","latest"));

    }
}
