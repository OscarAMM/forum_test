<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class CommentController extends Controller
{
    /**
     * pista: que registre los comentarios
     * La búsqueda o el despliegue de las actividades se hace con las relaciones. 
     * 
     */
    public function store(Request $request){
        $comment = new comment();
        $comment->title = $request->title;
        $comment->content = $request->content;
        $comment->save();
        return back();
    }

    public function view_comments(){
        $comment = comment::all();
        return view('forum.comments');
    }

}
