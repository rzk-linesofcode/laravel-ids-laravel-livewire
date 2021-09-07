<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];
    public $search;
    public $updateStatus = false;
    public $paginate = 5;

    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdated' => 'handleUpdated',
    ];

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => $this->search === null ?
                Contact::latest()->paginate($this->paginate) :
                Contact::latest()->where('name', 'like', '%' . $this->search . '%')
                ->paginate($this->paginate),
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
