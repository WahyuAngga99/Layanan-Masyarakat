@extends('user/layout')
@section('title','HOME')
@section('content')


<div class="pt-32 pb-12">
  <h2 class="text-3xl font-bold text-center dark:text-white">Daily News</h2>
  <div class="w-full mb-4">
    <div class="h-1 mx-auto bg-orange-500 w-1/4 opacity-25 my-0 py-0 rounded-t"></div>
  </div>
</div>


<div class="flex flex-wrap justify-center pt-14 pb-32 md:px-14 px-4">
    <div class="mt-14 pb-10 p-2 font-inter grid grid-cols-1 gap-1 md:grid-cols-2 md:p-4 md:gap-8">
    <!--Card 1-->
    @forelse ($news as $post)
    <div class=" w-full lg:max-w-full lg:flex mt-4">
      <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ asset('/storage/news/'.$post->image) }}')" title="Mountain">
      </div>
      <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
          <p class="text-sm text-gray-600 flex items-center">
            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
            </svg>
           Daily News
          </p>
          <div class="text-gray-900 font-bold text-xl mb-2">   {{$post->judul}}</div>
          <p class="text-gray-700 text-base">{{$post->keterangan}}</p>
        </div>
      <div class="">
        <a href="#" class="rounded hover:opacity-80 bg-orange-500 text-white px-2 py-3">Read More</a>
      </div>
      </div>
    </div>
    @empty
            
    @endforelse
    {{ $news->links() }}
  
    
    </div>
  </div>
  




@endsection