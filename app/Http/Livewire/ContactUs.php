<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\ContactUsModel;
use Illuminate\Http\Request;


class ContactUs extends Component
{

    public $name;
    public $email;
    public $message;
    public $successMessage;
    
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:contact_us,email',
        'message' => 'required|min:2'
    ];
    
    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function sendContactForm(Request $request)
    {

        $contact = $this->validate();

        // $contact['name'] = $this->name;
        // $contact['email'] = $this->email;
        // $contact['message'] = $this->message;

        // sleep(1);

        ContactUsModel::create($contact);

        $this->successMessage = 'Your message has been sent!';
        $this->resetForm();


        // feature-sending-emails
        // Mail::to('stevkoskadjina@yahoo.com')->send(new MAILABLE($contact));

        return back()->with('success', 'Thanks for contacting us!');
    }

    
    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
