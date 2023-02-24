<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
class ArtikelController extends Controller
{
   public function index()
   {
    return view ('dashboard.input.create-artikel',[
        'artikel' => Artikel::first(),
    ]);
   }

   public function store(Request $request)
   {
    $cek = Artikel::first();
    if (isset($cek)) {
       $data = [
        'body' => $request->artikel
       ];
      $cek->update($data);
    } else {
        $data = [
            'body' => $request->artikel
           ];
          $cek->create($data);
    }
    return back()->with("success", "Artikel updated successfully!");
   }
}
