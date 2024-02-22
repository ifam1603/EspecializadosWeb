<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; 

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
                'name' => 'required',
                'email' => 'required|email|max:50',
                'message' => 'required',
                ],[
                'fullname.required' => 'Proporciona nombre completo.',
                'email.max' => 'Email con máximo 50 caracteres.',
                'message.required' => 'Favor de escribir el mensaje.',
                ]);
                $comment = new Comment();
                $comment->name = $request->input('name');
                $comment->email = $request->input('email');
                $comment->message = $request->input('message');
                $comment->product_id=$request->input('product_id');
                $comment->save();
                return redirect()->back()->with('success','Resenia guardada correctamente');
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
