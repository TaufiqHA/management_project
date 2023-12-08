@extends('layouts.main')

@section('container')
    <div class="w-full h-full flex flex-col gap-5 " >
        <div class="w-full" >
            <h2 class="text-lg font-semibold" >User settings</h2>
        </div>
        <div class="w-full h-full flex bg-primaryColor rounded-customAuthSm drop-shadow-lg" >
            <div class="w-full h-full flex-1 flex flex-col items-center p-5 py-16 gap-4" >
                <img src="img/iamge user.png" alt="user" class="w-44" >
                <a href="#" class="flex items-center gap-1">
                    <h2>Edit image</h2>
                    <img src="icons/create.png" alt="edit" class="w-4 h-4" >
                </a>
            </div>
            <div class="w-full h-full flex-1 flex flex-col items-center p-5 gap-10 py-10 px-10" >
                <div class="w-full" >
                    <input type="text" placeholder="fullname" class="input w-full h-16 rounded-customAuthLg drop-shadow-lg" />
                </div>
                <div class="w-full" >
                    <input type="text" placeholder="email" class="input w-full h-16 rounded-customAuthLg drop-shadow-lg" />
                </div>
                <div class="w-full" >
                    <input type="text" placeholder="password" class="input w-full h-16 rounded-customAuthLg drop-shadow-lg" />
                </div>
                <button type="submit" class="btn rounded-customAuthLg bg-customSuccess w-full max-w-md mt-5 h-14 drop-shadow-lg border-none">Save</button>
            </div>
        </div>
    </div>
@endsection
