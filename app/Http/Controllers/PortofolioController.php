<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Impotr Class DB Portofolio
use App\Models\Portofolio;

// Import Class Db yg Login
use Auth;

class PortofolioController extends Controller
{
    // READ
    public function index()
    {
        $datas = Portofolio::orderBy('id', 'DESC')->get();
        return view('dashboard.portofolio', compact('datas'));
    }

    // URL CREATE
    public function create()
    {
        return view('dashboardCreate.portofolioCreate');
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:25'],
            'image' => ['required', 'mimes:jpeg,jpg,png', 'max:700']
        ]);

        $imgName = time() . '.png';
        $request->file('image')->storeAs('public/portofolio', $imgName);
        $data = Portofolio::create([
            'title'   => $request->title,
            'image'   => $imgName,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/portofolio')->with('msg', 'Portofolio Berhasil Ditambahkan !W');
    }

  // REAAD SINGLE
    public function show($id)
    {
        //
    }

    // EDIT
    public function edit($id)
    {
        $data = Portofolio::findOrFail($id);

        return view('dashboardEdit.portofolioEdit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:25'],
            'image' => ['required', 'mimes:png,jpg,jpeg', 'max:700']
        ]);

        $imgName = time() . '.png';
        $request->file('image')->storeAs('public/portofolio', $imgName);

        $data = Portofolio::findOrfail($id)->update([
            'title'   => $request->title,
            'image'   => $imgName,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/portofolio')->with('msg', 'Portofolio Berhasil Diupdate !');
    }
    // DELETE
    public function destroy($id)
    {
        $data = Portofolio::destroy($id);

        return redirect('/portofolio')->with('msg', 'Portofolio Berhasil Dihapus !');
    }
}
