<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','slug','user_id'];

    public function articles()
    {
        return $this->belongsToMany(article::class, 'category_article');
    }



}
