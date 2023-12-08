@extends('layouts.main')

@section('container')
    <div class="w-full h-full flex flex-row gap-10" >
        <div class="flex flex-col flex-1 gap-8 ">
            <div class="flex gap-14 items-center">
                <div class="flex flex-col gap-3">
                    <h2 class="text-lg font-semibold" >Good morning</h2>
                    <h2>Taufiq Hidayah Abdullah</h2>
                </div>
                <img src="img/iamge user.png" alt="user image" class="w-14 h-14 drop-shadow-lg" >
            </div>
            <div class="flex flex-col w-full h-full bg-primaryColor rounded-customAuthSm drop-shadow-lg p-5 gap-4 ">
                <h2 class="text-sm" >Progress project</h2>
                <div class="flex flex-col gap-4">
                    <div class="flex w-full bg-customWhite px-3 py-4 rounded-customAuthSm drop-shadow-lg items-center gap-5 ">
                        <h2 class="text-sm flex-2" >nama project</h2>
                        <progress class="progress progress-accent w-56 flex-1" value="80" max="100"></progress>
                        <h2 class="text-sm" >80%</h2>
                    </div>
                    <div class="flex w-full bg-customWhite px-3 py-4 rounded-customAuthSm drop-shadow-lg items-center gap-5 ">
                        <h2 class="text-sm flex-2" >nama project</h2>
                        <progress class="progress progress-accent w-56 flex-1" value="50" max="100"></progress>
                        <h2 class="text-sm" >50%</h2>
                    </div>
                    <div class="flex w-full bg-customWhite px-3 py-4 rounded-customAuthSm drop-shadow-lg items-center gap-5 ">
                        <h2 class="text-sm flex-2" >nama project</h2>
                        <progress class="progress progress-accent w-56 flex-1" value="75" max="100"></progress>
                        <h2 class="text-sm" >75%</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 max-w-md h-full">
            <div class="flex flex-col gap-9 h-full " >
                <input type="text" placeholder="Search project" class="input w-full h-16 bg-primaryColor rounded-customAuthLg drop-shadow-lg " />
                <div class="flex flex-col p-5 bg-primaryColor h-full rounded-customAuthSm drop-shadow-lg gap-4" >
                    <h2 class="text-sm" >Tugas harian</h2>
                    <div class="flex flex-col gap-5" >
                        <div class="flex w-full bg-customWhite px-3 py-4 rounded-customAuthSm drop-shadow-lg items-center gap-5 justify-between ">
                            <h2 class="text-sm" >nama tugas</h2>
                            <h2 class="text-sm" >2 days</h2>
                        </div>
                        <div class="flex w-full bg-customWhite px-3 py-4 rounded-customAuthSm drop-shadow-lg items-center gap-5 justify-between ">
                            <h2 class="text-sm" >nama tugas</h2>
                            <h2 class="text-sm" >2 days</h2>
                        </div>
                        <div class="flex w-full bg-customWhite px-3 py-4 rounded-customAuthSm drop-shadow-lg items-center gap-5 justify-between ">
                            <h2 class="text-sm" >nama tugas</h2>
                            <h2 class="text-sm" >2 days</h2>
                        </div>
                        <div class="flex w-full bg-customWhite px-3 py-4 rounded-customAuthSm drop-shadow-lg items-center gap-5 justify-between ">
                            <h2 class="text-sm" >nama tugas</h2>
                            <h2 class="text-sm" >2 days</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
