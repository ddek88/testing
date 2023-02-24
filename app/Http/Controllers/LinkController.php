<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
class LinkController extends Controller
{

    public function __invoke()
    {
       $link = Link::first();
        return view('dashboard.input.site-link',[
            'link' => $link
        ]);
    }
    public function store(Request $request)
    {
        $data = [
            'navbar_login' => $request->navlogin,
            'sidebar_daftar' => $request->sidereg,
            'sidebar_login' => $request->sidelogin,
            'tanggung_jawab' => $request->tanggung,
            'dukungan_browser' => $request->dukungan,
            'refferal' => $request->refferal,
            'postslink' => $request->postslink,
            'livechat' => $request->livechat,
        ];
       Link::create($data);
       return back()->with("success", "Link changed successfully!");
    }
    public function update(Request $request)
    {
        $data = [
            'navbar_login' => $request->navlogin,
            'sidebar_daftar' => $request->sidereg,
            'sidebar_login' => $request->sidelogin,
            'tanggung_jawab' => $request->tanggung,
            'dukungan_browser' => $request->dukungan,
            'refferal' => $request->refferal,
            'postslink' => $request->postslink,
            'livechat' => $request->livechat,
        ];  
        Link::first()->update($data);
        return back()->with("success", "link insert successfully!");
    }
}
