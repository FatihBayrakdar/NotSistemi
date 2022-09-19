<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Email veya şifre hatalı'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('Başarılı', 'Hoşgeldiniz!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('Başarılı', 'Görüşürüz!');
    }
}
