@extends('layouts.app')
@section('content')
    <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-3">
        <img src="{{ asset('image/bg1.png') }}" alt="" class="absolute inset-0 -z-10 size-full object-cover object-right md:object-center">
        {{-- <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 size-full object-cover object-right md:object-center"> --}}
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">PlayStation</h2>
            <p class="mt-8 text-pretty text-lg font-medium text-gray-300 sm:text-xl/8">Jelajahi dunia game seru tanpa batas di [Nama Rental]!
                Nikmati pengalaman main PlayStation dengan proses sewa yang cepat
                dan mudah. Kami menawarkan berbagai pilihan game terbaru dan
                konsol dengan kualitas terbaik, serta tempat bermain yang nyaman.
                Pesan sekarang, rasakan sensasi main yang tak terlupakan di [Nama Rental]!</p>
        </div>
        <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            {{-- <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base/7 font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
            <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>
            <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>
            <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
            <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
            </div> --}}
            <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/7 text-gray-300">Offices worldwide</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">12</dd>
            </div>
            <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/7 text-gray-300">Full-time colleagues</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">300+</dd>
            </div>
            <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/7 text-gray-300">Hours per week</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">40</dd>
            </div>
            <div class="flex flex-col-reverse gap-1">
                <dt class="text-base/7 text-gray-300">Paid time off</dt>
                <dd class="text-4xl font-semibold tracking-tight text-white">Unlimited</dd>
            </div>
            </dl>
        </div>
        </div>
    </div>
{{-- kedua --}}
<div class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row justify-between items-center border-b-2 border-red-500 pb-2 mb-4">
            <div class="text-lg font-bold mb-2 md:mb-0">
                PRODUCTS
            </div>
            <div class="flex space-x-4">
                <a class="active" href="#">Semua</a>
                <a href="#">Regular</a>
                <a href="#">Vip</a>
            </div>
        </div>
        <div class="flex justify-center space-x-4 mb-4">
            <a class="active" href="#">Playstation 3</a>
            <a href="#">Playstation 4</a>
            <a href="#">Playstation 5</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($playstation as $ps)
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img alt="Playstation console with controller" class="w-full mb-4" height="150" src="{{ asset('storage/' . $ps->gambar) }}" width="200"/>
                <div class="text-gray-500 text-sm">{{ $ps->category->nama_kategori }}</div>
                <p class="text-lg font-bold">{{ $ps->alat->nama_alat }}</p>
                <div class="text-red-500 text-lg">{{ $ps->harga }}</div>
                <div class="flex justify-between items-center mt-4">
                    <button class="text-blue-500">DETAIL</button>
                    <div class="text-green-500">TERSEDIA</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
