<?php

namespace App\Http\Controllers;

use App\Models\site_setting;
use Illuminate\Http\Request;

class settingController extends Controller
{
    function index(){
        $setting=site_setting::find(1);
        return view('admin.admin_site_setting')->with('setting',$setting);
    }

    function update(REQUEST $request){
    $db_setting_data=site_setting::find(1);
    $request_data=$request->all();
    if ($request->file('logo')) {
        $file = $request->file('logo');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('/logo'), $filename);
        $request_data['logo'] = 'logo/'.$filename;
      
    }

    $db_setting_data->update($request_data);

    return redirect('/admin/setting');




    }
}
