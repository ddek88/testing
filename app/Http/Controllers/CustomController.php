<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custom;
class CustomController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.input.site-custom',[
            'custom' => Custom::first()
        ]);
    }
    public function store(Request $request)
    {
       $custom = Custom::first();
       if(isset($custom))
       {
        $data = [
            'custom' => $request->custom
        ];
        Custom::first()->update($data);
        return back()->with("success", "Custom CSS changed successfully!");
       }else{
        $data = [
            'custom' => $request->custom
        ];
        Custom::create($data);
        return back()->with("success", "Custom CSS insert successfully!");
       }
    }
}
