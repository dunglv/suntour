<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class MainController extends Controller
{
   	public function home()
   	{
   		return view('layouts.home');
   	}

   	public function language_set(Request $request)
    {
    	$support_lang = Config::has('setting_admin.support_lang')?Config::get('setting_admin.support_lang'):['en'];

    	if ($request->has('lang')) {
    		$lang = trim($request->get('lang'));
    		if (in_array($lang, $support_lang)) {
    			app()->setLocale($lang);
    			session()->put('lang', $lang);
    			return redirect()->back();
    		}else{
    			return redirect()->back();
    		}
    	}else{
    		return redirect()->back();
    	}
    }

   	public function article_index()
   	{
   		return view('partials.articles.index');
   	}
}
