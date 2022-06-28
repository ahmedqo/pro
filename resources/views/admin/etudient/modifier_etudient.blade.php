@extends('admin.dashboard')

@section('content')

<body class="bg-gray-700">
    <h1 class="text-white text-2xl pb-4">Modifier Etudient</h1>
    <div class="w-full rounded-md bg-gray-800 p-4">
        <form action="{{ route('save.student') }}" method="post">
            @csrf
            <input type="hidden" value="{{$data->id}}" name="student_id">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="last-tname">Nom</label>
                        <input id="last-name" name="last_name" value="{{$data->last_name}}" type="text" placeholder="Nom" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="first-name">Prenom</label>
                        <input id="first-name" name="name" value="{{$data->name}}" type="text" placeholder="Prenom" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="phone">Telephone</label>
                        <input id="phone" type="tel" name="phone" value="{{$data->phone}}" placeholder="Telephone" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Email" value="{{$data->email}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="address">Adresse</label>
                        <textarea id="address" placeholder="{{$data->adress}}" name="adress" value="{{$data->adress}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"></textarea>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="password">Mot de passe</label>
                        <div class="relative">
                            <input id="password" name="password" value="{{$data->password}}" type="text" placeholder="Mot de passe" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />

                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-2 text-white w-64 bg-blue-600 rounded-md hover:bg-blue-900">Modifier</button>
                </div>
            </div>
        </form>
    </div>
    <script defer>
        function copy() {
            var el = document.querySelector("#password");
            el.select();
            document.execCommand("copy");
        }

        const pass = (Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15)).slice(10, 20);
        document.querySelector("#password").value = pass;
    </script>
</body>
@endsection