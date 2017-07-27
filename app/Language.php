<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
    protected $fillable = ['id','title', 'name', 'code', 'active']; 

    public function categories()
    {
    	return $this->belongsToMany('App\Category', 'category_language', 'language_id', 'category_id')->withTimestamps();
    }

    public function articles()
    {
    	return $this->belongsToMany('App\Article', 'article_language', 'language_id', 'article_id')->withTimestamps();
    }
}
