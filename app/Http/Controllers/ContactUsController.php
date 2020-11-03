<?php

namespace App\Http\Controllers;

use App\ContactUsModel;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    
    // public function send_contact_form(Request $request)
    // {
    //     $data = [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required'
    //     ];

    //     $contact = $request->validate($data);

    //     // $this->validate($request, $data);

    //     ContactUsModel::create($contact);

    //     // feature-sending-emails
    //     // Mail::to('stevkoskadjina@yahoo.com')->send(new MAILABLE($contact));

    //     // session()->flash('success', "Message sent!");
    //     return back()->with('success', 'Thanks for contacting us!');
    // }

}
