<?php

namespace App\Http\Controllers;
use App\Models\pengaduanModel;
use App\Models\news;
 
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class pengaduanController extends Controller
{

    public function index(): view
    {
        $pengaduan   = pengaduanModel::latest()->paginate(5);

        return view('admin.dashboard')->with('pengaduan', $pengaduan);
    }


  
    // public function index2(): view
    // {
    //     $pengaduan   = pengaduanModel::latest()->paginate(5);
    //     return view('User.history')->with('pengaduan', $pengaduan);
    
    // }





     public function create(): View
    {
        return view('user.pengaduan');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
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
        $image->storeAs('public/posts', $image->hashName());


        // Post::create($request->all());
        //create post
        pengaduanModel::create([
            'image'     => $image->hashName(),
           'nama'    =>$request->nama, 
           'tgl'     =>$request->tgl,  
           'lokasi'  =>$request->lokasi,  
           'lpr'   =>$request->lpr,
      
        ]);

       
        return redirect('/index')->with(['success' => 'Data Berhasil Dikirim!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = pengaduanModel::findOrFail($id);
    
        //delete image
        Storage::delete('public/posts/'. $post->image);
    
        //delete post
        $post->delete();
    
        //redirect to index
        return redirect('/admin')->with(['Hapus' => 'Deleted!!']);
    }


    
 
}




