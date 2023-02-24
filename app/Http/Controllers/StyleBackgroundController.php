<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StyleBackground;
class StyleBackgroundController extends Controller
{
    public function index()
    {
         return view('dashboard.input.style-background',[
            'image' => StyleBackground::first(),
         ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'itsss' => 'required',
            'itsssv' => 'required'
        ]);
       $cek = StyleBackground::first();
       if (isset($cek)) {
         $data = [
            'background' => $request->itsss,
            'thumn' => $request->itsssv
         ];
         $cek->update($data);
       } else {
        $data = [
            'background' => $request->itsss,
            'thumn' => $request->itsssv
         ];
         $cek->create($data);
       }
       return back()->with("success", "Background CSS changed successfully!");
    }
}
