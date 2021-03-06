<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['user_id', 'title', 'body'];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
