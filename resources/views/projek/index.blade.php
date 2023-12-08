@extends('layouts.main')

@section('container')
    <div class="h-full w-full flex flex-col gap-7" >
        <div class="w-full" >
            <h2 class="text-lg font-semibold" >Create project</h2>
        </div>
        <div class="flex w-full h-full gap-12">
            <div class="flex-1 w-full h-full flex flex-col gap-8" >
                <form action="#" class="w-full h-full rounded-customAuthSm bg-primaryColor drop-shadow-lg p-4 flex flex-col gap-4 " >
                    <label class="form-control w-full">
                        <div class="label">
                          <span class="label-text">Nama project</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full rounded-customAuthLg " />
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                          <span class="label-text">Harga project</span>
                        </div>
                        <input type="text" placeholder="Type here" class="input input-bordered w-full rounded-customAuthLg " />
                    </label>
                </form>
                <div class="w-full h-full rounded-customAuthSm bg-primaryColor drop-shadow-lg p-4 flex items-center" >
                    <label class="form-control w-full">
                        <div class="label">
                          <span class="label-text">Dokumen pendukung</span>
                        </div>
                        <input type="file" class="file-input file-input-bordered w-full" />
                    </label>
                </div>
            </div>
            <div class="flex-1 bg-primaryColor w-full max-h-full rounded-customAuthSm drop-shadow-lg p-4 flex flex-col gap-5" >
                <h2 class="label-text" >Tambahkan tugas harian</h2>
                <div class="flex flex-col w-full gap-3">
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
                <button class="btn w-full bg-customSuccess border-none drop-shadow-lg rounded-customAuthLg " onclick="my_modal_2.showModal()" >Tambah tugas</button>
            </div>
        </div>
    </div>
@endsection
