@extends('admin.dashboard')

@section('content')

<body class="bg-gray-700">
    <h1 class="text-white text-2xl pb-4">Profile</h1>
    <div class="w-full rounded-md bg-gray-800 p-4">
        <form action="{{ route('admin.edit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="admin_id" value="{{$data->id}}">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2 items-center">
                    <img class="rounded-md mx-auto w-44 h-44 object-cover" id="_preview" src="{{(!empty($data->profile_photo_path))? url('upload/profilepic/'.$data->profile_photo_path):url('upload/no_image.jpg')}}" />
                    <label for="file" class="flex flex-col justify-center items-center w-max">
                        <p class="w-max text-white px-4 py-2 text-center rounded-md bg-gray-700 hover:bg-gray-900 cursor-pointer">
                            Ajouter Image
                        </p>
                        <input id="file" type="file" name="file" onChange="preview(event)" class="hidden" />
                    </label>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="last-tname">Nom</label>
                        <input id="last-name" type="text" placeholder="Nom" name="name" value="{{$data->name}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="first-name">Prenom</label>
                        <input id="first-name" type="text" placeholder="Prenom" name="last_name" value="{{$data->last_name}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="phone">Telephone</label>
                        <input id="phone" type="tel" placeholder="Telephone" name="phone" value="{{$data->phone}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="email">Email</label>
                        <input id="email" type="email" placeholder="Email" name="email" value="{{$data->email}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex flex-col gap-2">
                        <label class="block text-white" for="address">Adresse</label>
                        <textarea id="address" placeholder="{{$data->adress}}" name="adress" value="{{$data->adress}}" class="w-full bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">{{$data->adress}}</textarea>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-2 text-white w-full md:w-64 bg-blue-600 rounded-md hover:bg-blue-900">Creer</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function preview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("_preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
</body>
@endsection