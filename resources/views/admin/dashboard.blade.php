<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">





    <title>Blank</title>
</head>

<body class="bg-gray-700">
    <div class="flex">
        <!-- sidebar start -->

        @include('admin.content.sidebar')

        <!-- sidebar end -->
        <div class="flex-1">
            <!-- header start -->
            @include('admin.content.header')

            <!-- header end -->
            <!-- container start -->
            <main class="max-w-7xl mx-auto p-4">
                @yield('content')




            </main>
            <!-- container end -->
        </div>
    </div>
    <script defer>
        function trigger(e) {
            const target = e.target.dataset.target;
            const el = document.querySelector(`#${target}`);
            el.classList.toggle("hidden");
        }
    </script>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        console.log(toastr);
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- sweet alert -->
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");

                Swal.fire({
                    title: 'Es-tu sûr?',
                    text: "Vous ne pourrez pas revenir en arrière !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, supprimez-le !'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                            'Supprimé!',
                            'élève a été supprimé',
                            'success'
                        )
                    }
                })

            });
        });
    </script>
</body>

</html>