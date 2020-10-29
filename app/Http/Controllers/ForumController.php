<?php

namespace App\Http\Controllers;

use App\Forum;
use Auth;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $forum = Forum::all();
        return view('forum.index', compact('forum'));
    }
    public function create()
    {
        return view('forum.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            //'user_id' =>'required',
            'forum_name' => 'required',
            'forum_description' => 'required',
        ]);
        $forum = new Forum();
        $forum->forum_name = $request->forum_name;
        $forum->forum_description = $request->forum_description;
        $forum->user_id = Auth::user()->id;
        $forum->save();
        return redirect()->route('forum_index'); //redirect -> redirige a la ruta especificada
    }
    public function edit($id)
    {
        $forum = Forum::findOrFail($id); //permite buscar objetos o datos por id findOrFail es la función que trae para realizar búsquedas
        return view('forum.edit', compact('forum')); //compact es lo mismo que un arreglo
    }
    public function update(Request $request, $id)
    {
        $forum = Forum::findOrFail($id);
        $request->validate([
            'forum_name' => 'required',
            'forum_description' => 'required',
        ]);
        $forum->forum_name = $request->forum_name;
        $forum->forum_description = $request->forum_description;
        $forum->user_id = Auth::user()->id;
        $forum->update();
        return redirect()->route('forum_index');
    }
    public function show($id)
    {
        $forum = Forum::findOrFail($id); //permite buscar objetos o datos por id findOrFail es la función que trae para realizar búsquedas
        return view('forum.show', compact('forum'));
    }
    public function delete($id)
    {
        $forum = Forum::findOrFail($id);
        $forum->delete();
        return redirect()->route('forum_index');
    }

}
