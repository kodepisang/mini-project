<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ $title }}</title>
    <!-- Scripts -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @vite(['resources/sass/app.scss'])
</head>

<body>

    <div id="mySidenav" class="sidenav bg-black">
        {{-- <div class="d-flex justify-content-end">
            <button class="btn btn-danger rounded-pill text-light" id="closeNav"><i
                    class="bi bi-arrow-right"></i></button>
        </div> --}}
        <div class="d-flex justify-content-center p-1 my-3">
            <img src="https://placekitten.com/g/100/100" height="170" width="170"
                class="bg-light rounded-circle me-2 p-1" alt="...">
        </div>
        <div class="d-flex justify-content-center py-3 text-light">
            <h2>My project</h2>
        </div>
        <div class="list-group">
            @include('components.accordion')

        </div>

    </div>

    <div id="main">
        <nav class="navbar bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="toggleNav">
                    <span class="text-light"><i class="bi bi-list"></i> Mini project V.0.1</span>
                </a>
                <div class="d-flex">
                    <div class="ms-2 d-flex align-items-center bg-light rounded-pill p-1 me-2">
                        <img src="https://placekitten.com/g/100/100" height="30" width="30"
                            class="rounded-circle me-2" alt="...">
                        <div style="width: 100px">Mustaqim</div>
                    </div>
                    {{-- <a href="{{ route('logout') }}" class="btn btn-danger rounded-pill" id="logout">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form> --}}
                    <a class="btn btn-danger rounded-pill" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </nav>
        <div class="height-100 bg-light">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    @vite(['resources/js/app.js', 'resources/js/myscript.js'])

    <!--Container Main start-->


</body>
<!--Container Main end-->
<!--Container Main start-->

<!--Container Main end-->

</html>
