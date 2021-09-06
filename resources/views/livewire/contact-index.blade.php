<div>
    @if (session()->has('message'))
        <div class="text-green-100 px-6 py-4 border-0 rounded relative mb-4 bg-green-700">
            <span class="text-xl inline-block mr-5 align-middle">
            <i class="fas fa-bell"></i>
            </span>
            <span class="inline-block align-middle mr-8">{{ session('message') }}</span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
            <span>×</span>
            </button>
        </div>
    @endif

    <livewire:contact-create></livewire:contact-create>

    <hr>
    <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
        <h1 class="text-3xl my-3 underline">Contacts</h1>
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">#</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Name</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Phone</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider"></th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @php
                    $no =0;
                @endphp
                @foreach ($contacts as $contact)
                @php
                    $no++;
                @endphp
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $no }}</th>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $contact->name  }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $contact->phone }}</td>                       
                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                            <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Edit</button>
                            <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function closeAlert(event){
        let element = event.target;
        while(element.nodeName !== "BUTTON"){
            element = element.parentNode;
        }
        element.parentNode.parentNode.removeChild(element.parentNode);
        }
    </script>
</div>
