<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\Return_;

class ContactFormController extends Controller
{
    public function post_message(Request $request)
    {
        //form validation
        $request->validate
        ([
          'email'=> 'required|email',
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'country' => $request->country,
            'message' => $request->message,
        ];

        //send email to admin
        Mail::to('Saifkhodaryoka@gmail.com')->send(new ContactFormMail($data));


        return back()->with('msg', "Thanks for reaching out.Your message has been sent successfully");
    }
}
