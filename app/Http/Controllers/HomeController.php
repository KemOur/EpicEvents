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
            Mail::raw('Contact depuis le site EpicEvents', function ($message){
                    $message->to(request('email'))->subject('EpicEvents');
                });
        return redirect('/')
            ->with("message", 'Votre messagé a bien été envoyé !');

        /*
        $email = request ('email');
        dd($email);
        */
    }
}
