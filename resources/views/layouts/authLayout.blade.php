<!DOCTYPE html>
<html lang="en" data-theme = "light" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SMP | {{ $title }}</title>
</head>
<body>
    <div class="w-full h-screen px-[120px] py-[60px]" >
        <div class="w-full h-full bg-primaryColor rounded-customAuthMd drop-shadow-lg py-[50px] ">
            <div class="flex flex-row w-full h-full">
                @yield('container')
            </div>
        </div>
    </div>
</body>
</html>
