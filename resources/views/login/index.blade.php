@extends('layouts.authLayout')

@section('container')
    <div class="flex flex-col justify-center flex-2">
        <img src="img/login image.png" alt="login image">
    </div>
    <div class="flex flex-col justify-center flex-1">
        <form action="#">
            <h2 class="text-[35px] font-semibold text-textPrimaryColor " >Login</h2>
            <div>
                <input type="text" placeholder="username" class="input w-full max-w-md h-16 rounded-customAuthLg drop-shadow-lg mt-10" />
            </div>
            <div>
                <input type="password" placeholder="password" class="input w-full max-w-md h-16 rounded-customAuthLg drop-shadow-lg mt-8" />
            </div>
            <div class="w-full max-w-md flex justify-end ">
                <a href="#" class="link mt-5">forgot password ?</a>
            </div>
            <button type="submit" class="btn rounded-customAuthLg bg-customSuccess w-full max-w-md mt-5 h-14 drop-shadow-lg border-none text-lg ">Login</button>
        </form>
        <div class="flex w-full max-w-md justify-center" >
            <p class="text-sm mt-5" >dont have account ? <a href="{{ route('register') }}" class="link" >register</a></p>
        </div>
    </div>
@endsection
