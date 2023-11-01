<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\categories;
use App\Models\site_setting;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function all_category()
    {
        $category = categories::all();
        return $category;
    }


    function setting()
    {
        $setting = site_setting::find(1);
        return $setting;
    }

    function get_recent_6_posts(){
        return blogs::orderby('id', 'desc')->take(6)->get();
    }

    function get_6_popular_posts(){
        return blogs::all()->random(10);
    }

    function all_posts(){
        return blogs::all();
    }

    function get_9_category(){
        return categories::all()->random(9);
    }

    function blog_post_data($id)
    {
        if (blogs::where("str_url", $id)->count() > 0) {
            $post_data = blogs::where("str_url", $id)->get()->first();
            return view('public.blog_templete')->with('blog', $post_data);
        } else {
            return redirect("/");
        }
    }
}
