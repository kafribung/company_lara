<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Class DB Hobby
use App\Models\Hobby;

// Import Class DB yang login
use Auth;

class HobbyController extends Controller
{
    // READ
    public function index()
    {
        $datas = Hobby::OrderBy('id', 'DESC')->get();
        return view('dashboard.hobby', compact('datas'));
    }

    // URL CREATE
    public function create()
    {
        return view('dashboardCreate.hobbyCreate');
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:25'],
            'description' => ['required', 'string']
        ]);

        $data = Hobby::create([
            'title'       => $request->title,
            'description' => $request->description,
            'user_id'     => Auth::user()->id
        ]);

        return redirect('/hobby')->with('msg', 'Hobby Berhasil Ditambahkan !');
    }

    // SINGLE
    public function show($id)
    {
        //
    }

    // EDIT
    public function edit($id)
    {
        $data = Hobby::findOrFail($id);
        return view('dashboardEdit.hobbyEdit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:25'],
            'description' => ['required', 'string']
        ]);

        $data = Hobby::findOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/hobby')->with('msg', 'Hobby Berhasil Diupdate !');
    }

    // DELETE
    public function destroy($id)
    {
        $data = Hobby::destroy($id);

        return redirect('/hobby')->with('msg', 'Hobby Berhasil Dihapus !');
    }
}
