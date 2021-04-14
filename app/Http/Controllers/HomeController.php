<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
    //

    public function store(ContactRequest $request)
    {
        $params = [
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'tel' => $request->get('tel'),
            'sujet' => $request->get('sujet'),
            "subject" => "EpicEvents.fr"
        ];

        DB::table('contact')->insert([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'tel' => $request['tel'],
            'sujet' => $request['sujet'],
        ]);


        Mail::to(Config::get('contact.email'))->send(new ContactMe($params));
        //return directement des messages, bien enregistré ou le truc est fermé ce jour la!
        return redirect('/')
            ->with('status','Votre demandé à été envoyé avec succés 🤗!');
        /*
        $email = request ('email');
        dd($email);
        */
    }
}
