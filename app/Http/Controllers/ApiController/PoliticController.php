<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;

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

        return response()->json([
            $get_all,
            "msg"=> "the data was returned"
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all = Category::where("name","السياسة")->first();
        return response()->json([
            $all,
            "msg"=> "the data was returned"
        ],200);

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
        $path = $request->photo->move("Api_Images",$photo);

        $politic->title = $request->title;
        $politic->content = $request->content;
        $politic->photo = $path;
        $politic->category_id = $request->category_id;
        $politic->save();

        return response()->json([
            $politic,
            "msg"=> 'the data was stored successfully'
        ],200);

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
        $all = Category::where('name','السياسة')->first();
        return response()->json([
            $edit,$all,
            "msg"=> 'the data is ready for edit'
        ],200);
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
        $path = $request->photo->move("Api_Images",$photo);

        $update->title = $request->title;
        $update->content = $request->content;
        $update->photo = $path;
        $update->category_id = $request->category_id;
        $update->save();
        return response()->json([
            $update,
            "msg"=> 'the data was update on success'
        ],200);
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
        return response()->json([
            $destroy,
            "msg"=> 'the data was deleted on success'
        ],200);
    }

    public function info($id){

        $info = Politic::where("id",$id)->first();
        $politic = Politic::take(3)->get();
        $related = Politic::orderBy("id","desc")->take(3)->get();

        return response()->json([
            $info,$politic,$related,
            "msg"=> 'the info data '
        ],200);

    }

    public function single(){

        $politic = Politic::take(3)->get();
        $all = Politic::paginate(4);
        $latest = Politic::latest()->first();

        return response()->json([
            $politic,$all,$latest,
            "msg"=> 'the info data '
        ],200);
    }
}
