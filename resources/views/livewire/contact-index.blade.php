<div>
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>{{ session('message') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($updateStatus)
        <livewire:contact-update></livewire:contact-update>    
    @else
        <livewire:contact-create></livewire:contact-create>
    @endif

    <hr>
    <h1 class="fs-3 mt-3 mb-1">Contacts</h1>
    <div class="row">
        <div class="col-auto">
            <select wire:model="paginate" class="form-select form-select-md">
                <option disabled selected>...</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="col"></div>
        <div class="col col-md-6">            
            <input wire:model="search" type="text" class="form-control form-control-sm" placeholder="Search Name...">
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $key => $contact)
                <tr>
                    <th scope="row">{{ $contacts->firstItem() + $key }}</th>
                    <td>{{ $contact->name  }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <button wire:click="getContact({{ $contact->id }})" class="btn btn-sm btn-primary">Edit</button>
                        <button wire:click="destroy({{ $contact->id }})" class="btn btn-sm btn-danger btn-primary">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>