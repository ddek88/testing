<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Html;
class HtmlController extends Controller
{
   public function index()
   {
     return view('dashboard.html.home',[
        'html' => Html::find(1)
     ]);
   }

   public function store(Request $request)
   {
     $cek = Html::find(1);
     if(isset($cek))
     {
        $data = [
            'header' => $request->header,
            'body' => $request->body,
            'footer' => $request->footer
        ];
        Html::where('id', $cek->id)->update($data);
        return back()->with("success", "Html update successfully!");
     }else{
        $data = [
            'header' => $request->header,
            'body' => $request->body,
            'footer' => $request->footer
        ];
        Html::create($data);
        return back()->with("success", "Html insert successfully!");
     }
   }
   public function posts()
   {
     return view('dashboard.html.posts',[
        'html' => Html::find(2)
     ]);
   }
   public function posts_store(Request $request)
   {
     $cek = Html::find(2);
     if(isset($cek))
     {
        $data = [
            'header' => $request->header,
            'body' => $request->body,
            'footer' => $request->footer
        ];
        Html::where('id', $cek->id)->update($data);
        return back()->with("success", "Html update successfully!");
     }else{
        $data = [
            'header' => $request->header,
            'body' => $request->body,
            'footer' => $request->footer
        ];
        Html::create($data);
        return back()->with("success", "Html insert successfully!");
     }
   }
}
