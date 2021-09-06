<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{

    protected $listeners = [
        'contactStored' => 'handleStored'
    ];

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get(),
        ]);
    }

    public function handleStored($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was Stored.');
    }
}
