<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import DB Comment
use App\Models\Comment;

class CommentController extends Controller
{
    //READ
    public function index()
    {
        $datas = Comment::orderBy('id', 'DESC')->get();

        return view('dashboard.comment', compact('datas'));
    }

    // URL CREATE
    public function create()
    {
        return redirect('/comment')->with('msg', 'Anda keliru !');
    }

    //CREATE
    public function store(Request $request)
    {
        return redirect('/comment')->with('msg', 'Anda keliru !');

    }

    //SINGLE
    public function show($id)
    {
        return redirect('/comment')->with('msg', 'Anda keliru !');

    }

    //EDIT
    public function edit($id)
    {
        return redirect('/comment')->with('msg', 'Anda keliru !');

    }

    //UPDATE
    public function update(Request $request, $id)
    {
        return abort('404');
    }

    //DELETE
    public function destroy($id)
    {
        $data = Comment::destroy($id);

        return redirect('/comment')->with('msg', 'Comment Berhasil Dihapus !');
    }
}
