<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analytics;
class AnalyticsController extends Controller
{
    public function index()
    {
        return view('dashboard.input.analytics',[
            'analytics' => Analytics::first()
        ]);
    }

    public function store(Request $request)
    {
        $cek = Analytics::first();

        if(isset($cek))
        {
            $data = [
                'body' => $request->analytics
            ];
            Analytics::where('id', $cek->id)->update($data);
            return back()->with("success", "Analytics update successfully!");
        }else{
            $data = [
                'body' => $request->analytics
            ];
            Analytics::create($data);
            return back()->with("success", "Analytics insert successfully!");
        }
    }
}
