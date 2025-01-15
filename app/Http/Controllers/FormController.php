<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function submitForm(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'job' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'agree' => 'accepted',
        ]);

        return redirect('/thank');
    }
}

