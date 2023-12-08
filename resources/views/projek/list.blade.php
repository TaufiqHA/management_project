@extends('layouts.main')

@section('container')
    <div class="w-full h-full flex flex-col gap-3 " >
        <div class="w-full" >
            <h2 class="text-lg font-semibold" >List project</h2>
        </div>
        <div class="w-full h-full flex flex-col bg-primaryColor rounded-customAuthSm drop-shadow-lg p-5 gap-4" >
            <div class="collapse bg-customWhite rounded-customAuthSm drop-shadow-lg">
                <input type="radio"  name="my-accordion-1" checked />
                <div class="collapse-title text-xl font-medium">
                  nama project
                </div>
                <div class="collapse-content flex flex-col gap-5">
                    <h2>Deadline: 11 Desember 2023</h2>
                    <h2>Harga: Rp. 25.000.000</h2>
                    <h2>Progress:</h2>
                    <div class="w-full flex items-center gap-5">
                        <progress class="progress progress-accent w-56 flex-1" value="80" max="100"></progress>
                        <h2 class="text-sm" >80%</h2>
                    </div>
                </div>
            </div>
            <div class="collapse bg-customWhite rounded-customAuthSm drop-shadow-lg">
                <input type="radio"  name="my-accordion-1" />
                <div class="collapse-title text-xl font-medium">
                  nama project
                </div>
                <div class="collapse-content flex flex-col gap-5">
                    <h2>Deadline: 11 Desember 2023</h2>
                    <h2>Harga: Rp. 25.000.000</h2>
                    <h2>Progress:</h2>
                    <div class="w-full flex items-center gap-5">
                        <progress class="progress progress-accent w-56 flex-1" value="80" max="100"></progress>
                        <h2 class="text-sm" >80%</h2>
                    </div>
                </div>
            </div>
            <div class="collapse bg-customWhite rounded-customAuthSm drop-shadow-lg">
                <input type="radio"  name="my-accordion-1" />
                <div class="collapse-title text-xl font-medium">
                  nama project
                </div>
                <div class="collapse-content flex flex-col gap-5">
                    <h2>Deadline: 11 Desember 2023</h2>
                    <h2>Harga: Rp. 25.000.000</h2>
                    <h2>Progress:</h2>
                    <div class="w-full flex items-center gap-5">
                        <progress class="progress progress-accent w-56 flex-1" value="80" max="100"></progress>
                        <h2 class="text-sm" >80%</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
