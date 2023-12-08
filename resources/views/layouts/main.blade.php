<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SMP | {{ $title }}</title>
</head>
<body>
    <div class="p-5 w-full h-screen flex gap-8 ">
        <div class="sidebar w-[100px] h-full bg-primaryColor p-3 rounded-customAuthSm flex flex-col drop-shadow-lg ">
            <a href="{{ url("/") }}" >
                <img src="img/logo fix.png" alt="logo">
            </a>
            <div class="sidebar-menu flex flex-col items-center gap-10 h-full justify-center" >
                <a href="{{ url("/create") }}">
                    <img src="icons/create.png" alt="create_logo" class="w-10" >
                </a>
                <a href="{{ url("/project") }}">
                    <img src="icons/project.png" alt="project_logo" class="w-10" >
                </a>
                <a href="#">
                    <img src="icons/deadline.png" alt="project_logo" class="w-10" >
                </a>
                <a href="{{ url("/user") }}">
                    <img src="icons/settings.png" alt="settings_logo" class="w-10" >
                </a>
                <a href="">
                    <img src="icons/logout.png" alt="logout_logo" class="w-10" >
                </a>
            </div>
        </div>
        <div class="main h-full w-full ">
            @yield('container')
        </div>
        <!-- Open the modal using ID.showModal() method -->
        <dialog id="my_modal_2" class="modal">
           <x-modal-box content="Login"></x-modal-box>
        </dialog>
    </div>
</body>
</html>
