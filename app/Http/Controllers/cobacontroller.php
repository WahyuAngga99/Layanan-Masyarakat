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
use App\Models\komen;
use Illuminate\Support\Facades\DB;

 

class cobacontroller extends Controller
{
    public function index(): view
    {
        $coba   = pengaduanModel::latest()->paginate(5);
        // $coba = DB::table('pengaduan_models')
        // ->join('comen', 'comen.id', '=', 'comen.id')
        // ->get();

        return view('admin.index')->with('coba', $coba);
    }
    
    public function index2(): view
    {
        $coba   = pengaduanModel::latest()->paginate(5);
        return view('User.history')->with('coba', $coba);
    }


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




    public function edit(string $id): View
    {
        //get post by ID
        $post = pengaduanModel::findOrFail($id);

        //render view with post
        return view('admin.index', compact('post'));
    }
   

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
                    'nama'     => 'required|min:5',
                    'tgl'   => 'required|min:8',
                    'lokasi'   => 'required|min:10',
                    'lpr'   => 'required|min:12',
                     
        ]);

        //get post by ID
        $post = pengaduanModel::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/coba', $image->hashName());

            //delete old image
            Storage::delete('public/coba/'.$post->image);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                            'nama'    =>$request->nama, 
                            'tgl'     =>$request->tgl,  
                            'lokasi'  =>$request->lokasi,  
                             
           
            ]);

        } else {

            //update post without image
            $post->update([
                'nama'    =>$request->nama, 
                'tgl'     =>$request->tgl,  
                'lokasi'  =>$request->lokasi,  
                 

      
            ]);
        }

        //redirect to index
        return redirect('coba')->with(['edit' => 'Data Berhasil Diubah!']);
    }
    
  








    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = pengaduanModel::findOrFail($id);
    
        //delete image
        Storage::delete('public/coba/'. $post->image);
    
        //delete post
        $post->delete();
    
        //redirect to index
        return redirect('/coba')->with(['Hapus' => 'Deleted!!']);
    }




    
}
