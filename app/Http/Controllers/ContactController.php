<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }
    public function sendEmail(Request $request){
        $data=[
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'country' => $request->country,
            'message' => $request->message,
        ];
        Mail::to('dr_ashrafismael@egyptiangarlic-onion.shop')->send(new ContactMail($data));
        return back()->with('message_sent','Your Message has been sent successfully!');
    }
}
