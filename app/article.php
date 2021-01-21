<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{

    protected $table = "articles";
    public $timestamps = false;
    protected $fillable = [
        'theme',
        'rating',
        'user_id',
        'email',
        'author',
        'content',
        'postimg',
    ];
//    protected $guarded = [
//        '_method',
//
//    ];

    public function categories()
    {
        return $this->belongsToMany(category::class, 'category_article');
    }
}
