<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;

class contactsController extends Controller
{
    
    public function index()
    {
        $contact = contacts::all();
        return view('admin.admin_contact')->with('contact', $contact);
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        $input = $request->all();
        contacts::create($input);
        return redirect("/contact")->with('message', 'thanks for contact us');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        if (contacts::destroy($id)) {
            return redirect('/admin/contacts')->with('flash_message', 'Student deleted!');
        } else {
            return abort(401);
        }
    }
}
