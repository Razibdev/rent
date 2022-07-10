<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminLogin(Request $request){
        if ($request->isMethod('post')){
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
                Toastr::success('Login Successfully done', 'Admin Login');
                return  redirect()->route('admin.dashboard');
            }else{
                Toastr::error('Email Or Password Invalid!!!!!', 'Admin Login');
                return  redirect()->route('admin.login');
            }
        }
        return view('admin.auth.admin_login');
    }


    public function adminLogout (){
        Auth::guard('admin')->logout();
        Toastr::success('LogOut Successfully done', 'Admin Logout');
        return redirect()->route('admin.login');
    }





}
