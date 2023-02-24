<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identity;
class IdentityController extends Controller
{
    public function __invoke()
    {

        return view('dashboard.input.site-identity',[
            'identity' => Identity::first(),
        ]);
    }

    public function store(Request $request)
    {
        $data = [
            'nama_web' => $request->namaweb,
            'deskripsi' => $request->deskripsi,
            'keyword' => $request->keyword,
            'custom' => $request->custom,
        ];
        Identity::create($data);
        return back()->with("success", "Identity Changed successfully!");
    }
    public function update(Request $request)
    {
        $data = [
            'nama_web' => $request->namaweb,
            'deskripsi' => $request->deskripsi,
            'keyword' => $request->keyword,
            'custom' => $request->custom,
        ];
        Identity::first()->update($data);
        return back()->with("success", "Identity Insert successfully!");
    }
}
