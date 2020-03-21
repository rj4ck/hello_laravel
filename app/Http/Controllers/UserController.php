<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    //
    //use UserController;

    public function store(Request $request) {
        $user = new Users();
        $user->name = 'Raquel Jackson';
        $user->nickName = 'rj4ck';
        $user->email = 'r.jackson@msn.com';
        $user->save();
        return redirect('user')->with('success', 'User has been successfully added');
    }

    public function create() {
        return view('usercreate');
    }
}


