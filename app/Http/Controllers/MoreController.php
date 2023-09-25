<?php

namespace App\Http\Controllers;

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
        return view("more.table",compact("get_data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all = Category::all();
        $type = Type::all();

        return view("more.create",compact("all","type"));
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
        $path = $request->photo->move("images\More",$photo);

        $more->title = $request->title;
        $more->content = $request->content;
        $more->photo = $path;
        $more->category_id = $request->category_id;
        $more->type_id = $request->type_id;
        $more->save();
        return redirect("/create/more");

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

        return view("more.info",compact("get_id","more","type"));
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
        $all = Category::all();
        return view("more.edit",compact("edit","all"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\More  $more
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $update = More::where("id",$id)->first();
        $photo = time(). "." . $request->photo->extension();
        $path = $request->photo->move("images\More",$photo);

        $update->title = $request->title;
        $update->content = $request->content;
        $update->photo = $path;
        $update->category_id = $request->category_id;
        $update->save();
        return redirect("/view/more");

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
        return redirect("/view/more");

    }
}
