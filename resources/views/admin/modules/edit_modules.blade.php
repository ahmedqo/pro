@extends('admin.dashboard')

@section('content')

<body class="bg-gray-700">
    <h1 class="text-white text-2xl pb-4">Modifier Module</h1>
    <div class="w-full rounded-md bg-gray-800 p-4">
        <form action="{{route('modify.modules')}}" method="post">
            @csrf
            <input type="hidden" name="module_id" value="{{$data->id}}">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="last-tname">Code</label>
                        <input id="last-name" type="text" placeholder="Code" name="code_unique" value="{{$data->code_unique}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="first-name">Titre</label>
                        <input id="first-name" type="text" placeholder="Titre" name="nom_module" value="{{$data->nom_module}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="address">Professeur</label>

                        <select name="id_professeur" id="" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @foreach ( $prof as $row)
                            <option value="{{$row->id}}">{{$row->nom}} {{$row->prenom}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="address">Description</label>
                        <textarea id="address" placeholder="{{$data->description}}" name="description" value="{{$data->description}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"></textarea>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-2 text-white w-full md:w-64 bg-blue-600 rounded-md hover:bg-blue-900">Creer</button>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection