<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//include Model
use App\Models\Photo;
use App\Models\Notice;
use App\Models\Event;

class PagesController extends Controller
{
    public function index(){
        $photos = Photo::orderBy('created_at', 'asc')->get();
        $notices = Notice::orderBy('created_at', 'desc')->take(4)->get();
        return view('pages.homepage', compact('photos', 'notices'));
    }
    public function notice_show($id){
        $notice = Notice::find($id);
        return view('pages.visitor.notice_show', compact('notice'));
    }
    public function notice_index(){
        $notices = Notice::orderBy('created_at', 'desc')->paginate(2);
        return view('pages.visitor.notice_index', compact('notices'));
    }
    public function news_list(){
        $news = Event::orderBy('created_at', 'desc')->where('type', 'news')->paginate(3);
        return view('pages.visitor.news_list', compact('news'));
    }
    public function news_show($id){
        $event = Event::find($id);
        $babu = Event::orderBy('created_at', 'desc')->where('type', 'news')->take(6)->get();
        return view('pages.visitor.news_show', compact('event', 'babu'));
    }
}
