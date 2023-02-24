<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StyleHeader;
class StyleHeaderController extends Controller
{
    public function index()
    {
         return view('dashboard.input.style-header');
    }
    public function store(Request $request)
    {
        $cek = StyleHeader::first();
        if (isset($cek)) {
            $data = [
                'background' => $request->bacground,
                'font' => $request->font,
                'hover' => $request->hover
            ]; 
            $cek->update($data);
        } else {
            $data  = [
                'background' => $request->bacground,
                'font' => $request->font,
                'hover' => $request->hover
            ];
            $cek->create($data);
        }
        return back()->with("success", "Header CSS changed successfully!");
    }
}
