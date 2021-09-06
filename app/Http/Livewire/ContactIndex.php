<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{

    public $updateStatus = false;

    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdated',
    ];

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get(),
        ]);
    }

    public function getContact($id)
    {
        $this->updateStatus = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function handleStored($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was Stored.');
    }

    public function contactUpdated($name)
    {
        $this->updateStatus = false;
        session()->flash('message', 'Contact ' . $name . ' was Stored.');
    }
}
