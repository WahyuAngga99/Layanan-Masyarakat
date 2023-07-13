@extends('admin/layout')
@section('title','card')
@section('content')

<div class="px-4"> 
<div class="border shadow rounded-lg">
    <div class="px-4 py-4">
        <img src="{{ asset('/storage/posts/'.$pengaduan->image) }}" alt="">
    </div>
    <div class="mt-4 mb-2 px-4 flex justify-between">
        <h1 class="text-xl font-bold">{{$pengaduan->nama}}</h1>
        <p class=" text-slate-400 text-sm font-semibold">{{$pengaduan->tgl}}</p>
    </div>
    <div class="px-4 mb-4">
        <p class="text-sm font-semibold text-slate-800">{{$pengaduan->lpr}}</p>
       
    </div>
    <div class="px-4 py-4 flex justify-between">
      <a href="" class="rounded-lg px-6 py-2 bg-red-500 shadow text-white hover:opacity-80 hover:shadow-lg">Back</a>
        <p class="text-base font-bold  text-slate-500 mb-2 text-right mt-2"><i>{{$pengaduan->lokasi}}</i></p>
    </div>
</div>
</div>

@endsection