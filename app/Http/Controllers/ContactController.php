<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import DB Contact
use App\Models\Contact;

//Import DB yg login
use Auth;

class ContactController extends Controller
{
    // READ
    public function index()
    {
        $datas = Contact::orderBy('id', 'DESC')->get();

        return view('dashboard.contact', compact('datas'));
    }

    // URL CREATE
    public function create()
    {
        $data = Contact::count();
        if($data >= 1) {
            return redirect('/contact')->with('msg', 'Relasi one to one !');
        }
        return view('dashboardCreate.contactCreate');
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'address'   => ['required', 'string', 'min:5', 'max:25'],
            'handpone'  => ['required', 'string', 'min:5', 'max:20', 'unique:contacts'],
            'twitter'   => ['required', 'string', 'min:3', 'max:15', 'unique:contacts'],
            'fb'        => ['required', 'string', 'min:3', 'max:15', 'unique:contacts'],
            'instagram' => ['required', 'string', 'min:3', 'max:15', 'unique:contacts'],
            'linkedin'  => ['required', 'string', 'min:3', 'max:15', 'unique:contacts'],
        ]);

        $data = Contact::create([
            'address'   => $request->address,
            'handpone'  => $request->handpone,
            'twitter'   => $request->twitter,
            'fb'        => $request->fb,
            'instagram' => $request->instagram,
            'linkedin'  => $request->linkedin,
            'user_id'   => Auth::user()->id
        ]);

        return redirect('/contact')->with('msg', 'Contact Berhasil Ditambakan !');
    }

    // SINGLE
    public function show($id)
    {
        //
    }

    // EDIT
    public function edit($id)
    {
        $data = Contact::findOrFail($id);

        return view('dashboardEdit.contactEdit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'address'   => ['required', 'string', 'min:5', 'max:25'],
            'handpone'  => ['required', 'string', 'min:5', 'max:20'],
            'twitter'   => ['required', 'string', 'min:3', 'max:15'],
            'fb'        => ['required', 'string', 'min:3', 'max:15'],
            'instagram' => ['required', 'string', 'min:3', 'max:15'],
            'linkedin'  => ['required', 'string', 'min:3', 'max:15']
        ]);

        $data = Contact::findOrFail($id)->update([
            'address'   => $request->address,
            'handpone'  => $request->handpone,
            'twitter'   => $request->twitter,
            'fb'        => $request->fb,
            'instagram' => $request->instagram,
            'linkedin'  => $request->linkedin,
            'user_id'   => Auth::user()->id
        ]);

        return redirect('/contact')->with('msg', 'Contact Berhasil Dihapus !');
    }

    // DELETE
    public function destroy($id)
    {
        $data = Contact::destroy($id);

        return redirect('/contact')->with('msg', 'Contact Berhasil Dihapus !');
    }
}
