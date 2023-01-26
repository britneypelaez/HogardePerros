<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index() {

        return view('Home.QuienesSomos');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'coment' => 'required'
        ]);

        $correo = new ContactanosMailable($request->name, $request->number, $request->email, $request->coment);
        Mail::to('jecg2509@gmail.com')->send($correo);

        return redirect()->route('QuienesSomos')->with('info', 'Mensaje enviado correctamente');
    }
}
