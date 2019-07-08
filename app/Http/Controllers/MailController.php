<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use Session;

class MailController extends Controller
{
    public function index()
    {
        return view('contato');
    }

    public function getAbout()
    { }

    public function getContact()
    {
        return view('website.contact');
    }

    public function postContact(Request $request)
    {
        $fields = $request->validate([
            'name'=> 'required|between:3,50',
            'email'=> 'required|email|between:5,50',
            'phone'=> 'required|numeric',
            'bodyMessage'=> 'required|min:5',
        ]);
        Mail::to('digitaltour.p@gmail.com')
            ->send(new ContactMail($fields));

        Session::flash('success', 'Obrigado! Email enviado com sucesso!');

        return redirect()->back();
    }
}
