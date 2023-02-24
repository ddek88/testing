<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class UploadController extends Controller
{
    public function __invoke(Request $request)
    {
        $file = $request->file('file');
        $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
    
        return response()->json(['message' => $filename]);
    }
    
}
