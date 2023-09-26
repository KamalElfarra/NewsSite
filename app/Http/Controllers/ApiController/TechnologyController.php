<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;

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
        return Response()->json([
          $get_data,
          "msg"=>"the data is returned successfully"
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
        $tech = new Technology();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("Api_Images",$photo);

        $tech->title = $request->title;
        $tech->content = $request->content;
        $tech->photo = $path;
        $tech->category_id = $request->category_id;
        $tech->save();
        return Response()->json([
          $tech,
          "msg"=>"the data is stored successfully"
        ],200);
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

        return Response()->json([
          $info,$technology,$related,
          "msg"=>"this is info data "
        ],200);

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
        $first = Category::where("name","التكنولوجيا")->first();
        return Response()->json([
          $edit,$first,
          "msg"=>"this is the data for edit "
        ],200);
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
        $path = $request->photo->move("Api_Images",$photo);

        $update->title = $request->title;
        $update->content = $request->content;
        $update->photo = $path;
        $update->category_id = $request->category_id;
        $update->save();
        return Response()->json([
          $update,
          "msg"=>"the data was updating on success "
        ],200);
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
        return Response()->json([
          $delete,
          "msg"=>"the data was deleted successfully"
        ],200);
    }

    public function single(){

        $technology = Technology::take(3)->get();
        $all = Technology::paginate(4);
        $latest = Technology::latest()->first();

        return Response()->json([
          $technology,$all,$latest,
          "msg"=>"this is the data for single page"
        ],200);

    }
}
