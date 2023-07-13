@extends('user/layout')
@section('title','HOME')
@section('content')


<section id="wadol" class="pt-32 pb-32 ud-contact relative dark:bg-dark ">
    <div class="container md:px-16">
      <div class="w-full px-4">
        <div class=" mx-auto text-center mb-12">
            <h2 class="font-extrabold text-orange-500 text-xl mb-4 sm:text-2xl lg:text-3xl">Pengaduan</h2>
            <div class="w-full mb-4">
              <div class="h-1 mx-auto bg-orange-500 w-1/4 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus doloremque fugit rem illo laborum, temporibus animi? Totam beatae rem tempora.</p>
            </p>
        </div>
    </div>


    
    @if(session()->has('success'))
    <div
    class="flex w-full border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] dark:bg-[#1B1B24] px-7 py-8 shadow-md dark:bg-opacity-30 md:p-9">
    <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
      <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
          fill="white" stroke="white"></path>
      </svg>
    </div>
    <div class="w-full">
      <h5 class="mb-3 text-lg font-bold text-black dark:text-[#34D399]">
        {{ session('success') }}
    </div>
  </div>
 
@endif

<br>

        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-1/2">
        <div class=" shadow-testimonial rounded-lg bg-white border  py-10 px-8  md:p-[60px] lg:p-10 2xl:p-[60px]  sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp"data-wow-delay=".2s">
          <h3 class="font-extrabold mb-8 text-2xl md:text-[26px] ">
            Laporkan <span class="text-orange-500">Kejahatan</span> Di sekitarmu
          </h3>
          <form action="kkkk" method="POST" enctype="multipart/form-data">            
            @csrf

            <div class="mb-6">
              <label for="fullName" class="block text-xs text-dark"
                >Nama pelapor</label
              >
              <input @required(true)
                type="text"
                name="nama"
                placeholder="Your Name"
                class="
                  w-full
                  border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4"/>
            </div>

            <div class="mb-6">
              <label for="email" class="block text-xs text-dark"
                >tanggal/waktu</label
              >
              <input @required(true)
                type="date"
                name="tgl"
                placeholder=""
                class="
                  w-full
                  border-0 border-b border-[#f1f1f1]
                  focus:border-orange-500 focus:outline-none
                  py-4
                "
              />
            </div>

            <div class="mb-6">
              <label for="phone" class="block text-xs text-dark"
                >lokasi</label
              >
              <input
                type="text"
                required
                name="lokasi"
                placeholder="JL.******"
                class="
                  w-full
                  border-0 border-b border-[#f1f1f1]
                  focus:border-orange-500 focus:outline-none
                  py-4
                "
              />
            </div>
 
            <div class="mb-6">
              <label for="lpr" class="block text-xs text-dark">Pengaduan</label>
              <textarea name="lpr" rows="1" placeholder="Masukan Pengdauan" class="w-full border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4 resize-none" required></textarea>
            </div>

            <div class="mb-6">
                <label for="phone" class="block text-xs text-dark">Bukti Foto</label>
                <input @required(true) type="file" name="image" placeholder="Masukan Foto" class="w-full  border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4"/>
                
              </div>

            <div class="mb-0">
              <button type="submit" class="inline-flex items-center justify-center py-4 px-6 rounded text-white bg-orange-500 text-base font-medium hover:bg-orange-800 transition duration-300 ease-in-out">
                Kirim Laporan
              </button>
            </div>
          </form>
        </div>
            </div>

            <div class="w-full self-center px-6 lg:w-1/2"> 
                <h1 class="font-semibold text-center text-gray-900 md:text-2xl text-xl  lg:text-3xl dark:text-white
                ">Layanan Pengaduan <span class="text-orange-500">Masyarakat</span>
                </h1>
                <img src="{{asset('img/mt.png')}}"   alt="" class="mt-10">
                
            </div> 
   
        </div>
    </div>
  </section>

  
@endsection