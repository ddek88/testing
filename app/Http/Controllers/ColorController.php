<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
class ColorController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.input.site-color',[
            'color' => Color::first(),
        ]);
    }
    public function store(Request $request)
    {
        $color = Color::first();
        if(isset($color))
        {
            $data = [
                'color' => $request->color
            ];
            Color::first()->update($data);
            return back()->with("success", "Colors changed successfully!");
        }else{
            $data = [
                'color' => $request->color
            ];
            Color::create($data);
            return back()->with("success", "Colors inserst successfully!");
        }
    }
}
