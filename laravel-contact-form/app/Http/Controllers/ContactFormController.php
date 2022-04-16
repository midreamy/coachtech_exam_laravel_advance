<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function post(Request $request)
    {
        $this->validate($request, ContactForm::$rules);
        $form = $request->all();
        ContactForm::create($form);
        return view('thanks');
    }
}
