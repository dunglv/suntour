<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id','title', 'slug', 'description', 'image', 'file', 'active']; 

    public function articles()
    {
    	return $this->hasMany('App\Article');
    }

    public function languages()
    {
    	return $this->belongsToMany('App\Language', 'category_language', 'category_id', 'language_id');
    }
}
