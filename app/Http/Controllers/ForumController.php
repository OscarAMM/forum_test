<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;

class ForumController extends Controller
{
    public function index(){
        return view('forum.index');
    }
    public function create(){
        return view('forum.create');
    }
    public function store(Request $request){
        $forum = new Forum();
        $forum->forum_name = $request->forum_name;
        $forum->forum_description = $request->forum_description;
        $forum->save();
        return back();
    }
    public function edit(){

    }
    public function update(){

    }
    public function show(){

    }
    public function delete(){

    }
    public function search(){
    }
}
