<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PintasanController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\TagSlotController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\LoginController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', DashboardController::class, 'index');
Route::get('/artikels/{slug}', 'App\Http\Controllers\DashboardController@slug');

Route::get('/login', LoginController::class)->middleware('guest')->name('home');
Route::post('/login', 'App\Http\Controllers\LoginController@store')->name('login')->middleware('guest');

Route::group(['middleware' => ['auth']], function () {

             Route::post('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
            Route::get('/home', function () {
                return view('dashboard.render.home');
            });
            Route::get('/dashboard/site-identity', IdentityController::class, 'index');
            Route::post('/dashboard/site-identity', 'App\Http\Controllers\IdentityController@store')->name('identity-store');
            Route::post('/dashboard/site-identity', 'App\Http\Controllers\IdentityController@update')->name('identity-update');


            Route::get('/dashboard/site-header', NavbarController::class, 'index');
            Route::post('/dashboard/site-header', 'App\Http\Controllers\NavbarController@store')->name('navbar-store');
            Route::post('/dashboard/{id}/save', 'App\Http\Controllers\NavbarController@update')->name('navbar-update');
            Route::get('/dashboard/{id}/remove', 'App\Http\Controllers\NavbarController@remove')->name('navbar-remove');

            Route::get('/dashboard/sitebar-header', SidebarController::class, 'index');
            Route::post('/dashboard/sitebar-header', 'App\Http\Controllers\SidebarController@store')->name('sidebar-store');
            Route::post('/dashboards/{id}/save', 'App\Http\Controllers\SidebarController@update')->name('sidebar-update');
            Route::get('/dashboards/{id}/remove', 'App\Http\Controllers\SidebarController@remove')->name('sidebar-remove');


            Route::get('/dashboard/site-tentang-kami', TentangKamiController::class);
            Route::post('/dashboard/site-tentang-kami', 'App\Http\Controllers\TentangKamiController@store')->name('tentang-store');


            Route::get('/dashboard/site-tag', TagSlotController::class, 'index');
            Route::post('/dashboard/site-tag', 'App\Http\Controllers\TagSlotController@store')->name('tag-store');
            Route::post('/tag/{id}/save', 'App\Http\Controllers\TagSlotController@update');
            Route::get('/tag/{id}/remove', 'App\Http\Controllers\TagSlotController@remove');


            Route::get('/dashboard/site-pintasan', PintasanController::class, 'index');
            Route::post('/dashboard/site-pintasan', 'App\Http\Controllers\PintasanController@store')->name('pintasan-store');
            Route::post('/pintasan/{id}/save', 'App\Http\Controllers\PintasanController@update');
            Route::get('/pintasan/{id}/remove', 'App\Http\Controllers\PintasanController@remove');


            Route::get('/dashboard/site-link', LinkController::class, 'index');
            Route::post('/dashboard/site-link', 'App\Http\Controllers\LinkController@store')->name('link-store');
            Route::post('/dashboard/site-link', 'App\Http\Controllers\LinkController@update')->name('link-update');


            Route::get('/dashboard/site-color', ColorController::class, 'index');
            Route::post('/dashboard/site-color','App\Http\Controllers\ColorController@store')->name('color-store');

            Route::get('/dashboard/site-custom', CustomController::class, 'index');
            Route::post('/dashboard/site-custom', 'App\Http\Controllers\CustomController@store')->name('custom-store');

            Route::post('/upload', 'App\Http\Controllers\UploadController')->name('upload-image');
           
            Route::get('/dashboard/account', function (){
                return view('dashboard.input.account',[
                    'user'=> User::first()
                ]);
            });
            Route::post('/update', 'App\Http\Controllers\LoginController@update')->name('update-account');

            Route::get('/dashboard/header-style','App\Http\Controllers\StyleHeaderController@index');
            Route::post('/dashboard/header-style','App\Http\Controllers\StyleHeaderController@store')->name('style-header');

            Route::get('/dashboard/footer-style','App\Http\Controllers\StyleFooterController@index');
            Route::post('/dashboard/footer-style','App\Http\Controllers\StyleFooterController@store')->name('style-footer');

            Route::get('/dashboard/mobile-style','App\Http\Controllers\StyleMobileController@index');
            Route::post('/dashboard/mobile-style','App\Http\Controllers\StyleMobileController@store')->name('style-mobile');

            Route::get('/dashboard/background-style','App\Http\Controllers\StyleBackgroundController@index');
            Route::post('/dashboard/background-style','App\Http\Controllers\StyleBackgroundController@store')->name('style-background');

            Route::get('/dashboard/site-artikel','App\Http\Controllers\ArtikelController@index');
            Route::post('/dashboard/site-artikel','App\Http\Controllers\ArtikelController@store')->name('site-artikel');

            Route::get('/dashboard/sidebar-style','App\Http\Controllers\StyleSidebarController@index');
            Route::post('/dashboard/sidebar-style','App\Http\Controllers\StyleSidebarController@store')->name('style-sidebar');

            Route::get('/dashboard/create','App\Http\Controllers\PostController@index');
            Route::get('/dashboard/draft','App\Http\Controllers\PostController@draft');
            Route::get('/dashboard/publish','App\Http\Controllers\PostController@publish');
            Route::get('/dashboard/draft/{id}','App\Http\Controllers\PostController@edit');
            Route::get('/dashboard/publish/{id}','App\Http\Controllers\PostController@edit');
            Route::get('/dashboard/draft/{id}/hapus','App\Http\Controllers\PostController@hapus');
            Route::get('/dashboard/publish/{id}/hapus','App\Http\Controllers\PostController@hapus');
            Route::post('/dashboard/draft/','App\Http\Controllers\PostController@update')->name('update');
            Route::post('/dashboard/create','App\Http\Controllers\PostController@store')->name('create');

            Route::get('/dashboard/analytics', 'App\Http\Controllers\AnalyticsController@index');
            Route::post('/dashboard/analytics', 'App\Http\Controllers\AnalyticsController@store')->name('analytics');

            Route::get('/dashboard/html-home', 'App\Http\Controllers\HtmlController@index');
            Route::post('/dashboard/html-home', 'App\Http\Controllers\HtmlController@store')->name('html-home');

            Route::get('/dashboard/html-posts', 'App\Http\Controllers\HtmlController@posts');
            Route::post('/dashboard/html-posts', 'App\Http\Controllers\HtmlController@posts_store')->name('html-posts');
});

