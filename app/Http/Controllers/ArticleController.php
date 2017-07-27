<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use App\User;
use App\Article;
use App\Category;
use App\Language;

class ArticleController extends Controller
{
    public function index()
    {
        $a = Article::where('active', 1)->paginate(5);
    	return view('admin.articles.index')->with(['articles' => $a]);
    }

    public function create()
    {
        
    	return view('admin.articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
        $a = new Article;
        $a->title = $request->get('title');
        $a->category_id = 1;
        $a->slug = str_slug($request->get('title'));
        $a->description = $request->has('description')?$request->get('description'):null;
        $a->content = $request->get('content');
        if ($request->hasFile('thumbnail')) {
            $pub_url = url('/').'/images/upload/';
            $f = $request->file('thumbnail');
            $ex = $f->getClientOriginalExtension();
            $fn = 'BL_'.date('Ymd_His').rand(0,2000).'.'.$ex;
            $a->file = $fn;
            $a->image = $pub_url.$fn;
            $f->move(public_path().'/images/upload', $fn);
        }
        $a->featured = $request->has('featured')?1:0;
        $a->active = $request->get('active');
        $a->user_id = 1;
        if ($a->save()) {
            $a->languages()->attach($request->get('language'));
            return redirect()->back()->with(['status' => 'success', 'label' => 'Success', 'message' => 'Add new article successful']);
        }else{
            return redirect()->back()->with(['status' => 'danger', 'label' => 'Error', 'message' => 'Add new article failed']);
        }
    }

    public function locked()
    {
    	return view('admin.articles.locked');
    }

    public function edit($id)
    {
        $a = Article::find($id);
        if (count($a) > 0) {
            return view('admin.articles.edit')->with('article', $a);
        }else{
            return redirect()->back();
        }
    }

    public function update($id, CreateArticleRequest $request)
    {
        $a = Article::find($id);
        if (count($a) > 0) {
            $a->title = $request->get('title');
            $a->category_id = 1;
            $a->slug = str_slug($request->get('title'));
            $a->description = $request->has('description')?$request->get('description'):null;
            $a->content = $request->get('content');
            if ($request->hasFile('thumbnail')) {
                $pub_url = url('/').'/images/upload/';
                $f = $request->file('thumbnail');
                $ex = $f->getClientOriginalExtension();
                $fn = 'BL_'.date('Ymd_His').rand(0,2000).'.'.$ex;

                if (!is_null($a->image)) {
                    if (file_exists(public_path().'/images/upload/'.$a->file)) {
                        \File::delete(public_path().'/images/upload/'.$a->file);
                    }
                }

                $a->file = $fn;
                $a->image = $pub_url.$fn;
                $f->move(public_path().'/images/upload', $fn);
            }else{
                if ($request->has('old_thumbnail') && $request->get('old_thumbnail') != null) {
                    $a->image = $request->get('old_thumbnail');
                }
            }

            $a->featured = $request->has('featured')?1:0;
            $a->active = $request->get('active');
            $a->user_id = 1;
            if ($a->save()) {
                $a->languages()->sync([$request->get('language')]);
                return redirect()->back()->with(['status' => 'success', 'label' => 'Success', 'message' => 'Update article successful']);
            }else{
                return redirect()->back()->with(['status' => 'danger', 'label' => 'Error', 'message' => 'Update article failed']);
            } 
        }
    }
}
