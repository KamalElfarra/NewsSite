<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;

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
        return Response()->json([
          $get_data,
          "msg"=>"the data was returned successfully"

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
        $sport = new Sport();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("Api_Images",$photo);

        $sport->title = $request->title;
        $sport->content = $request->content;
        $sport->photo = $path;
        $sport->category_id = $request->category_id;
        $sport->save();
        return Response()->json([
          $sport,
          "msg"=>"the data was stored successfully"

        ],200);
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

        $array = [
            "data" => $info,$sport,$related,
            "msg" => "the data info is returned"
        ];

        // return response()->json(['error' => 'Data not found'], 404);


        return response($array,200);

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
        $sport = Category::where("name","الرياضة")->first();

        $array = [
          "data" => $edit,$sport,
          "msg" => "this is the for edit"
        ];

        return response($array,200);
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
        $path = $request->photo->move("Api_Images",$photo);

        $update->title = $request->title;
        $update->content = $request->content;
        $update->photo = $path;
        $update->category_id = $request->category_id;
        $update->save();
        $array = [
          "data" => $update,
          "msg" => "the data was updating on success"
        ];

        return response($array,200);
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
        $array = [
          "data" => $delete,
          "msg" => "the data was deleted"
        ];

        return response($array,200);

    }

    public function single(){

        $sport = Sport::take(3)->get();
        $all = Sport::paginate(4);
        $latest = Sport::latest()->first();

        $array = [
          "data" => $sport,$all,$latest,
          "msg" => "this is the data for single page"
        ];

        return response($array,200);
    }
}
