<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['id','title', 'slug', 'description', 'content', 'image', 'file', 'feature', 'opencomment', 'active']; 

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function languages()
    {
    	return $this->belongsToMany('App\Language', 'article_language', 'article_id', 'language_id');
    }
}
