<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Semua DB user (Karena semuanya bereleasi)
use App\Models\User;

// Import DB comment
use App\Models\Comment;



class UserController extends Controller
{
    public function index()
    {
        $user = User::with('about','hobbies', 'motivations', 'portofolios', 'contact')->first();

        return view('company.company', ['user' => $user]);
    }

    // CREATE COMMENT
    public function comment(Request $request)
    {
        $request->validate([
            'name'    => ['required', 'string', 'min:3', 'max:15'],
            'email'   => ['required', 'email', 'max:15'],
            'subject' => ['required', 'string', 'min:3', 'max:50'],
            'message' => ['required', 'string']
        ]);

        $data = Comment::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect('/company')->with('msg', 'Tahank you');

    }
}
