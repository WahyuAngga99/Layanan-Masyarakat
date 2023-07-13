@extends('admin/layout')
@section('title','Edit')
@section('content')

<div class="pt-12 px-4"> 
<div class=" shadow-testimonial rounded-lg bg-white border   py-10 px-8  md:p-[60px] lg:p-10 2xl:p-[60px]  sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp"data-wow-delay=".2s">
    <h3 class="font-extrabold mb-8 text-2xl md:text-[26px] ">
      Laporkan <span class="text-orange-500">Kejahatan</span> Di sekitarmu
    </h3>
    <form action=" " method="POST" enctype="multipart/form-data">            
        @method('PUT')
        @csrf

      <div class="mb-6">
        <label for="fullName" class="block text-xs text-dark"
          >Nama pelapor</label
        >
        <input
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
        <input
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
        <label for="lpr" class="block text-xs text-dark">post</label>
        <textarea name="lpr" rows="1"  placeholder="Masukan Pengdauan" class="w-full border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4 resize-none"></textarea>
      </div>

      <div class="mb-6">
          <label for="phone" class="block text-xs text-dark">Bukti Foto</label>
          <input type="file" name="image" placeholder="Masukan Foto" class="w-full  border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4"/>
          
        </div>

      <div class="mb-0">
        <button type="submit" class="inline-flex items-center justify-center py-4 px-6 rounded text-white bg-orange-500 text-base font-medium hover:bg-orange-800 transition duration-300 ease-in-out">
          Edit Laporan
        </button>
      </div>
    </form>
  </div>
 
</div>
@endsection