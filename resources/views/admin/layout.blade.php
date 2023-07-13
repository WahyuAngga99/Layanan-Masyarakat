<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
        <title>Laravel || @yield('title')</title>
        @vite('resources/css/app.css')
    </head>
   <body >
 
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-extrabold sm:text-2xl whitespace-nowrap dark:text-white">ANZZ</span>
          </a>
        </div>
        

 
  
      

        
        <div class="flex items-center">
            <div class="flex items-center ml-3">


              <div class="dropdown relative mr-5 md:static">

                <button class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
                  <i class="fad fa-bells w-full text-black"></i>               
                </button>
      
                <div class="absolute w-2 h-2  mb-8 ml-2 bottom-0">
                  <!-- <span
                    class="px-1 py-1 bg-red-600 rounded-full text-white
                    text-xs">
                  
                  </span> -->
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-500 opacity-75"></span>
       
                </div>
                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
      
                <div class="menu hidden rounded bg-white md:right-8 md:w-80 shadow-md absolute z-20 -right-12 w-80 mt-5 py-2 animated faster px-8">
                  <!-- top -->
                  <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                    <h1>notifications</h1>
                    <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                      <strong>5</strong>
                    </div>
                  </div>
                  <hr>
                  <!-- end top -->
      
                  <!-- body -->
      
                  <!-- item -->
                  @forelse ($pengaduan as $post)
                  <a href="admin" class="flex flex-row items-center justify-start px-4 py-4 capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">
      
                    <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                      <img width="20" src="{{asset('img/chat.gif')}}" alt="">
                    </div>
                    <div class="flex-1 flex flex-rowbg-green-100">
                      <div class="flex-1">
                        <h1 class="text-sm font-semibold">{{$post->nama}}</h1>
                        <p class="text-xs text-gray-500">{{$post->lokasi}}</p>
                      </div>
                      <div class="text-right text-xs text-gray-500">
                        <p>{{$post->tgl}}</p>
                      </div>
                    </div>
                  </a>
                  @empty
           
                  @endforelse
                  <hr>
        
                  <hr>
                  <div class="px-4 py-2 mt-2">
                    <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                      view all
                    </a>
                  </div>
                        
                </div>
              </div>








              <div>
                <button type="button" class="flex text-sm  rounded-full" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                
                  <svg class="animate-spin"  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none">
                  Wahyu Angga
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    wahyuanggasaputra753@gmail.com
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="posts" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Tambah Data</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
           <li>
              <a href="/pengaduan" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path></svg>
                 <span class="ml-3">Dashboard</span>
              </a>
           </li>
           <li>
              <a href="/admin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path></svg>
                 <span class="ml-3">Data Pengaduan</span>
              </a>
           </li>
           <li>
              <a href="/news" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path></svg>
                 <span class="ml-3">Daily News</span>
              </a>
           </li>
           
           <li>
              <button  id="btn"  type="button" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path></svg>
                 <span class="ml-3">Log Out</span>
              </button>
           </li>
        
           
        </ul>
     </div>
  </aside>
  
  <div class="p-4 sm:ml-64">
     <div class="p-4 mt-14">
      <div class="container">
        <div class="border bg-white  px-8 rounded shadow flex justify-between items-center">
             <h2 class="font-bold text-xl text-slate-700 mt-4 mb-4">@yield('title') <span class="text-sm font-semibold text-slate-200">/  @yield('title')</span></h2>
            </div>
          </div>
          @yield('content')
{{-- 
          <script>
            const btn = document.getElementById('btn');
                  btn.addEventListener('click', function () {
                      Swal.fire({
                          title: 'Log Out?',
                          text: "You Will Get Out On This Page!!",
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Log Out!'
                      }).then((result) => {
                          if (result.isConfirmed) {
                              Swal.fire(
                                  ' Log Out!',
                                  'you have successfully log out',
                                  'success'
                                  )
                                }
                             
                      })
                  })
                 
          </script> --}}
     </div>
  </div>


  
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 
  <script>
    const faqs = document.querySelectorAll(".single-faq");
  faqs.forEach((el) => {
  el.querySelector(".faq-btn").addEventListener("click", () => {
  el.querySelector(".icon").classList.toggle("rotate-180");
  el.querySelector(".faq-content").classList.toggle("hidden");
  });
  });
   
  
  var dropdown = document.getElementsByClassName('dropdown');
  
  if (dropdown.length >= 1) {
      
      for (let i = 0; i < dropdown.length; i++) {
          const item = dropdown[i];
  
          var menu,btn,overflow;
          
          item.addEventListener('click' , function(){            
  
              for (let i = 0; i < this.children.length; i++) {
                  const e = this.children[i];
  
                  if (e.classList.contains('menu')) {
                      menu = e;                  
                  }else if (e.classList.contains('menu-btn')) {
                      btn = e;
                  }else if (e.classList.contains('menu-overflow')) {
                      overflow = e;
                  }
                                
              }
              
              if (menu.classList.contains('hidden')) {
                  // show the menu
                  showMenu();
              }else{
                  // hide the menu
                  hideMenu()
              }      
  
  
          });        
          
  
          var showMenu = function(){
              menu.classList.remove('hidden');
              menu.classList.add('fadeIn');
              overflow.classList.remove('hidden');            
          };
  
          var hideMenu = function(){
              menu.classList.add('hidden');
              overflow.classList.add('hidden');            
              menu.classList.remove('fadeIn');            
          };
          
                  
          
      }    
      
  };
  
  
  
  var el_4 = document.getElementsByClassName('num-4');
  var display_4 = function(){
      for (let i = 0; i < el_4.length; i++) {
          const e = el_4[i];
          
          e.innerText = num(999 , 9999);
          
      }   
  };
  
  if (el_4.length > 0) {
      display_4();   
  }
  
  </script>

  
    @vite('resources/js/app.js')
    @vite('resources/js/js.js')
 
    <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
   </body>
</html>
