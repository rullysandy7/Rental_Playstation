@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
<section class="flex flex-col">
    <header class="flex flex-col w-full max-md:max-w-full">
      <nav class="flex flex-col justify-center px-32 py-4 w-full bg-zinc-900 max-md:px-5 max-md:max-w-full">
        <div class="flex flex-wrap items-start w-full max-md:max-w-full">
          <div class="flex flex-col grow shrink px-4 min-h-[1px] min-w-[240px] w-[235px]">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/64f3458ba510b32d4947d72baebba0df950f0c965ef26c868dd3117b1c612f3a?placeholderIfAbsent=true&apiKey=e4c514b5166b42f5aa91247b7325ede6" alt="Company Logo" class="object-contain max-w-full aspect-[2.42] w-[169px]" />
          </div>
          <div class="flex flex-col grow shrink justify-center p-4 bg-white min-h-[1px] min-w-[240px] w-[527px] max-md:max-w-full">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ae3458388d68698cdf119b7467f5bc12d35f3ed0e04f7d1efa5b5578c040d689?placeholderIfAbsent=true&apiKey=e4c514b5166b42f5aa91247b7325ede6" alt="Search Bar" class="object-contain w-full aspect-[13.89] max-md:max-w-full" />
          </div>
          <div class="flex flex-col grow shrink pr-4 pl-20 font-medium text-center text-white min-h-[1px] min-w-[240px] w-[234px] max-md:pl-5">
            <button class="flex gap-5 items-start py-4 w-full" aria-label="Shopping Cart">
              <div class="flex relative flex-col pb-px w-[90px]">
                <span class="pr-9 pl-9 w-full text-lg leading-5 whitespace-nowrap max-md:px-5"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                  </svg>
                  </span>
                <span class="z-0 self-center text-xs leading-4">Your Cart</span>
                <span class="absolute -top-2.5 px-2 w-5 h-5 text-xs leading-5 whitespace-nowrap bg-rose-700 rounded-xl min-h-[20px] right-[15px]" aria-label="3 items in cart">3</span>
              </div>
            </button>
          </div>
        </div>
      </nav>
    </header>

    <nav class="flex flex-col items-center px-32 pt-1 pb-0.5 w-full text-sm font-medium leading-5 whitespace-nowrap bg-white border-b-2 border-solid border-t-[2.667px] border-y-gray-200 text-slate-800 max-md:px-5 max-md:max-w-full">
      <div class="flex flex-col px-4 w-full max-w-[1170px] max-md:max-w-full">
        <ul class="flex flex-wrap gap-8 justify-center items-start w-full max-md:max-w-full">
          <li class="flex flex-col py-5 w-11 text-rose-700">
            <button class="focus:outline-none" aria-current="page">Semua</button>
            <div class="flex bg-rose-700 min-h-[2px] w-[50px]"></div>
          </li>
          <li><button class="pt-5 pb-6 w-14 focus:outline-none">Regular</button></li>
          <li><button class="pt-5 pb-6 w-6 focus:outline-none">Vip</button></li>
        </ul>
      </div>
    </nav>

    <main class="flex flex-col items-center px-32 pt-8 w-full max-md:px-5 max-md:max-w-full">
      <section class="flex flex-col max-w-full w-[1170px]">
        <div class="flex flex-col pt-4 w-full max-md:max-w-full">
          <header class="flex flex-wrap gap-10 items-start w-full font-bold max-md:max-w-full">
            <h1 class="text-2xl leading-7 uppercase text-slate-800">Produk</h1>
            <nav class="flex flex-col flex-1 shrink items-start text-sm leading-5 basis-0 min-w-[240px] text-slate-400 max-md:max-w-full">
              <ul class="flex gap-5 items-start">
                <li class="flex justify-center items-start text-rose-700 w-[95px]">
                  <button class="flex flex-col w-[95px] focus:outline-none" aria-current="page">
                    <span>Playstation 3</span>
                    <div class="flex w-full bg-rose-700 min-h-[2px]"></div>
                  </button>
                </li>
                <li>
                  <button class="pb-0.5 focus:outline-none">Playstation 4</button>
                </li>
                <li>
                  <button class="pb-0.5 focus:outline-none">Playstation 5</button>
                </li>
              </ul>
            </nav>
          </header>

          <div class="flex relative flex-col mt-8 w-full min-h-[1px] max-md:max-w-full">
            <div class="flex z-0 flex-col w-full max-md:max-w-full">
              <div class="flex pb-16 w-full min-h-[542px] max-md:max-w-full">
                <div class="flex z-10 flex-wrap gap-8 p-4 w-full">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbdb3c5d7a2f4c48db6715e72a65404ba8741d8cc52e0ae9f97f7def8ef258e3?placeholderIfAbsent=true&apiKey=e4c514b5166b42f5aa91247b7325ede6" alt="Product 1" class="object-contain grow shrink shadow-sm aspect-[0.61] min-h-[1px] min-w-[240px] w-[210px]" />
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbdb3c5d7a2f4c48db6715e72a65404ba8741d8cc52e0ae9f97f7def8ef258e3?placeholderIfAbsent=true&apiKey=e4c514b5166b42f5aa91247b7325ede6" alt="Product 2" class="object-contain grow shrink shadow-sm aspect-[0.61] min-h-[1px] min-w-[240px] w-[210px]" />
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbdb3c5d7a2f4c48db6715e72a65404ba8741d8cc52e0ae9f97f7def8ef258e3?placeholderIfAbsent=true&apiKey=e4c514b5166b42f5aa91247b7325ede6" alt="Product 3" class="object-contain grow shrink shadow-sm aspect-[0.61] min-h-[1px] min-w-[240px] w-[210px]" />
                </div>
              </div>
            </div>
            {{-- <nav class="flex absolute z-0 gap-1 items-start px-0.5 w-12 text-sm leading-4 text-center whitespace-nowrap bottom-[42px] right-[15px] text-slate-800" aria-label="Pagination">
              <button class="flex items-center py-1 pr-1.5 pl-2 w-5 h-5 bg-white rounded-xl border border-gray-200 border-solid min-h-[20px] focus:outline-none" aria-label="Previous page"></button>
              <button class="flex items-center py-1 pr-1.5 pl-2 w-5 h-5 bg-white rounded-xl border border-gray-200 border-solid min-h-[20px] focus:outline-none" aria-label="Next page"></button>
            </nav> --}}
          </div>
        </div>
      </section>
    </main>

    <footer class="flex flex-col mt-14 w-full bg-zinc-900 max-md:mt-10 max-md:max-w-full">
      <div class="flex flex-col justify-center px-32 py-8 w-full max-md:px-5 max-md:max-w-full">
        <div class="flex flex-wrap items-start w-full max-md:max-w-full">
          <section class="flex flex-col flex-1 shrink px-4 py-8 text-sm basis-0 min-h-[1px] min-w-[240px]">
            <h2 class="text-lg font-bold leading-5 text-white uppercase">Kontak Kami</h2>
            <address class="flex flex-col mt-2.5 not-italic">
              <a href="tel:+021955184" class="flex gap-4 items-center pl-0.5 h-[17px] mt-4 text-zinc-400 hover:text-white" style="text-decoration: none">
                <span class="leading-4 text-rose-700">📞</span>
                <span class="font-medium leading-5">+62 852-4556-4812</span>
              </a>
              <a href="mailto:email@email.com" class="flex gap-4 items-center h-[17px] mt-4 text-zinc-400 hover:text-white" style="text-decoration: none">
                <span class="leading-4 text-rose-700">✉️</span>
                <span class="font-medium leading-5">email@email.com</span>
              </a>
            </address>
          </section>

          <nav class="flex flex-col flex-1 shrink px-4 py-8 basis-0 min-h-[1px] min-w-[240px]">
            <h2 class="text-lg font-bold leading-5 text-white uppercase">Tautan penting</h2>
            <ul class="mt-1 text-sm font-medium leading-5 text-zinc-400">
              <li class="mt-4">Tentang Kami</li>
              <li class="mt-4">Cara Sewa</li>
              <li class="mt-4">Bantuan</li>
            </ul>
          </nav>

          <nav class="flex flex-col flex-1 shrink px-4 py-8 basis-0 min-h-[1px] min-w-[240px]">
            <h2 class="text-lg font-bold leading-5 text-white uppercase">Nama Rental PS</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.273134036164!2d112.27579047376142!3d-7.5451641744857145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786bb47801c3f7%3A0xe5236f7510442415!2sUnipdu%20Jombang!5e0!3m2!1sid!2sid!4v1732299885083!5m2!1sid!2sid" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </nav>

        </div>
      </div>

      <div class="flex flex-col justify-center px-32 py-8 w-full text-center bg-neutral-800 max-md:px-5 max-md:max-w-full">
        <div class="flex flex-col px-4 w-full min-h-[1px] max-md:max-w-full">
          <p class="mt-8 text-xs leading-4 text-zinc-400">
            Copyright ©2024
            <a href="#" class="font-medium text-slate-800 hover:text-white">Colorlib</a>
          </p>
        </div>
      </div>
    </footer>
  </section>
@endsection
