<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title></title>
</head>
<body>

@include('include.navbar')

<div class="container p-10 mx-auto">
    @yield('page-content')
</div>

<div class="flex justify-center mx-auto ">
    @yield('page-card')
</div>


</body>
</html>


