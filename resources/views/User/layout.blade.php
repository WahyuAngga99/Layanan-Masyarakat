<!DOCTYPE html>
<html lang="en"  class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-PENGADUAN</title>
    <link rel="icon" href="{{asset('img/lg.png')}}">
    @vite('resources/css/app.css')
    @vite('resources/css/animate.css')


     
    {{-- @vite('resources/css/animate.css')
    @vite('resources/css/LineIcons.2.0.css')
    @vite('resources/css/main.css')
    @vite('resources/css/main.css.map')
    @vite('resources/css/tailwind.css')
    @vite('resources/css/tiby-slider.css')
    @vite('resources/css/app.css') --}}
 <style>
    .custom-shape-divider-top-1685669291 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}
 </style>
   
</head>
<body class="dark:bg-dark" id="home">
    <header class="bg-transparant absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex justify-between items-center relative">
                <div class="px-4">
                    <a href="#home" class="block py-4 ">
                        <img src="{{asset('img/lg.png')}}" alt="" width="40" class="md:w-16 float-left mr-4"><span class="font-extrabold text-xl dark:text-white">
                            E-PENGADUAN
                        </span>
                    </a>
                </div>
                <div class="flex items-center px-4">
                    <button id="humburger" name="humburger" type="button" class="block absolute right-5 lg:hidden">
                        <span class="humburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="humburger-line transition duration-300 ease-in-out"></span>
                        <span class="humburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg
                    rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent
                    lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-black dark:shadow-slate-700 lg:dark:bg-transparent">
                <ul class="block lg:flex">
                    <li class="group ">
                        <a href="/" class="  text-base text-dark py-2
                        mx-8 flex group-hover:text-orange-500 dark:text-white">Home</a>
                    </li>
                    <li class="group ">
                        <a href="index" class="text-base text-dark py-2 
                        mx-8 flex group-hover:text-orange-500 dark:text-white">Pengaduan</a>
                    </li>
                    <li class="group ">
                        <a href="history" class="text-base text-dark py-2 
                        mx-8 flex group-hover:text-orange-500 dark:text-white">History</a>
                    </li>
                    <li class="group ">
                        <a href="berita" class="text-base text-dark py-2 
                        mx-8 flex group-hover:text-orange-500 dark:text-white"> Daily News</a>
                    </li>
                   
                    {{-- <li class="group ">
                        <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="mx-8 block text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-600 dark:focus:ring-orange-800" type="button">
                             Login
                        </button>
                    </li> --}}
                </ul>
            </nav>
                </div>
            </div>
        </div>
    </header>

 <div class="">
     @yield('content')
 </div>
 
 
 
 <footer class="bg-black pb-12">
    <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" ><path  d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path></svg>
     
     <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3 pt-10">
                    <img src="{{asset('img/lg.png')}}" width="100" alt="halloguys" class="mb-5">
                     
                    <h3 class="font-bold text-2xl mb-2">Hubungi kami</h3>
                    <p class="">087986756536475</p>
                    <p class="">rekayaperngakatlunak@gmail.com</p>
                    <p class="">JL.ruwet.kab-ruwet.kec-ruwet</p>
                    <p class="">Jember</p>
                </div>
                <div class="w-full px-4 pt-16 mb-12 lg:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">About E-PENGADUAN</h3>
                     <p class="font-semibold text-slate-300">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum voluptas soluta facilis nihil sapiente, molestiae sequi blanditiis omnis assumenda eius similique et sint totam dolore. Dolorem, veniam. Maxime, laboriosam quasi!
                     </p>
                </div>
          
            <div class="w-full px-4 mb-12 pt-16 lg:w-1/3">
                <h3 class="font-semibold text-xl text-white mb-5">Quick Links</h3>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-orange-500 mb-3">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-orange-500 mb-3">Pengaduan</a>
                        </li>
                        <li>
                            <a href="#portofolio" class="inline-block text-base hover:text-orange-500 mb-3">History</a>
                        </li>
                        <li>
                            <a href="#clients" class="inline-block text-base hover:text-orange-500 mb-3">Daily News</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
    
            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- youtube -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://youtube.com" target="_blank">
                        <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- instagram -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://instagram.com/bodacius_warerpiel" target="_blank">
                    <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <!-- wa -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://WhatsApp.com" target="_blank">
                    <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </a>
                    <!-- twitter -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://twitter.com" target="_blank">
                    <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <!-- tik tok -->
                    <a class="w-9 h-9 mr-3 rounded-full flex text-slate-300 justify-center items-center border border-slate-300
                    hover:bg-orange-500 hover:border-orange-500 hover:text-white" href="https://tiktok.com/@ayongoding99" target="_blank">
                    <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                </div>
                <p class="font-medium text-xs text-slate-500 text-center">Dibuat dengan <span class="text-pink-500">❤</span> Oleh <a href="https://tiktok.com/@ayongoding99" target="_blank" class="font-bold text-orange-500">ANZZ</a>, Menggunakan <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">TailwindCss</a></p>
            </div>
        </div>
    </footer>

    <div class="flex px-8">
        <div class="rotate-90 fixed  justify-center items-center x-[9999] top-80 right-4    "> 
        <input type="checkbox" class="hidden" id="dark-toggle" >
        <label for="dark-toggle">
            <div class="flex h-5 w-9 cursor-pointer items-center rounded-full border
            bg-transparent opacity-80 p-1">
                <div class="toggle-circle h-4 w-4 rounded-full bg-slate-400
                transition duration-300">
    
                </div>
            </div>
        </label>
        </div>
    </div>  


    <a href="#home" class="fixed hidden justify-center items-center x-[9999] bottom-4 right-4 h-14 w-14 bg-orange-500 rounded-full 
p-4 hover:animate-pulse" id="top">
<span class="block h-5 w-5 border-t-2 border-l-2 rotate-45 mt-2"></span>
</a>
    <script>
        const faqs = document.querySelectorAll(".single-faq");
            faqs.forEach((el) => {
                el.querySelector(".faq-btn").addEventListener("click", () => {
                    el.querySelector(".icon").classList.toggle("rotate-180");
                        el.querySelector(".faq-content").classList.toggle("hidden");
                    });
                });
    </script>
     
        @vite('resources/js/app.js')
        @vite('resources/js/js.js')
 
        
        {{-- @vite('resources/js/contact-form.js')
        @vite('resources/js/main.js')
        @vite('resources/js/tiny-slider.js')
        @vite('resources/js/wow.js') --}}
     
</body>
</html>