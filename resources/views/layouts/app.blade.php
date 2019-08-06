<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
   
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <!-- Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="flex flex-row container px-4 px-7 mt-16">
            
            <aside class="h-16 w-1/3">
                <h1>Logo</h1>
                <nav class="w-18 h-18 p-2">
                    <ul class="bg-">
                        <li>
                            <router-link to="/">home</router-link>
                        </li>
                        <li>
                            <router-link to="/about">about</router-link>
                        </li>
                        <li>
                            <router-link to="/update">update</router-link>
                        </li>
                        <li>
                            <router-link to="/createClients">CreateClients</router-link>
                        </li>
                        <li>
                            <router-link to=""></router-link>
                        </li>
                    </ul>
                </nav>
            </aside>
            <main class="h-6 w-2/3">
                <router-view></router-view>
            </main>
        </div>
    </div>
</body>
</html>
