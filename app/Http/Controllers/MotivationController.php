<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Class DB Motivation
use App\Models\Motivation;

// Import Class DB yang login
use Auth;

class MotivationController extends Controller
{
    // READ
    public function index()
    {
        $datas = Motivation::OrderBy('id', 'DESC')->get();
        return view('dashboard.motivation',  compact('datas'));
    }

    // URL CREATE
    public function create()
    {
        return view('dashboardCreate.motivationCreate');
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'owner'      => ['required', 'string', 'min:3', 'max:25'],
            'profession' => ['required', 'string', 'min:3', 'max:25'],
            'description'=> ['required', 'string']
        ]);

        $data = Motivation::create([
            'owner'       => $request->owner,
            'profession'  => $request->profession,
            'description' => $request->description,
            'user_id'     => Auth::user()->id
        ]);

        return redirect('/motivation')->with('msg', 'Motivation Berhasil Ditambhakan !');
    }

    // READ SINGLE
    public function show($id)
    {
        return redirect('/motivation')->with('msg', 'Anda Keliru !');
    }

    // EDIT
    public function edit($id)
    {
        $data = Motivation::findOrFail($id);

        return view('dashboardEdit.motivationEdit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'owner'      => ['required', 'string', 'min:3', 'max:25'],
            'profession' => ['required', 'string', 'min:3', 'max:25'],
            'description'=> ['required', 'string']
        ]);

        $data = Motivation::findOrFail($id)->update([
            'owner'       => $request->owner,
            'profession'  => $request->profession,
            'description' => $request->description,
            'user_id'     => Auth::user()->id
        ]);

        return redirect('/motivation')->with('msg', 'Motivation Berhasil Diupdate !');
    }

    // DELETE
    public function destroy($id)
    {
        $data = Motivation::destroy($id);

        return redirect('/motivation')->with('msg', 'Motivation Berhasil DiHapus');
    }
}
