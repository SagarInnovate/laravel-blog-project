<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        $blogs = blogs::all();

        return view('admin.admin_blog')->with('blogs', $blogs);
    }

    public function create()
    {
        return view('admin.admin_add_new_blog', ['title' => 'Add New Blog', "btn_text" => 'Add Blog']);
    }


    public function store(Request $request)
    {
        $data = new blogs();

        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/Blog_Image'), $filename);
            $data['local_img_path'] = 'uploads/Blog_Image/'.$filename;
            $response = cloudinary()->upload(public_path('uploads/Blog_Image/'.$filename))->getSecurePath();  
            $data['image']=$response;

        }
        $data['post_title'] = $request->input('post_title');
        $data['post_content'] = $request->input('post_content');
        $data['description'] = $request->input('description');
        $data['category'] = $request->input('category');
        $data['tags'] = $request->input('tags');
        $str = str_replace(" ", "-", $data['post_title']);
        $data['str_url'] = $str;
        $data->save();
        return redirect('/admin/blog')->with('flash_message', 'Student Addedd!');
    }


    public function show($id)
    {
        $blog = blogs::find($id);

        echo "<pre>";
        print_r($blog);
        echo "</pre>";
    }


    public function edit($id)
    {
        $blog = blogs::find($id);
        $title = ['update blog'];
        return view('admin.admin_add_new_blog', ['title' => 'update blog', "btn_text" => 'update'])->with('blog', $blog);
    }


    public function update(Request $request, $id)
    {
        if ($blog = blogs::find($id)->count() > 0) {

            $input = $request->all();
            $blog = blogs::find($id);


            if ($request->file('file')) {
                $file = $request->file('file');
                $filename = date('YmdHi') . $file->getClientOriginalName();
              
                $file->move(public_path('uploads/Blog_Image'), $filename);
                $response = cloudinary()->upload(public_path('uploads/Blog_Image/'.$filename))->getSecurePath();  
                $input['image']=$response;
                $input['local_img_path'] = 'uploads/Blog_Image/'.$filename;
            }
           
            $input['str_url'] = str_replace(" ", "-", $input['post_title']);
          


            $blog->update($input);
            return redirect('/admin/blog')->with('flash_message', 'student Updated!');
        } else {
            return abort(403);
        }
    }


    public function destroy($id)
    {
        if (blogs::destroy($id)) {
            return redirect('/admin/blog')->with('flash_message', 'Student deleted!');
        } else {
            return abort(401);
        }
    }
}
