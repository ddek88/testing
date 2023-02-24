<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navbar;
use App\Models\Image;
use Illuminate\Support\Str;
class NavbarController extends Controller
{
   public function __invoke() 
   {
       $image = Image::where('id', 1)->first();
       $navbar = Navbar::orderBy('created_at', 'DESC')->get();
        return view('dashboard.input.site-header',[
            'image' => $image,
            'navbar' => $navbar
        ]);
    }

    public function store(Request $request)
    {
        if ($request->image == '') {
            $image = Image::first();
        } else {
            $cek = Image::find(1);
            if(isset($request->itsss)){
                $cek->image = $request->itsss;
                $cek->update();
            }else{
                $image = new Image;
                $image->image = $request->itsss;
                $image->save();
            }
            
        }
        
        for ($i = 1; $i <= 1000; $i++) { // ganti 3 dengan jumlah maksimum url yang diizinkan
            if (isset($request->{"url$i"})) {
                $crud = new Navbar;
                if ($request->has('image')) {
                    $crud->image_id = 1;
                } else {
                    $crud->cek_id = 0;
                }
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
            Navbar::where('id', $id)->update($dat);
            return back()->with("success", "Changed successfully!");
        }
    }
    public function remove($id)
    {
        Navbar::where('id', $id)->delete();
        return back()->with("success", "Remove successfully!");
    }
}
