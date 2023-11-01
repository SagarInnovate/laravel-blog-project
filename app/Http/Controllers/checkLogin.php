<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkLogin extends Controller
{
    public function login()
    {
        if (session()->has('admin')) {
            return redirect("/admin/setting");
        } else {
            return view('admin.admin_login');
        }
    }

    public function login_s(Request $r)
    {

        if ($r->input('username') == "admin") {
            if ($r->input('password') == "admin") {
                if ($r->input('secret_key') == "admin@123") {
                    session(['admin' => 'sagar_admin']);
                    return redirect("/admin/setting");
                }
            }
        } else {
            echo "wrong username or password";
        }
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect("/admin/login");
    }
}
