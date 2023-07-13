@extends('user/layout')
@section('title','HOME')
@section('content')


<section id="home" class="pt-24 md:pt-24 pb-16 bg-white dark:bg-dark">
    <div class="container md:px-2 lg:px-8">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2 ">
                <h1 class="text-base font-bold text-orange-500 md:text-xl animated infinite fadeIn duration-700"> E-PENGADUAN
                <span class="block font-extrabold text-slate-600 dark:text-white text-4xl mt-1 lg:text-5x uppercase animated infinite fadeIn duration-700">pengaduan masyarakat</span></h1>
                <p class="font-medium text-secondary pt-4  mb-10 leading-relaxed dark:text-white animated  infinite fadeIn duration-700" data-wow-delay="1s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="index" class="text-base font-semibold text-white
                bg-orange-500 py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80
                transition  ease-in-out float-left mr-2 animated infinite fadeIn duration-700">Isi pengaduan</a>
                <a href="history" class="text-base font-semibold text-orange-600
                bg-transparent py-3 px-8 rounded-full  hover:opacity-80
                transition  ease-in-out float-left animated  infinite fadeIn duration-700">Lihat History</a>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative mt-10 lg:mt-9 lg:right-0 animated infinite fadeIn duration-700"  data-wow-delay="1.6s">
                    <img src="{{asset('img/tema.png')}}" alt="Honda" class="relative z-10 max-w-full mx-auto 
                     ">
                </div>
            </div>
        </div>
    </div>
    
</section>

<section id="about" class="pt-36 pb-24 dark:bg-dark">
    <div class="container px-12">
        <div class="flex flex-wrap">


            <div class="w-full px-4 lg:w-1/2 animated infinite fadeIn duration-700">
                <img src="{{asset('img/joss.png')}}" alt="Layanan" class=" " width="400">
            </div>




            <div class="w-full px-4 mt-16 mb-10 lg:w-1/2 ">
                <h4 class="font-bold uppercase text-orange-500 tex-xl mb-3 animated infinite fadeIn duration-700">Tentang E-PENGADUAN</h4>
                <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl  dark:text-white animated infinite fadeIn duration-700">Yuk,Laporkan Kejahatan Disekitarmu</h2>
                <p class="font-medium text-base text-secondary max-w-xl lg:text-lg animated infinite fadeIn duration-700">Aplikasi Pengaduan Masyarakat Berbasis Web adalah sebuah sistem informasi pengaduan masyarakat yang digunakan untuk memudahkan masyarakat dalam mengadukan masalah yang terjadi secara online. Aplikasi ini dilengkapi dengan fitur login multi user, data pengaduan, isi pengaduan dan lain sebagainnya.
                </p>
                <div class="flex items-center mt-2">
                    <!-- youtube -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300 animated infinite fadeIn duration-700
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://youtube.com" target="_blank">
                        <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- instagram -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300 animated infinite fadeIn duration-700
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://instagram.com/bodacius_warerpiel" target="_blank">
                    <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <!-- wa -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300 animated infinite fadeIn duration-700
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://WhatsApp.com" target="_blank">
                    <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </a>
                    <!-- twitter -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300 animated infinite fadeIn duration-700
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://twitter.com" target="_blank">
                    <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <!-- tik tok -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300 animated infinite fadeIn duration-700
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://tiktok.com/@ayongoding99" target="_blank">
                    <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                </div>
            </div>

          
        </div>
    </div>
</section>

<!-- TATA CARA -->
<section class="pt-16 pb-32 px-10 dark:bg-dark">
<div class="w-full px-12">
    <div class=" mx-auto text-center mb-12">
        <h2 class="font-extrabold text-slate-700 text-2xl mb-4 sm:text-3xl lg:text-5xl dark:text-white">Tata Cara</h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-orange-500 w-1/4 opacity-25 my-0 py-0 rounded-t"></div>
          </div>
        <p class="font-medium text-md text-secondary md:text-lg">Sit labore et officia eiusmod tempor officia eiusmod dolor exercitation nulla dolore ut id velit et ut anim.</p>
        </p>
    </div>
</div>
<div class="flex pt-4 flex-wrap -mx-1 lg:-mx-2 justify-center">

    <div class="my-1 px-4 mb-8 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4 ">
<div class="border shadow rounded-lg px-12 mt-8 dark:bg-dark dark:border-slate-500 hover:bg-orange-500 group">
    <div class="flex justify-center">
        <img src="{{asset('img/tulis.svg')}}" width="100" alt="" class="hover:animate-pulse">
    </div>
    <div class="px-4 mt-10 mb-10 md:px-2">
        <h1 class="text-xl font-extrabold text-gray-900 text-center relative  z-10 dark:text-white group-hover:text-white">Masukan Laporan</h1>
        <p class="text-sm
         font-semibold text-gray-700 text-center mt-4  relative  dark:text-slate-300 z-10  group-hover:text-white">Masukan Laporan Keluhan Anda Dengan Jelas & Benar </p>
        <h1 class="text-center text-9xl lg:-mt-32 md:-mt-28 -mt-28 font-bold text-orange-100 dark:text-orange-300 opacity-80  group-hover:text-orange-500">1</h1>
    </div>
</div></div>

<div class="my-1 px-4 mb-8 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4"> 
<div class="border shadow rounded-lg px-12 mt-8 dark:bg-dark dark:border-slate-500 hover:bg-orange-500 group">
    <div class="flex justify-center mt-4">
        <img src="{{asset('img/processing.svg')}}" width="100" alt="" class="hover:animate-spin">
    </div>
    <div class="px-4 mt-10 mb-10  md:px-2">
        <h1 class="text-xl font-extrabold text-gray-900 text-center relative  z-10 dark:text-white group-hover:text-white">Proses Veritifikasi</h1>
        <p class="text-sm font-semibold text-gray-700 text-center mt-4 relative  z-10 dark:text-slate-300 group-hover:text-white">Tunggu Sampai Laporan Anda Di Veritifikasi</p>
        <h1 class="text-center text-9xl -mt-28 md:-mt-28 lg:-mt-36 font-bold text-orange-100 opacity-80 dark:text-orange-300 group-hover:text-orange-500">2</h1>
    </div>
</div></div>

<div class="my-1 px-4 mb-8 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4"> 
<div class="border shadow rounded-lg px-12 mt-8 dark:bg-dark dark:border-slate-500 hover:bg-orange-500 group">
    <div class="flex justify-center mt-4">
        <img src="{{asset('img/act.svg')}}" width="100" alt="" class="hover:animate-spin">
    </div>
    <div class="px-4 mt-10 mb-10 md:mb-10  md:px-2">
        <h1 class="text-xl font-extrabold text-gray-900 text-center relative  z-10 dark:text-white group-hover:text-white">Tindak Lanjut</h1>
        <p class="text-sm font-semibold text-gray-700 text-center mt-4 relative  z-10 dark:text-slate-300 group-hover:text-white">Laporan Anda Sedang Tindak Lanjut</p>
        <h1 class="text-center text-9xl -mt-28 lg:-mt-24  font-bold md:-mt-28 text-orange-100 opacity-80 dark:text-orange-300 group-hover:text-orange-500">3</h1>
    </div>
</div></div>

<div class="my-1 px-4 mb-8 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4"> 
<div class="border shadow rounded-lg px-12 mt-8 dark:bg-dark dark:border-slate-500 hover:bg-orange-500 group">
    <div class="flex justify-center mt-4">
        <img src="{{asset('img/verification.svg')}}" width="100" alt="" class="hover:animate-pulse">
    </div>
    <div class="px-4 mt-10 mb-10 md:mb-12 md:px-2">
        <h1 class="text-xl font-extrabold text-gray-900 text-center relative  z-10 dark:text-white group-hover:text-white">Selesai</h1>
        <p class="text-sm font-semibold text-gray-700 text-center mt-4 relative  z-10 dark:text-slate-300 group-hover:text-white">Laporan Pengaduan Anda Telah Selesai Ditindak</p>
        <h1 class="text-center text-9xl -mt-28 lg:-mt-32 md:-mt-28  font-bold text-orange-100 opacity-80  dark:text-orange-300 group-hover:text-orange-500">4</h1> 
    </div>
</div></div>


</div>
</section>



    
@endsection