<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StyleSidebar;

class StyleSidebarController extends Controller
{
    public function index()
    {
         return view('dashboard.input.style-sidebar');
    }
    public function store(Request $request)
    {
        $cek = StyleSidebar::first();
        if (isset($cek)) {
            $data = [
                'background' => $request->background,
                'font' => $request->font,
                'border' => $request->border,
            ]; 
            $cek->update($data);
        } else {
            $data  = [
                'background' => $request->background,
                'font' => $request->font,
                'border' => $request->font,
            ];
            $cek->create($data);
        }
        return back()->with("success", "Sidebar CSS changed successfully!");
    }
}
