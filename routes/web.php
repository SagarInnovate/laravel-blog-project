<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\checkLogin;
use App\Http\Controllers\indexController;
use App\Http\Controllers\settingController;
use App\Http\Middleware\checkLogin as MiddlewareCheckLogin;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('public.index');
});



Route::get('/about', function () {
    return view('public.About');
});

Route::get('/bt', function () {
    return view('public.blog_templete');
});

Route::get('/contact', function () {
    return view('public.Contact');
});

Route::get('/disclaimer', function () {
    return view('public.Disclaimer');
});

Route::get('/privacy-policy', function () {
    return view('public.Privacy-Policy');
});

Route::get('/terms-and-conditions', function () {
    return view('public.terms-and-conditions');
});

Route::get('/blogs', function () {
    return redirect("/");
});



//admin phase

Route::get("/admin", function () {

    if (isset($_SESSION["admin"])) {
        return redirect("/admin/setting");
    } else {
        return redirect("/admin/login");
    }
});



Route::get("/admin/login", [checkLogin::class, 'login']);
Route::post("/admin/login", [checkLogin::class, 'login_s']);



//middleware admin

Route::middleware([MiddlewareCheckLogin::class])->group(function () {



Route::resource('/admin/blog',blogController::class);

Route::resource('/admin/category', categoryController::class);

Route::resource('/admin/contacts', contactsController::class);


Route::post('/contact', [contactsController::class,'store'] );


Route::get('/admin/setting',[settingController::class,'index']);
Route::patch('/admin/setting',[settingController::class,'update']);


Route::get('/admin/ads', function () {
    return view('admin.ads');
});

Route::get("/admin/logout", [checkLogin::class, 'logout']);

});



Route::any('/blogs/{id}', [indexController::class, 'blog_post_data']);