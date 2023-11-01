<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    
    public function index()
    {
        $category = categories::all();

        return view('admin.admin_category')->with('category', $category);
    }


    public function create()
    {
        return view('admin.admin_add_new_category', ['title' => 'Add New Category', "btn_text" => 'Add New']);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        categories::create($input);
        return redirect('/admin/category')->with('flash_message', '');
    }


    public function show($id)
    {
        redirect("/admin/category");
    }


    public function edit($id)
    {
        $category = categories::find($id);
        return view('admin.admin_add_new_category', ['title' => 'update category', "btn_text" => 'update'])->with('category', $category);
    }


    public function update(Request $request, $id)
    {
        $category = categories::find($id);
        $input = $request->all();

        $category->update($input);
        return redirect('/admin/category')->with('flash_message', 'student Updated!');
    }


    public function destroy($id)
    {
        categories::destroy($id);
        return redirect('/admin/category')->with('flash_message', 'Student deleted!');
    }
}
