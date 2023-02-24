<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pintasan;
use Illuminate\Support\Str;
class PintasanController extends Controller
{
    public function __invoke() 
    {
        $navbar = Pintasan::orderBy('created_at', 'DESC')->get();
         return view('dashboard.input.site-pintasan',[
             'navbar' => $navbar
         ]);
     }
 
     public function store(Request $request)
     {
         for ($i = 1; $i <= 1000; $i++) { // ganti 3 dengan jumlah maksimum url yang diizinkan
             if (isset($request->{"url$i"})) {
                 $crud = new Pintasan;
                 $crud->url = $request->{"url$i"};
                 $crud->label = $request->{"label$i"};
                 $crud->save();
             }
         }  
        
         return back()->with("success", "Insert successfully!");
       
 
     }
     public function update(Request $request, $id)
     {
         if($request->url && $request->label){
             $dat = [
                 'url' => $request->url,
                 'label' => $request->label
             ];
             Pintasan::where('id', $id)->update($dat);
         }
     }
     public function remove($id)
     {
        Pintasan::where('id', $id)->delete();
        return back()->with("success", "Remove successfully!");
     }
}
