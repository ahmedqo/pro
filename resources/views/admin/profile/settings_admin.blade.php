@extends('admin.dashboard')

@section('content')

<body>
    <h1 class="text-white text-2xl pb-4">Changer mot de passe</h1>
    <div class="w-full rounded-md bg-gray-800 p-4">
        <form action="{{ route('admin.password') }}" method="post">
            @csrf

            <div class="flex flex-col gap-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="old-pass">Ancien mot de passe</label>
                        <input id="old-pass" type="password" name="old_password" placeholder="Ancien mot de passe" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="new-pass">Nouveau mot de passe</label>
                        <input id="new-pass" type="password" name="password" placeholder="Nouveau mot de passe" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="confirm-pass">Confirmer mot de passe</label>
                        <input id="confirm-pass" type="password" name="password" placeholder="Confirmer mot de passe" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-2 text-white w-full md:w-64 bg-blue-600 rounded-md hover:bg-blue-900">Modifier Mot de pass</button>
                </div>
            </div>
        </form>
    </div>
</body>



@endsection