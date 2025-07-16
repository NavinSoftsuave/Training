<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email'
        ]);

        return "Form submitted successfully!";
    } 
}
