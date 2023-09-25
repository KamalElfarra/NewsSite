<?php

namespace App\Http\Controllers;

use App\Models\Contact_us;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\MimeType;
use Illuminate\Support\Facades\Storage;
class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("contact.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $get_all = Contact_us::paginate(4);

        return view("contact.table",compact("get_all"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact_us();

        $mimeType = $request->file->getMimeType();
        $fileType = explode('/', $mimeType)[0];

        if($fileType == "image"){
            $photo = time(). "." . $request->file->extension();
            $path = $request->file->move("images\Contact",$photo);
    
            $contact->title = $request->title;
            $contact->content = $request->content;
            $contact->file = $path;
            $contact->notice = $request->notice;
            $contact->save();
            return redirect("/view/contact");    
        }else{
            $photo = time(). "." . $request->file->extension();
            $path = $request->file->move("images\Contact",$photo);
    
            $contact->title = $request->title;
            $contact->content = $request->content;
            $contact->video = $path;
            $contact->notice = $request->notice;
            $contact->save();
            return redirect("/view/contact");    
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact_us  $contact_us
     * @return \Illuminate\Http\Response
     */
    public function download_image($id)
    {
        $download = Contact_us::where("id",$id)->first();

        $mimeType = mime_content_type($download->file);
        $fileType = explode('/', $mimeType)[0];

        if($fileType == "image"){
            $download = $download->file;
            return response()->download($download);
        }else{
            return back()->with('message', 'the image is not found');
        }
        
    }

    public function download_video($id)
    {
        $download = Contact_us::where("id",$id)->first();

        $mimeType = mime_content_type($download->video);
        $fileType = explode('/', $mimeType)[0];

        if($fileType == "video"){
            $download = $download->video;
            return response()->download($download);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact_us  $contact_us
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Contact_us::where("id",$id)->first();
        return view("contact.edit",compact("edit"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact_us  $contact_us
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update = Contact_us::where("id",$id)->first();

        $mimeType = mime_content_type($update->file);
        $fileType = explode('/', $mimeType)[0];

        if($fileType == "image"){
            $photo = time(). "." . $request->file->extension();
            $path = $request->file->move("images\Contact",$photo);
    
            $update->title = $request->title;
            $update->content = $request->content;
            $update->file = $path;
            $update->notice = $request->notice;
            $update->save();
            return redirect("/table/contact");    
        }else{
            $photo = time(). "." . $request->file->extension();
            $path = $request->file->move("images\Contact",$photo);
    
            $update->title = $request->title;
            $update->content = $request->content;
            $update->video = $path;
            $update->notice = $request->notice;
            $update->save();
            return redirect("/table/contact");    
        }

    }

    public function info($id){

        $info = Contact_us::where("id",$id)->first();
        return view("contact.info",compact("info"));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact_us  $contact_us
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Contact_us::where("id",$id)->first();
        $delete->destroy($id);
        $delete->save();
        return redirect("/table/contact");

    }
}
