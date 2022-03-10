<?php

namespace App\Http\Controllers;

use App\Mail\contact as MailContact;
use Illuminate\Http\Request;
use App\Models\Contact;
// use Illuminate\Mail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request)
    {
        return view('contact');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required'
        ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->message
        ];
        $email = 'angelmbakile96@gmail.com';
        $admin = 'chumahamisi091@gmail.com';
        Mail::to($admin)->send(new MailContact($data));
        return back()->with('message_sent', 'We have received your message and would like to thank you for writing to us.');
    }
}
