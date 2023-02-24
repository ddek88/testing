<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangKami;
class TentangKamiController extends Controller
{
   public function __invoke()
   {
    return view('dashboard.input.site-tentang-kami',[
        'tentang' => TentangKami::first()
    ]);
   }
   public function store(Request $request)
   {
     $tentang = TentangKami::first();
     if(isset($tentang))
     {
        $data = [
            'body' => $request->tentang
        ];
        TentangKami::first()->update($data);
        return back()->with("success", "Changed successfully!");
    }else{
        $data = [
            'body' => $request->tentang
        ];
        TentangKami::create($data);
        return back()->with("success", "Insert successfully!");
       
     }
   }
}
