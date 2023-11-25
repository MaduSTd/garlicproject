<?php

namespace App\Http\Controllers;
use App\Mail\contactMail;
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
        Mail::to('dr.ashrafismaelmostafa@gmail.com')->send(new contactMail($data));
        return back()->with('message_sent','Your Message has been sent successfully!');
    }
}
