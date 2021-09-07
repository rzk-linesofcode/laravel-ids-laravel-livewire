<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;

    public $updateStatus = false;

    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdated' => 'handleUpdated',
    ];

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->paginate(5),
        ]);
    }

    public function getContact($id)
    {
        $this->updateStatus = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Contact::find($id);
            $data->delete();
            session()->flash('message', 'Contact ' . $data->name . ' has been deleted succesfully.');
        }
    }

    public function handleStored($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was Stored.');
    }

    public function handleUpdated($contact)
    {
        $this->updateStatus = false;
        session()->flash('message', 'Contact ' . $contact['name'] . ' Updated Successfully.');
    }
}
