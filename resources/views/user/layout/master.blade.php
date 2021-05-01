<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title." | ".ENV('APP_NAME') }}</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="{{ asset('template/admin/assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('template/admin/assets/vendors/iconly/bold.css') }}">
        <link rel="stylesheet" href="{{ asset('template/admin/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('template/admin/assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('template/admin/assets/vendors/toastify/toastify.css') }}">
        <link rel="stylesheet" href="{{ asset('template/admin/assets/vendors/simple-datatables/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('template/admin/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('template/admin/assets/css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
        <link rel="shortcut icon" href="{{ asset('template/admin/assets/images/favicon.svg') }}" type="image/x-icon">
    </head>
    <body>
        <div id="app">
            @include('user.layout.sidebar')
            <div id="main" class='layout-navbar'>
                @include('user.layout.header')
                <div id="main-content" class="pt-1">
                    @yield('content')
                    {{-- @include('user.layout.footer') --}}
                </div>
                @yield('modal')
            </div>
        </div>
        <script src="{{ asset('template/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('template/admin/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template/admin/assets/vendors/toastify/toastify.js') }}"></script>
        <script src="{{ asset('template/admin/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('template/admin/assets/js/main.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
        @yield('js')
        @if(session("notif"))
            <script>
                Toastify({
                    text: "{{ session("notif") }}",
                    duration: 5000,
                    close:true,
                    stopOnFocus: true,
                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                }).showToast();
            </script>
        @endif
        @if (!$errors->isEmpty())
            <script>
                Toastify({
                    text: "{{ implode('\n', $errors->all()) }}",
                    duration: 5000,
                    close:true,
                    stopOnFocus: true,
                    backgroundColor: "#dc3545",
                }).showToast();
            </script>
        @endif
    </body>
</html>