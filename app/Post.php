<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //MASS ASSIGN
    protected $fillable = [
        'title',
        'body',
        'slug',
        'path_img',
    ];

    // DB RELATIONS

    //post -info_post
    public function infoPost() {
        return $this->hasOne('App\InfoPost');
    }

    //post - comments
    public function comments() {
        return $this->hasMany('App\Comment');
    }

    //post - tags
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
