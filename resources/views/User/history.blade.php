@extends('user/layout')
@section('title','HOME')
@section('content')

<div class="container my-24 px-6 mx-auto pt-12 dark:bg-dark">
    <section class="mb-2 text-gray-800 text-center md:text-left">
        <h2 class="text-3xl font-bold text-center dark:text-white">History</h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto bg-orange-500 w-1/4 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        {{-- <img src="{{asset('img/hk.png')}}" alt="" class="m-auto"> --}}

        @forelse ($coba as $post)
      <div class="flex flex-wrap mb-20 mt-16 border-b">
        <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-6 ml-auto mt-4">
          <div
            class="relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-0"
            data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img width="50" src="{{ asset('/storage/coba/'.$post->image) }}"
              class="w-full" alt="Louvre" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                style="background-color: rgba(251, 251, 251, 0.2)"></div>
            </a>
          </div>
        </div>
     
        <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-4 md:mb-0 mr-auto">
          <h5 class="text-lg font-bold mb-2 mt-4 dark:text-white">{{$post->nama}}</h5>
          <p class="text-sm md:text-right md:-mt-8 text-gray-500 px-4 dark:text-white">{{$post->tgl}}</p>
          <p class="text-gray-500 mb-2 mt-4 dark:text-white">
            <small><u>{{$post->lokasi}}</u></small>
          </p>
          <p class="text-gray-500 dark:text-white">
            {{$post->lpr}}
          </p>
  <div class=" single-faq w-full bg-white dark:bg-dark rounded-lg p-5 sm:p-8 mb-2 wow fadeInUp " data-wow-delay=".1s">
  <button class="faq-btn flex items-center w-full text-left">
    <div class=" w-full max-w-[40px] h-10 flex items-center justify-center rounded-lg text-primary bg-opacity-5 mr-5"> <svg width="17" height="10" viewBox="0 0 17 10" class="fill-current icon" > <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" fill="#3056D3" stroke="#3056D3"/>
      </svg>
    </div>
    <div class="w-full">
      <p class="text-slate-400 hover:text-black ml-4 md:ml-32 lg:ml-0 dark:text-white ">
        Lihat Tanggapan 
      </p>
    </div>
  </button>
 
  <div class="faq-content  hidden">
    <p class="text-base ml-20 py-3 mb-4 font-bold text-red-500 dark:text-white">
      {{$post->komen}}
    </p>
 
    {{-- <form action="">
        <div class="mb-2">
            <label for="fullName" class="block text-xs md:mr-0 text-dark dark:text-white">Balas Tanggapan</label>
            <input type="text" name="nama" placeholder="Balas Tanggapan" class=" w-full border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none  py-4 dark:bg-dark"/>
          </div>
          <div class="mb-0">
            <button type="submit" class="inline-flex items-center justify-center py-2 px-4 rounded text-white bg-orange-300 text-base font-medium hover:bg-orange-600 transition duration-300 ease-in-out mr-20 md:mr-0">
              Kirim Balasan
            </button>
    </form> --}}
  </div>
</div>
        </div>
      </div>
    
        </div>
      </div>
    
    
    </section>
    @empty
             
    @endforelse
    {{ $coba->links() }}
 
      </div>

@endsection