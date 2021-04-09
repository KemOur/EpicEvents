<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
    //

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        Mail::raw('Its works', function ($message){
            $message->to(request('email'))->subject('Hello there');
        });

        return redirect('/');

        /*
        $email = request ('email');
        dd($email);
        */
    }
}
