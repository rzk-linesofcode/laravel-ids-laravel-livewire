<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUpdate extends Component
{
    public $name;
    public $phone;
    public $contactId;
    public $contact;

    public $listeners = [
        'getContact' => 'showContact',
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function showContact($contact)
    {
        $this->name = $contact['name'];
        $this->phone = $contact['phone'];
        $this->contactId = $contact['id'];
    }

    public function store()
    {
        $this->validate([
            'contactId' => 'required',
            'name' => 'required|min:3',
            'phone' => 'required|min:5|max:15',
        ]);

        Contact::where('id', $this->contactId)->update([
            'name' => $this->name,
            'phone' => $this->phone,
        ]);

        $this->emit('contactUpdated', $this->name);
    }
}
