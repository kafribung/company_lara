<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import Class Hash (Enkripsi Pass)
use Illuminate\Support\Facades\Hash;


// Import DB User
use App\Models\User;

class ProfileController extends Controller
{
    // READ
    public function index()
    {
        $datas = User::OrderBy('id', 'DESC')->get();
        return view('dashboard.profile', compact('datas'));
    }

    public function create()
    {
        return view('dashboardCreate.profileCreate');
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'min:3', 'max:25' ],
            'email'    => ['required', 'string', 'min:3', 'max:25', 'email' ],
            'password' => ['required', 'string', 'min:3', 'max:25' ],
            'role'     => ['required', 'max:1']
        ]);

        $data = User::Create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role
        ]);

        return redirect('/profile')->with('msg', 'Profile Berhasil Di tambahkan !');

    }

    //READ SINGEL
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('dashboardEdit.profileEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => ['required', 'string', 'min:3', 'max:25' ],
            'email'    => ['required', 'string', 'min:3', 'max:25', 'email' ],
            'password' => ['required', 'string', 'min:3', 'max:25' ],
            'role'     => ['required', 'max:1']
        ]);

        $data = User::findOrFail($id)->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role
        ]);

        return redirect('/profile')->with('msg', 'Profile Berhasil Di Edit !');
    }

    //
    public function destroy($id)
    {
        $data = User::destroy($id);

        return redirect('/profile')->with('msg', 'Profile Berhasil Di Hapus !');

    }
}
