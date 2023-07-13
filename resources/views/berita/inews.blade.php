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
                    <a href="logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">LogOut</a>
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
              <a href="/coba" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
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
              <a href="logout"  class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                 <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path></svg>
                 <span class="ml-3">Log Out</span>
              </a>
           </li>
        
           
        </ul>
     </div>
  </aside>
  
  <div class="p-4 sm:ml-64">
     <div class="p-4 mt-14">
     <div class="container">
        <div class="border bg-white  px-8 rounded shadow flex justify-between items-center">
             <h2 class="font-bold text-xl text-slate-700 mt-4 mb-4">News <span class="text-sm font-semibold text-slate-200">/  News</span></h2>
            </div>
           </div>
          
          @if(session()->has('Hapus'))
          <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md mt-8" role="alert">
              <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                  <p class="font-bold"> {{ session('Hapus') }}</p>
                  <p class="text-sm">Data berita Berhasil Dihapus</p>
                </div>
              </div>
            </div>
            @endif
          
            
          @if(session()->has('success'))
          <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mt-8" role="alert">
              <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                  <p class="font-bold"> {{ session('success') }}</p>
                  <p class="text-sm">Data berita Berhasil Ditambahkan</p>
                </div>
              </div>
            </div>
            @endif
          @if(session()->has('edit'))
          <div class="bg-yellow-100 border-t-4 border-yellow-500 rounded-b text-yellow-900 px-4 py-3 shadow-md mt-8" role="alert">
              <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-yellow-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                  <p class="font-bold"> {{ session('edit') }}</p>
                  <p class="text-sm">Data berita Berhasil Diubah</p>
                </div>
              </div>
            </div>
            @endif
 



          <div class="relative overflow-x-auto  sm:rounded-lg mt-14 border shadow rounded">
  


            <table class="w-full text-sm text-left text-gray-500 ">

        <div class="px-8 py-2 mt-2 mb-2 flex justify-between">
          <h1 class="text-sm font-extrabold text-gray-700">Table Berita Terkini</h1>
        <button  data-modal-target="defaultModal" data-modal-toggle="defaultModal"   class="rounded-lg bg-red-500  w-10 h-10">
            <p class="text-center text-2xl -mt-0 text-white font-bold ">+</p>
         </button>
      </div>


      <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Terms of Service
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                   
        <form action="news" method="POST" enctype="multipart/form-data">
                
            @csrf

                <div class="form-group">
                    <label class="font-weight-bold">GAMBAR</label>
                        <input type="file" class="  w-full
                        border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4" name="image" required>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Judul</label>
                        <input type="text" class="   w-full
                        border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4 " name="judul" placeholder="Masukkan Judul Post" required>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Keterangan</label>
                        <input type="text" class="  w-full
                        border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4" name="keterangan" placeholder="Masukkan Judul Post" required>
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">SIMPAN</button>
                <button type="reset" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 focus:z-10">RESET</button>

        </form> 
                </div>
            </div>
        </div>
    </div>
</div>




      <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Gambar
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul
                </th>
                <th scope="col" class="px-6 py-3">
                    Keterangan
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($news as $post)
            <tr class="bg-white border-b hover:bg-gray-200">       
                <td class="px-6 py-4">
                    <img class="w-52 rounded-lg" src="{{ asset('/storage/news/'.$post->image) }}" alt="sial">
                </td>
                <td class="px-6 py-4">
                    {{$post->judul}}
                </td>
                <td class="px-6 py-4">
                    {{$post->keterangan}}
                </td>
                <td class="px-6 py-4 flex justify-between items-center mt-4">
                    {{-- <button  data-modal-target="defaultModal2" data-modal-toggle="defaultModal2" wire:click="{{ route('news.show', $post->id) }}"  class="ext-base font-semibold text-white bg-sky-500 py-2 px-3 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out  float-left mr-1 ">
                        <i class="fad fa-info"></i>
                    </button> --}}
                    <button data-modal-target="defaultModal1" data-modal-toggle="defaultModal1" wire:click="{{ route('news.edit', $post->id) }}" class="ext-base font-semibold text-white bg-orange-500 py-2 px-3 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out  float-left mr-1 ">
                        <i class="fad fa-pen"></i>
                    </button>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('news.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="text-base font-semibold text-white
                        bg-red-700 py-2 px-3 rounded-full hover:shadow-lg hover:opacity-80
                        transition duration-300 ease-in-out"><i class="fad fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            
            <div id="defaultModal1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Terms of Service
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                           
                <form action="{{ route('news.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
        
                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="  w-full
                                      border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4" name="image" required>
                        </div>
        
                        <div class="form-group">
                            <label class="font-weight-bold">Judul</label>
                                <input type="text" class="   w-full
                                      border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4 " name="judul" placeholder="Masukkan Judul Post" value="{{($post->judul)}}" required>
                        </div>
        
                        <div class="form-group">
                            <label class="font-weight-bold">Keterangan</label>
                                <input type="text" class="   w-full
                                      border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4  " name="keterangan" placeholder="Masukkan Judul Post" value="{{($post->keterangan) }}" required>
                        </div>
        
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">SIMPAN</button>
                        <button type="reset" class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 focus:z-10">RESET</button>
        
                </form> 
                        </div>
                    </div>
                </div>
            </div>


            @empty
            
            @endforelse
            
            
            {{-- <div id="defaultModal2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Terms of Service
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div class=" w-full lg:max-w-full lg:flex mt-4">
                                <div class="h-48 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ asset('/storage/news/'.$news->image) }}')" title="Mountain">
                                </div>
                                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                  <div class="mb-8">
                                    <p class="text-sm text-gray-600 flex items-center">
                                      <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                      </svg>
                                     Daily News
                                    </p>
                                    <div class="text-gray-900 font-bold text-xl mb-2">{{ $news->judul }}</div>
                                    <p class="text-gray-700 text-base">{{ $news->keterangan }}</p>
                                  </div>
                                
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </tbody>
    </table>
    {{ $news->links() }}
</div>

{{-- 

1. Tanggapan
2. Edit Pengaduan
3. Login Regris
4. show pengaduan
5. memperbaiki tampilan

--}}


 
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


{{-- <script>
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





</script> --}}

@vite('resources/js/app.js')
@vite('resources/js/js.js')

<script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
</body>
</html>