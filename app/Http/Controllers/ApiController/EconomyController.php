<?php

namespace App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;

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

       $array = [

        "data"=>$get_data,
        "msg"=> "the data was returned"

       ];
        return response($array,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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

        $array = [
            "data"=>$economy,
            "msg"=> "the data was stored"
        ];

        return response($array,200);
    

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

        $array = [
            "data"=> $info,$economy,$related,
            "msg" => "the data was returned success"
        ];

        return response($array,200);

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
        $get_category = Category::where("name","الإقتصاد")->first();

        $array = [

            "data" => $edit,$get_category,
            "msg" => "edit data"

        ];

        return response($array,200);
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

        $array = [

            "data"=>$update,
            "msg" => "the data was updated successfully"

        ];
        return response($array,200);

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

        $array = [
            "data"=>$delete,
            "msg"=>"the data was delete successfully"
        ];

        return response($array,200);
    }

    public function single(){

        $economy = Economy::take(3)->get();
        $all = Economy::paginate(4);
        $latest = Economy::latest()->first();

        $array = [
            "data"=>$economy,$all,$latest,
            "msg"=>"the data was returned successfully"
        ];

        return response($array,200);

    }
}
