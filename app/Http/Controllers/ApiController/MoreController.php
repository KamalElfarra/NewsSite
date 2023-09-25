<?php

namespace App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;

use App\Models\More;
use App\Models\Category;
use App\Models\Type;

use Illuminate\Http\Request;

class MoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_data = More::paginate(4);

        $array = [
            "data"=>$get_data,
            "msg" => "the data was returned successfully"
        ];

        return response($array,200);
    }


 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $more = new More();

        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("Api_Images",$photo);

        $more->title = $request->title;
        $more->content = $request->content;
        $more->photo = $path;
        $more->category_id = $request->category_id;
        $more->type_id = $request->type_id;
        $more->save();

        $array = [
            "data" => $more,
            "msg" => "the data was stored successfully"
        ];
        
        return response($array,200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\More  $more
     * @return \Illuminate\Http\Response
     */
    public function info($id)
    {
        $get_id = More::where("id",$id)->first();
        $type = More::where("type_id",2)->get();
        $more = More::take(3)->get();

        $array = [
            "data"=> $get_id,$type,$more,
            "msg"=>"info data"
        ];

        return response($array,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\More  $more
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = More::where("id",$id)->first();
        $all = Category::where("name","المزيد من الأخبار")->first();

        return response()->json([
            $edit,$all,
            "msg"=>"edit data"
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\More  $more
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update = More::where("id",$id)->first();
        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("Api_Images",$photo);

        $update->title = $request->title;
        $update->content = $request->content;
        $update->photo = $path;
        $update->category_id = $request->category_id;
        $update->save();

        $array = [
            "data"=> $update,
            "msg"=>"update data"
        ];

        return response($array,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\More  $more
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = More::where("id",$id)->first();
        $delete->destroy($id);
        $delete->save();

        $array = [
            "data"=> $delete,
            "msg"=>"delete data"
        ];

        return response($array,200);

    }
}
