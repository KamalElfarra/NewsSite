<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Category::all();
        $array = [

            "data"=>$all,
            "msg" => "success"

        ];
        return response($array,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        $array = [
            "data"=>$category,
            "msg"=>"the data stored on success"
        ];
        
        return response($array,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Category::where("id",$id)->first();

        $array = [
            "data"=>$edit,
            "msg"=>"edit success"
        ];

        return response($array,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Category::where("id",$id)->first();
        $update->name = $request->name;
        $update->save();

        $array = [

            "data"=>$update,
            "msg"=>"update on success"
            
        ];
        return response($array,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Category::where("id",$id)->first();
        $delete->destroy($id);
        $delete->save();

        $array = [
            "data"=>$delete,
            "msg"=>"delete success"

        ];
        
        return response($array,200);


    }
}
