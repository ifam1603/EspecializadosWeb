<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail as appmail;
use App\Mail\ContactEmail as emailenviar;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('groceries/contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post'))
            {
                $request->validate([
                'fullname' => 'required',
                'email' => 'required|email|max:50',
                'message' => 'required',
                ],[
                'fullname.required' => 'Proporciona nombre completo.',
                'email.max' => 'Email con máximo 50 caracteres.',
                'message.required' => 'Favor de escribir el mensaje.',
                ]);
                $contact = new Contact();
                $contact->fullname = $request->input('fullname');
                $contact->email = $request->input('email');
                $contact->message = $request->input('message');
                $contact->save();

                   // Enviar correo electrónico al administrador
                    $adminEmail = 'luis_antonio1603@hotmail.com'; 
                    $emailData = [
                        'subject' => 'Nuevo mensaje de contacto',
                        'email' => $adminEmail,
                        'fullname' => $request->input('fullname'),
                        'message' => $request->input('message'),
                    ];
                    appmail::to($adminEmail)->send(new emailenviar($emailData));

                return redirect()->route('contact.index')->with('success', 'You message has been

                sent.');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
