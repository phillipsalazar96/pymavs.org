
@include('layouts.header')

<body>
    <div id="app" >
            @include('layouts.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>

    </footer>
</body>
</html>
