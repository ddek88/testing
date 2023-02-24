<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StyleFooter;
class StyleFooterController extends Controller
{
    public function index()
    {
         return view('dashboard.input.style-footer');
    }
    public function store(Request $request)
    {
        $cek = StyleFooter::first();
        if (isset($cek)) {
            $data = [
                'background' => $request->background,
                'font' => $request->font,
            ]; 
            $cek->update($data);
        } else {
            $data  = [
                'background' => $request->background,
                'font' => $request->font,
            ];
            $cek->create($data);
        }
        return back()->with("success", "Footer CSS changed successfully!");
    }
}
