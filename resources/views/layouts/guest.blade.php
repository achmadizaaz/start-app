<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

                
        <script src="https://testing.unmerpas.ac.id/sarpras-assets/plugin/jquery/jquery.min.js"></script>
        <script>
            if (localStorage.getItem('mode') === 'dark') {
                $('html').attr('data-bs-theme', 'dark');
                $("#icon-mode").addClass("bi-moon-stars-fill").removeClass("bi-sun-fill");
            }

            // Toggle dark mode on button click
            $('#darkModeToggle').click(function() {
                $('html').attr('data-bs-theme', 'dark');
                let mode = 'dark';
                // Save user preference to localStorage
                localStorage.setItem('mode', mode);

                $("#icon-mode").addClass("bi-moon-stars-fill").removeClass("bi-sun-fill");
 
            });

            // Toggle light mode on button click
            $('#lightModeToggle').click(function() {
                // $('html').removeClass('dark-mode');
                $('html').removeAttr('data-bs-theme', 'dark');

                let mode = 'light';
                // Save user preference to localStorage
                localStorage.setItem('mode', mode);
                
                $("#icon-mode").addClass("bi-sun-fill").removeClass("bi-moon-stars-fill");
            });
        </script>
    </head>
    <body class="d-flex align-items-center py-4 bg-body-tertiary">
        @yield('content')

       
    </body>
</html>
