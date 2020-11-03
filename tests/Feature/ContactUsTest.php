<?php

namespace Tests\Feature;

use App\Http\Livewire\ContactUs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use Tests\TestCase;

class ContactUsTest extends TestCase
{
    /** @test */
    public function home_page_contains_contact_form_livewire_component()
    {
        $this
            ->get('/home')
            ->assertSeeLivewire('contact-us');
    }

    /** @test */
    public function contact_form_name_field_is_required()
    {
        Livewire::test(ContactUs::class)
        ->set('name')
        ->set('email', "djina@gmail.com")
        ->set('message', "Bla Bla")
        ->call('sendContactForm')
        ->assertHasErrors(['name' => 'required'])
        ;
    }

    /** @test */
    public function contact_form_message_field_has_minimum_characters()
    {
        Livewire::test(ContactUs::class)
        ->set('message', "a")
        ->call('sendContactForm')
        ->assertHasErrors(['message' => 'min'])
        ;
    }
}
