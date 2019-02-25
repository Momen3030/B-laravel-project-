<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
// use Validator;
use App\ContactUS;

class ContactController extends Controller
{


    public function contactUS()
    {
        return view('contactUS');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'subject' => 'required',
         'message' => 'required'
         ]);

        $contactmessage= new ContactUs;
        $contactmessage->name = $request->name;
        $contactmessage->email = $request->email;
        $contactmessage->subject = $request->subject;
        $contactmessage->message = $request->message;
        $contactmessage->save();
        
        Mail::send('emails.welcome',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_message'=> $request->get('message')
        ),function($message)
       {
        $message->from('momenadel3030@gmail.com','Admin momen');
        $message->to('mohamed.salah21500@gmail.com', 'Admin 2')->subject('Important message');
       });
       
       return redirect('/')->with('success', 'Message Sent');
       
    }   







}
