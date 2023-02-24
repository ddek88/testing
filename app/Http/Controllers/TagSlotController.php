<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TagSlot;
use Illuminate\Support\Str;
class TagSlotController extends Controller
{
    public function __invoke() 
   {
       $navbar = TagSlot::orderBy('created_at', 'DESC')->get();
        return view('dashboard.input.site-tag',[
            'navbar' => $navbar
        ]);
    }

    public function store(Request $request)
    {
        for ($i = 1; $i <= 1000; $i++) { // ganti 3 dengan jumlah maksimum url yang diizinkan
            if (isset($request->{"url$i"})) {
                $crud = new TagSlot;
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
            TagSlot::where('id', $id)->update($dat);
        }
    }
    public function remove($id)
    {
        TagSlot::where('id', $id)->delete();
        return back()->with("success", "Remove successfully!");
    }
}
