<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
class AdminController extends Controller
{
    public function home()
    {
    	// dd(app()->getLocale());
    	return view('admin.layouts.home');
    }

   
}
