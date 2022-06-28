@extends('admin.dashboard')

@section('content')

<body class="bg-gray-700">
    <h1 class="text-white text-2xl pb-4">Liste Professeurs</h1>
    <div class="w-full rounded-md bg-gray-800 overflow-hidden">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-bold tracking-wide uppercase text-left border-b border-gray-700 text-gray-400 bg-gray-800">
                    <th class="px-4 py-3 text-center">Nom / Prenom</th>
                    <th class="px-4 py-3 text-center">Telephone</th>
                    <th class="px-4 py-3 text-center">Email</th>
                    <th class="px-4 py-3 text-center">Adresse</th>
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>
            @foreach ( $professors as $row)


            <tbody class="divide-y divide-gray-700 bg-gray-800">
                <tr class="text-gray-400">
                    <td class="px-4 py-3 text-sm text-center">
                        {{$row->nom}}{{$row->prenom}}
                    </td>
                    <td class="px-4 py-3 text-sm text-center">
                        {{$row->phone}}
                    </td>
                    <td class="px-4 py-3 text-xs text-center">
                        {{$row->email}}
                    </td>
                    <td class="px-4 py-3 text-sm text-center">
                        {{$row->adress}}
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex gap-2 items-center justify-center text-sm">
                            <a href="{{route('professor.edit',$row->id)}}" class="flex items-center justify-between text-sm font-medium leading-5 rounded-lg text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">

                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>

                            </a>
                            <a href="{{route('delete.prof',$row->id)}}" class="flex items-center justify-between text-sm font-medium leading-5 rounded-lg text-gray-400 focus:outline-none focus:shadow-outline-gray" id="delete" aria-label="Delete">

                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>

                            </a>

                        </div>
                    </td>
                </tr>

            </tbody>
            @endforeach
        </table>
    </div>
</body>
@endsection