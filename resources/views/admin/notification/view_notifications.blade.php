@extends('admin.dashboard')

@section('content')
<div class="flex items-center justify-between">
    <h1 class="text-white text-2xl pb-4">Notifications</h1>
    <a href="{{ route('write.notification') }}" class="p-2 rounded-md bg-gray-800">
        <svg class="w-5 h-5 text-sm font-medium text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
        </svg>
    </a>
</div>
<div class="flex flex-col gap-4">
    @forelse ( $data as $row )
    <div class="w-full rounded-md bg-gray-800 p-4 text-white text-md">
        {{ $row->notification_msg }}
    </div>
    @empty
    <div class="w-full rounded-md bg-gray-800 p-4 text-white text-md text-center " style="color: rgb(220 38 38);">
        Aucune notification disponible pour le moment
    </div>
    @endforelse


</div>
@endsection