@extends('admin.dashboard')

@section('content')

<body class="bg-gray-700">
    <h1 class="text-white text-2xl pb-4">Nouveau Devoir</h1>
    <div class="w-full rounded-md bg-gray-800 p-4">
        <form action="{{ route('save.devoir') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="title">Titre</label>
                        <input id="title" type="text" placeholder="Titre" name="nom_tp" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="date">Date limite</label>
                        <input id="date" type="date" placeholder="Date limite" name="date_limite" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="module">Module</label>



                        <select id="module" placeholder="Module" name="module" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">

                            <option selected disabled>Module</option>
                            @foreach ($data as $row)

                            <option value="{{$row->id}}">{{ $row->nom_module }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="description">Description</label>
                        <textarea id="description" placeholder="Description" name="description" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"></textarea>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="file">Decument</label>
                        <div class="flex justify-center items-center w-full">
                            <label for="file" class="flex flex-col justify-center items-center w-full rounded-md cursor-pointer bg-gray-700">
                                <div id="text" class="flex flex-col justify-center items-center p-4">
                                    <svg class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <p class="text-sm text-gray-400">
                                        <span class="font-semibold">Click to upload</span>
                                    </p>
                                </div>
                                <input id="file" type="file" name="file" onchange="change(event)" class="hidden" />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-2 text-white w-full md:w-64 bg-blue-600 rounded-md hover:bg-blue-900">Creer</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function change(e) {
            const file = e.target.files[0];
            document.querySelector("#text").innerHTML = `
                <p class="text-md text-gray-400">
                    <span id="text" class="font-semibold">${file?.name}</span>
                </p>
            `;
        }
    </script>
</body>



@endsection