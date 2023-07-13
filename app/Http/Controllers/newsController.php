<?php

namespace App\Http\Controllers;
use App\Models\news;
use App\Models\pengaduanModel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
 
class newsController extends Controller
{
    public function index(): view
    {
        $news   = news::latest()->paginate(5);

        return view('berita.inews')->with('news', $news);
    }
    public function index2(): view
    {
        $news   = news::latest()->paginate(5);

        return view('user.news')->with('news', $news);
    }
   

    public function create(): View
    {
        return view('berita.inews');
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
            'judul'     => 'required|min:5',
            'keterangan'   => 'required|min:8',
           
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/news', $image->hashName());


        // Post::create($request->all());
        //create post
        news::create([
            'image'     => $image->hashName(),
           'judul'    =>$request->judul, 
           'keterangan'     =>$request->keterangan,  
      
      
        ]);

        //redirect to index
        return redirect('news')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = news::findOrFail($id);
    
        //delete image
        Storage::delete('public/news/'. $post->image);
    
        //delete post
        $post->delete();
    
        //redirect to index
        return redirect('/news')->with(['Hapus' => 'Deleted!!']);
    }

    public function edit(string $id): View
    {
        //get post by ID
        $post = news::findOrFail($id);

        //render view with post
        return view('berita.inews', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judul'     => 'required|min:5',
            'keterangan'   => 'required|min:8',
        ]);

        //get post by ID
        $post = news::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/news', $image->hashName());

            //delete old image
            Storage::delete('public/news/'.$post->image);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'judul'    =>$request->judul, 
                'keterangan'     =>$request->keterangan,  
           
            ]);

        } else {

            //update post without image
            $post->update([
               
                'judul'    =>$request->judul, 
                'keterangan'     =>$request->keterangan,  
      
            ]);
        }

        //redirect to index
        return redirect('news')->with(['edit' => 'Data Berhasil Diubah!']);
    }

    // public function show(string $id): View
    // {
 
    //     $news = news::findOrFail($id);
 
    //     return view('berita.inews', compact('news'));
    // }


}
