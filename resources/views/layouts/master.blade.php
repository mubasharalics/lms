<!DOCTYPE html>
<html>
    <head>
        <title>Welcome - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <p>Master Templete 1.</p>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>