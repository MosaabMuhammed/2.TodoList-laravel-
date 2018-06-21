<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Todo List</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

        @include('inc.navbar')


        <div class="container">
            @yield('content')
        </div>


        @include('inc.footer')

    </body>
</html>
