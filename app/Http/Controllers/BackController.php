<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//include models
use App\Models\Photo;
use App\Models\Notice;
use App\Models\Event;
use Image;
use File;

class BackController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }
    public function slider(){
        $photos = Photo::all();
        return view('admin.photos_index', compact('photos'));
    }
    public function slider_create(){
        return view('admin.photos_create');
    }
    public function slider_store(Request $request){
        $this->validate($request, [
            'image' => 'required'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            Image::make($file)->resize(1200, 800)->save(public_path('/contents/images/slider/'.$file_name));
        }
        else{
            $file_name = 'no_image.png';
        }

        $photo = new Photo;
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->image = $file_name;

        $photo->save();
        return redirect()->route('admin.photos')->with('success', 'Successfully Uploaded');
    }
    public function slider_destroy($id){
        $photo = Photo::find($id);
         //delete old image from storage
         $oldImage = $photo->image;
         if($oldImage != 'no_image.png'){
             File::delete(public_path('/contents/images/slider/'.$oldImage));
         }
         $photo->delete();
         return redirect()->route('admin.photos')->with('error', 'Successfully Deleted.');
    }
    public function slider_edit($id){
        $photo = Photo::find($id);
        return view('admin.photos_edit', compact('photo'));
    }
    public function slider_update(Request $request, $id){
        //validate for previous image
        $photo = Photo::find($id);
        $oldImage = $photo->image;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            Image::make($file)->resize(1200, 800)->save(public_path('/contents/images/slider/'.$file_name));
            //delete old image from storage
            if($oldImage != 'no_image.png'){
                File::delete(public_path('contents/images/slider/'.$oldImage));
            }
        }
        else{
            $file_name = $oldImage;
        }
        
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->image = $file_name;

        $photo->save();
        return redirect()->route('admin.photos')->with('success', 'Successfully Uploaded');
    }
    //Notice CRUD Start from here
    public function notice_index(){
        //$notices = Notice::orderBy('created_at', 'desc')->take(4)->get();
        $notices = Notice::all();
        return view('admin.notice.index', compact('notices'));
    }
    public function notice_create(){
        return view('admin.notice.create');
    }
    public function notice_store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $notice = new Notice;
        $notice->title = $request->input('title'); 
        $notice->body = $request->input('body'); 
        $notice->save();
        return redirect()->route('admin.notice_index')->with('success', 'Successfully Inserted');
    }
    public function notice_edit($id){
        $notice = Notice::find($id);
        return view('admin.notice.edit', compact('notice'));
    }
    public function notice_update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $notice = Notice::find($id);
        $notice->title = $request->input('title'); 
        $notice->body = $request->input('body'); 
        $notice->save();
        return redirect()->route('admin.notice_index')->with('success', 'Successfully Updated');
    }
    public function notice_destroy($id){
        Notice::find($id)->delete();
        return redirect()->route('admin.notice_index')->with('error', 'Successfully Removed');
    }
    public function notice_show($id){
        $notice = Notice::find($id);
        return view('admin.notice.show', compact('notice'));
    }
    public function events_index(){
        $events = Event::orderBy('created_at', 'desc')->paginate(2);
        return view('admin.event.index', compact('events'));
    }
    public function event_create(){
        return view('admin.event.create');
    }
    public function event_store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'type' => 'required'
        ]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            Image::make($file)->resize(1200, 800)->save(public_path('/contents/images/news/'.$file_name));
        }
        else{
            $file_name = 'no_image.png';
        }
        $event = new Event;
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->type = $request->input('type');
        $event->image = $file_name;
        $event->save();
        return redirect()->route('admin.events_index')->with('success', 'Succesfully Inserted');
    }
    public function event_destroy($id){
        $event = Event::find($id);
        //delete old image from storage
        $oldImage = $event->image;
        if($oldImage !== 'no_image.png'){
            File::delete(public_path('/contents/images/news/'.$oldImage));
        }
        $event->delete();
        return redirect()->route('admin.events_index')->with('error', 'Successfully Removed');
    }
    public function event_edit($id){
        $event = Event::find($id);
        return view('admin.event.edit', compact('event'));
    }
    public function event_update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        //validate type
        $event = Event::find($id);
        $oldType = $event->type;
        $newType = $request->input('type');
        if($newType != '0'){
            $type = $newType;
        }else{
            $type = $oldType;
        }

        //Image validation
        $oldImage = $event->image;
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            Image::make($file)->resize(1200, 800)->save(public_path('/contents/images/news/'.$file_name));
            //delete old image from storage
            if($oldImage != 'no_image.png'){
                File::delete(public_path('contents/images/news/'.$oldImage));
            }
        }
        else{
            $file_name = $oldImage;
        }
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->type = $type;
        $event->image = $file_name;
        $event->save();
        return redirect()->route('admin.events_index')->with('error', 'Succesfully Updated');
    }
}
