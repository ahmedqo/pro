@extends('admin.dashboard')

@section('content')
<h1 class="text-white text-2xl pb-4">Nouveau Notification</h1>
<div class="w-full rounded-md bg-gray-800 p-4">
    <form action="{{route('submit.notification')}}" method="post">
        @csrf
        <div class="flex flex-col gap-4">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1 flex flex-col gap-2">
                    <label class="block text-white" for="notification">Notification</label>
                    <textarea id="notification" name="notification_msg" placeholder="Notification" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"></textarea>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 text-white w-full md:w-64 bg-blue-600 rounded-md hover:bg-blue-900">Creer</button>
            </div>
        </div>
    </form>
</div>
@endsection