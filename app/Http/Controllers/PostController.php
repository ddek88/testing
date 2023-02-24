<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'artikel' => 'required'
        ]);
       if($request->has('draft')){
        $data = [
            'status' => 0,
            'background' => $request->itsss,
            'thumnail' => $request->itsssv,
            'judul' => $request->judul,
            'slug' => $request->slug,
            'body' => $request->artikel,
            'keyword' => $request->keyword,
            'deskripsi' => $request->deskripsi,
            'custom' => $request->custom
        ];
        Post::create($data);
        return back()->with("success", "Artikel berhasil disimpan kedalam draft!");
       }
       if($request->has('publish'))
       {
        $data = [
            'status' => 1,
            'background' => $request->itsss,
            'thumnail' => $request->itsssv,
            'judul' => $request->judul,
            'slug' => $request->slug,
            'body' => $request->artikel,
            'keyword' => $request->keyword,
            'deskripsi' => $request->deskripsi,
            'custom' => $request->custom
        ];
        Post::create($data);
        return back()->with("success", "Artikel berhasil publish!");
       }
      
    }
    public function draft()
    {

        return view('dashboard.post.draft',[
            'post' => Post::where('status', 0)->get()
        ]);
    }
    public function publish()
    {

        return view('dashboard.post.publish',[
            'post' => Post::where('status', 1)->get()
        ]);
    }
    public function edit($id)
    {
        return view('dashboard.post.edit',[
            'post' => Post::where('id', $id)->first(),
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'artikel' => 'required'
        ]);
       if($request->has('draft')){
        $data = [
            'status' => 0,
            'background' => $request->itsss,
            'thumnail' => $request->itsssv,
            'judul' => $request->judul,
            'slug' => $request->slug,
            'body' => $request->artikel,
            'keyword' => $request->keyword,
            'deskripsi' => $request->deskripsi,
            'custom' => $request->custom
        ];
        Post::where('id', $request->id)->update($data);
        return back()->with("success", "Artikel berhasil disimpan kedalam draft!");
       }
       if($request->has('publish'))
       {
        $data = [
            'status' => 1,
            'background' => $request->itsss,
            'thumnail' => $request->itsssv,
            'judul' => $request->judul,
            'slug' => $request->slug,
            'body' => $request->artikel,
            'keyword' => $request->keyword,
            'deskripsi' => $request->deskripsi,
            'custom' => $request->custom
        ];
        Post::where('id', $request->id)->update($data);
        return back()->with("success", "Artikel berhasil publish!");
       }
    }
    public function hapus($id)
    {
        Post::where('id', $id)->delete();
        return back()->with("success", "Artikel berhasil dihapus!");
    }
}
