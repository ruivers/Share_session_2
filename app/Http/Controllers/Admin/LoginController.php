<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Redis;

class LoginController extends Controller
{
    //
	public function login()
	{
		return view('admin/login');
	}

	public function checkLogin(Request $request)
	{
	    session(['name'=>'rui']);
	    $id = $request->session()->getId();
        return view('admin/index', compact('id', $id));
	}
    
}
