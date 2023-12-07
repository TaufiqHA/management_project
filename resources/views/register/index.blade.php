@extends('layouts.authLayout')

@section('container')
    <div class="flex flex-col justify-center items-center flex-1">
        <img src="img/register image.png" alt="login image" class="w-3/4">
    </div>
    <div class="flex flex-col justify-center flex-1">
        <form action="#">
            <h2 class="text-[35px] font-semibold text-textPrimaryColor " >Register</h2>
            <div>
                <input type="text" placeholder="full name" class="input w-full max-w-md h-12 rounded-customAuthLg drop-shadow-lg mt-5" />
            </div>
            <div>
                <input type="text" placeholder="username" class="input w-full max-w-md h-12 rounded-customAuthLg drop-shadow-lg mt-5" />
            </div>
            <div>
                <input type="password" placeholder="password" class="input w-full max-w-md h-12 rounded-customAuthLg drop-shadow-lg mt-5" />
            </div>
            <div>
                <input type="password" placeholder="confirm password" class="input w-full max-w-md h-12 rounded-customAuthLg drop-shadow-lg mt-5" />
            </div>
            <button type="submit" class="btn rounded-customAuthLg bg-customSuccess w-full max-w-md mt-5 h-14 drop-shadow-lg border-none text-lg ">Register</button>
        </form>
        <div class="flex w-full max-w-md justify-center" >
            <p class="text-sm mt-5" >already have accourt? <a href="{{ route('login') }}" class="link" >login</a></p>
        </div>
    </div>
@endsection
