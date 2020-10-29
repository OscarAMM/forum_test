<?php

namespace App\Http\Controllers;

use App\comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * pista: que registre los comentarios
     * La búsqueda o el despliegue de las actividades se hace con las relaciones.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $comment = new comment();
        $comment->title = $request->title_comment;
        $comment->content = $request->forum_comment;
        $comment->user_id = Auth::user()->id;
        $comment->forum_id =$request->forum;
        $comment->save();
        dd($comment);
        return back();
    }

    public function index()
    {
        $comment = comment::all();
        return view('forum.comments', compact('comment'));
    }

    /* Ya está creado en la parte de arriba.
public function store(Request $request){
$comment = new comment();
$comment->title = $request->title_comment;
$comment->content = $request->forum_comment;
$comment->user_id = Auth::user()->id;
$comment->save();
return back();
}*/

}
