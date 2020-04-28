<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import DB About
use App\Models\About;

// Import Class DB yg login
use Auth;

class AboutController extends Controller
{
    // READ
    public function index()
    {
        $data = About::first();
        return view('dashboard.about', compact('data'));
    }

    // URL CREATE
    public function create()
    {
        $data = About::count();

        if($data >= 1) {
            return redirect('/about')->with('msg', 'Relasi one to one');
        }

        return view('dashboardCreate.aboutCreate');
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'about' => ['required', 'string']
        ]);

        $data = About::create([
            'about'   => $request->about,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/about')->with('msg', 'About berhasil ditambahkab !');
    }

    //SINGLE
    public function show($id)
    {
        return redirect('/about')->with('msg', 'Anda Keliru !');
    }

    // EDIT
    public function edit($id)
    {
        $data = About::findOrFail($id);

        return view('dashboardEdit.aboutEdit', compact('data'));
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'about' => ['required',  'string']
        ]);

        $data = About::findOrFail($id)->update([
            'about'   => $request->about,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/about')->with('msg', 'About Berhasil Di Update !');
    }

    // DELETE
    public function destroy($id)
    {
        dd('hard');
        $data = About::destroy($id);

        return redirect('/about')->with('msg', 'About Berhasil Di Hapus !');
    }
}
