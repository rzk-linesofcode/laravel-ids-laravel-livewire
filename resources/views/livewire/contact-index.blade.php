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
    <h1 class="fs-3 mt-3">Contacts</h1>
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
            @php
                $no =0;
            @endphp
            @foreach ($contacts as $contact)
                @php
                    $no++;
                @endphp
                <tr>
                    <th scope="row">{{ $no }}</th>
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
</div>