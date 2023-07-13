<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    @vite('resources/css/app.css')
</head>
<body>
    
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
               
    <form action="coba" method="POST" enctype="multipart/form-data">
            
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
            <label for="lpr" class="block text-xs text-dark">Pengaduan</label>
            <textarea name="lpr" rows="1" placeholder="Masukan Pengdauan" class="w-full border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4 resize-none"></textarea>
          </div>

          <div class="mb-6">
              <label for="phone" class="block text-xs text-dark">Bukti Foto</label>
              <input type="file" name="image" placeholder="Masukan Foto" class="w-full  border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4"/>
              
            </div>

          <div class="mb-0">
            <button type="submit" class="inline-flex items-center justify-center py-4 px-6 rounded text-white bg-orange-500 text-base font-medium hover:bg-orange-800 transition duration-300 ease-in-out">
              Kirim Laporan
            </button>
          </div>
    </form> 
            </div>
        </div>
    </div>
</div>
</div>




  <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                Nama
            </th>
            <th scope="col" class="px-6 py-3">
                Tanggal
            </th>
            <th scope="col" class="px-6 py-3">
                Lokasi
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
        @forelse ($post as $post)
        <tr class="bg-white border-b hover:bg-gray-200">       
            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap  ">
                <img class="w-12 h-12 rounded-full" src="{{ asset('/storage/posts/'.$post->image) }}" alt="sial">
                <div class="pl-3">
                    <div class="text-base font-semibold">{{$post->nama}}</div>
                    <div class="font-normal text-gray-500">{{$post->updated_at}}</div>
                </div>  
            </th>
            <td class="px-6 py-4">
                {{$post->tgl}}
            </td>
            <td class="px-6 py-4">
                {{$post->lokasi}}
            </td>
            <td class="px-6 py-4">
                {{$post->lpr}}
            </td>
            <td class="px-6 py-4 flex justify-between items-center mt-4">
                {{-- <button  data-modal-target="defaultModal2" data-modal-toggle="defaultModal2" wire:click="{{ route('post.show', $post->id) }}"  class="ext-base font-semibold text-white bg-sky-500 py-2 px-3 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out  float-left mr-1 ">
                    <i class="fad fa-info"></i>
                </button> --}}
                <button data-modal-target="defaultModal1" data-modal-toggle="defaultModal1" wire:click="{{ route('coba.edit', $post->id) }}" class="ext-base font-semibold text-white bg-orange-500 py-2 px-3 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out  float-left mr-1 ">
                    <i class="fad fa-pen"></i>
                </button>
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('coba.destroy', $post->id) }}" method="POST">
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
                       
            <form action="{{ route('coba.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                 @csrf
                                @method('PUT')
                                <div class="mb-6">
                                  <label for="fullName" class="block text-xs text-dark"
                                    >Nama pelapor</label
                                  >
                                  <input
                                    type="text"
                                    value="{{($post->nama)}}"
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
                                    value="{{($post->tgl)}}"
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
                                    value="{{($post->lokasi)}}"
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
                                  <textarea name="lpr"   rows="1" placeholder="Masukan Pengdauan" class="w-full border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4 resize-none">{{($post->lpr)}}</textarea>
                                </div>
                    
                                <div class="mb-6">
                                    <label for="phone" class="block text-xs text-dark">Bukti Foto</label>
                                    <input type="file" name="image" placeholder="Masukan Foto" class="w-full  border-0 border-b border-[#f1f1f1] focus:border-orange-500 focus:outline-none py-4"/>
                                    
                                  </div>
                    
                                <div class="mb-0">
                                  <button type="submit" class="inline-flex items-center justify-center py-4 px-6 rounded text-white bg-orange-500 text-base font-medium hover:bg-orange-800 transition duration-300 ease-in-out">
                                    Kirim Laporan
                                  </button>
                                </div>
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
                            <div class="h-48 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ asset('/storage/post/'.$post->image) }}')" title="Mountain">
                            </div>
                            <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                              <div class="mb-8">
                                <p class="text-sm text-gray-600 flex items-center">
                                  <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                  </svg>
                                 Daily post
                                </p>
                                <div class="text-gray-900 font-bold text-xl mb-2">{{ $post->judul }}</div>
                                <p class="text-gray-700 text-base">{{ $post->keterangan }}</p>
                              </div>
                            
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </tbody>
</table>
 
</div>

@vite('resources/js/app.js')
</body>
</html>