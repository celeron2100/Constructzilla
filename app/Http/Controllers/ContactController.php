<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    //

    public function contact()
    {

        if (Session::get('name')) {
            $name = Session::get('name');
            $realname = Session::get('realname');
            return view('contact', compact('name', 'realname'));
        } else {
            return redirect('/login');
        }

    }

}
