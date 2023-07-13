<?php

namespace App\Http\Controllers;

use App\Models\pengaduanModel;
use App\Models\komen;
 
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class kcontroller extends Controller
{
    public function create(): View
    {
        return view('user.pengaduan');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required|min:5',
            'tgl'   => 'required|min:8',
            'lokasi'   => 'required|min:10',
            'lpr'   => 'required|min:12',
          
   
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/coba', $image->hashName());


        // Post::create($request->all());
        //create post
        pengaduanModel::create([
            'image'     => $image->hashName(),
           'nama'    =>$request->nama, 
           'tgl'     =>$request->tgl,  
           'lokasi'  =>$request->lokasi,  
           'lpr'   =>$request->lpr,
            
        ]);

       
        return redirect('/index')->with(['success' => 'Data Pengaduan Berhasil Dikirim!']);
    }
}
