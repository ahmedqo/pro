@extends('etudiants.students_page')
@section('title', 'Liste modules')
@section('content')
    @php
    $id = Auth::user()->id;
    $data = App\Models\Modules::latest()->get();
    @endphp
    <h1 class="text-2xl md:text-4xl font-black text-gray-900">Liste des modules</h1>
    <div class="w-full flex gap-4 flex-wrap items-start">
        <div class="w-max-full w-full flex-1 bg-white rounded-md overflow-hidden shadow-md">
            <div class="w-full rounded-md overflow-x-auto">
                <table class="w-full table-auto">
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($data as $row)
                            <tr class="text-grey-900 even:bg-gray-50">
                                <td class="px-4 py-3 text-md">
                                    <a href="{{ route('devoirs.list', $row->id) }}"
                                        class="w-full block cursor-pointer focus:outline-none focus:underline hover:underline">
                                        {{ $row->nom_module }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bg-white rounded-md overflow-hidden shadow-md w-full md:w-1/5">
            <div class="flex flex-col gap-2 p-4">
                <h1 class="text-lg text-gray-900 mb-2">Etudients en ligne:</h1>
                <div class="flex gap-2 items-center">
                    <img src="" class="w-10 h-10 rounded-full pointer-events-none object-cover">
                    <p class="text-md text-gray-900">Qoreichi Ahmed</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="" class="w-10 h-10 rounded-full pointer-events-none object-cover">
                    <p class="text-md text-gray-900">Qoreichi Ahmed</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="" class="w-10 h-10 rounded-full pointer-events-none object-cover">
                    <p class="text-md text-gray-900">Qoreichi Ahmed</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="" class="w-10 h-10 rounded-full pointer-events-none object-cover">
                    <p class="text-md text-gray-900">Qoreichi Ahmed</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="" class="w-10 h-10 rounded-full pointer-events-none object-cover">
                    <p class="text-md text-gray-900">Qoreichi Ahmed</p>
                </div>
            </div>
        </div>
    </div>
@endsection
