<?php

namespace App\Http\Controllers;
use App\Models\Color;
use App\Models\Custom;
use App\Models\Identity;
use App\Models\Link;
use App\Models\Image;
use App\Models\Navbar;
use App\Models\Sidebar;
use App\Models\Pintasan;
use App\Models\TagSlot;
use App\Models\TentangKami;
use App\Models\StyleHeader;
use App\Models\StyleFooter;
use App\Models\StyleSidebar;
use App\Models\StyleMobile;
use App\Models\Artikel;
use App\Models\StyleBackground;
use App\Models\Post;
use App\Models\Analytics;
use App\Models\Html;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
class DashboardController extends Controller
{
    public function __invoke()
    {
        $page = Html::find(1);
        $html = view('template.header', [
            'color' => Color::first(),
            'custom' => Custom::first(),
            'identity' => Identity::first(),
            'imagenav' => Image::find(1),
            'imageside' => Image::find(2),
            'link' => Link::first(),
            'navbar' => Navbar::get(),
            'sidebar' => Sidebar::get(),
            'pintasan' => Pintasan::get(),
            'tagslot' => TagSlot::get(),
            'tentangkami' => TentangKami::first(),
            'styleheader' => StyleHeader::first(),
            'stylefooter' => StyleFooter::first(),
            'stylesidebar' => StyleSidebar::first(),
            'stylemobile' => StyleMobile::first(),
            'stylebackground' => StyleBackground::first(),
            'artikel' => Artikel::first(),
            'analytics' => Analytics::first(),
            'headers' => Blade::compileString($page->header),
        ])->render();
        $body = view('template.body', [
            'color' => Color::first(),
            'custom' => Custom::first(),
            'identity' => Identity::first(),
            'imagenav' => Image::find(1),
            'imageside' => Image::find(2),
            'link' => Link::first(),
            'navbar' => Navbar::get(),
            'sidebar' => Sidebar::get(),
            'pintasan' => Pintasan::get(),
            'tagslot' => TagSlot::get(),
            'tentangkami' => TentangKami::first(),
            'styleheader' => StyleHeader::first(),
            'stylefooter' => StyleFooter::first(),
            'stylesidebar' => StyleSidebar::first(),
            'stylemobile' => StyleMobile::first(),
            'stylebackground' => StyleBackground::first(),
            'artikel' => Artikel::first(),
            'analytics' => Analytics::first(),
            'body' => Blade::compileString($page->body),
        ])->render();
        $footer = view('template.footer', [
            'color' => Color::first(),
            'custom' => Custom::first(),
            'identity' => Identity::first(),
            'imagenav' => Image::find(1),
            'imageside' => Image::find(2),
            'link' => Link::first(),
            'navbar' => Navbar::get(),
            'sidebar' => Sidebar::get(),
            'pintasan' => Pintasan::get(),
            'tagslot' => TagSlot::get(),
            'tentangkami' => TentangKami::first(),
            'styleheader' => StyleHeader::first(),
            'stylefooter' => StyleFooter::first(),
            'stylesidebar' => StyleSidebar::first(),
            'stylemobile' => StyleMobile::first(),
            'stylebackground' => StyleBackground::first(),
            'artikel' => Artikel::first(),
            'analytics' => Analytics::first(),
            'footer' => Blade::compileString($page->footer),
        ])->render();
        return view('app.home',[
            'color' => Color::first(),
            'custom' => Custom::first(),
            'identity' => Identity::first(),
            'imagenav' => Image::find(1),
            'imageside' => Image::find(2),
            'link' => Link::first(),
            'navbar' => Navbar::get(),
            'sidebar' => Sidebar::get(),
            'pintasan' => Pintasan::get(),
            'tagslot' => TagSlot::get(),
            'tentangkami' => TentangKami::first(),
            'styleheader' => StyleHeader::first(),
            'stylefooter' => StyleFooter::first(),
            'stylesidebar' => StyleSidebar::first(),
            'stylemobile' => StyleMobile::first(),
            'stylebackground' => StyleBackground::first(),
            'artikel' => Artikel::first(),
            'analytics' => Analytics::first(),
            'html' => $html,
            'body' => $body,
            'footer' => $footer,
        ]);
    }
    public function slug($slug)
    {
        $page = Html::find(2);
        $get = Post::where('slug', $slug)->where('status', 1)->first();
        $html = view('template.header', [
            'color' => Color::first(),
            'custom' => Custom::first(),
            'identity' => Identity::first(),
            'imagenav' => Image::find(1),
            'imageside' => Image::find(2),
            'link' => Link::first(),
            'navbar' => Navbar::get(),
            'sidebar' => Sidebar::get(),
            'pintasan' => Pintasan::get(),
            'tagslot' => TagSlot::get(),
            'tentangkami' => TentangKami::first(),
            'styleheader' => StyleHeader::first(),
            'stylefooter' => StyleFooter::first(),
            'stylesidebar' => StyleSidebar::first(),
            'stylemobile' => StyleMobile::first(),
            'stylebackground' => StyleBackground::first(),
            'artikel' => Artikel::first(),
            'posts' => $get,
            'analytics' => Analytics::first(),
            'headers' => Blade::compileString($page->header),
        ])->render();
        $body = view('template.body', [
            'color' => Color::first(),
            'custom' => Custom::first(),
            'identity' => Identity::first(),
            'imagenav' => Image::find(1),
            'imageside' => Image::find(2),
            'link' => Link::first(),
            'navbar' => Navbar::get(),
            'sidebar' => Sidebar::get(),
            'pintasan' => Pintasan::get(),
            'tagslot' => TagSlot::get(),
            'tentangkami' => TentangKami::first(),
            'styleheader' => StyleHeader::first(),
            'stylefooter' => StyleFooter::first(),
            'stylesidebar' => StyleSidebar::first(),
            'stylemobile' => StyleMobile::first(),
            'stylebackground' => StyleBackground::first(),
            'artikel' => Artikel::first(),
            'posts' => $get,
            'analytics' => Analytics::first(),
            'body' => Blade::compileString($page->body),
        ])->render();
        $footer = view('template.footer', [
            'color' => Color::first(),
            'custom' => Custom::first(),
            'identity' => Identity::first(),
            'imagenav' => Image::find(1),
            'imageside' => Image::find(2),
            'link' => Link::first(),
            'navbar' => Navbar::get(),
            'sidebar' => Sidebar::get(),
            'pintasan' => Pintasan::get(),
            'tagslot' => TagSlot::get(),
            'tentangkami' => TentangKami::first(),
            'styleheader' => StyleHeader::first(),
            'stylefooter' => StyleFooter::first(),
            'stylesidebar' => StyleSidebar::first(),
            'stylemobile' => StyleMobile::first(),
            'stylebackground' => StyleBackground::first(),
            'artikel' => Artikel::first(),
            'posts' => $get,
            'analytics' => Analytics::first(),
            'footer' => Blade::compileString($page->footer),
        ])->render();
      
       return view('app.posts',[
        'color' => Color::first(),
        'custom' => Custom::first(),
        'identity' => Identity::first(),
        'imagenav' => Image::find(1),
        'imageside' => Image::find(2),
        'link' => Link::first(),
        'navbar' => Navbar::get(),
        'sidebar' => Sidebar::get(),
        'pintasan' => Pintasan::get(),
        'tagslot' => TagSlot::get(),
        'tentangkami' => TentangKami::first(),
        'styleheader' => StyleHeader::first(),
        'stylefooter' => StyleFooter::first(),
        'stylesidebar' => StyleSidebar::first(),
        'stylemobile' => StyleMobile::first(),
        'stylebackground' => StyleBackground::first(),
        'artikel' => Artikel::first(),
        'posts' => $get,
        'analytics' => Analytics::first(),
        'headers' => $html,
        'body'=> $body,
        'footer' => $footer
       ]);
    }
}
