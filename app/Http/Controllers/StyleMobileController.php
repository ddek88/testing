<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StyleMobile;
class StyleMobileController extends Controller
{
    public function index()
    {
         return view('dashboard.input.style-mobile');
    }
    public function store(Request $request)
    {
        $cek = StyleMobile::first();
        if (isset($cek)) {
            $data = [
                'background' => $request->background,
                'font' => $request->font,
                'hover' => $request->hover
            ]; 
            $cek->update($data);
        } else {
            $data  = [
                'background' => $request->background,
                'font' => $request->font,
                'hover' => $request->hover
            ];
            $cek->create($data);
        }
        return back()->with("success", "Mobile CSS changed successfully!");
    }
}
