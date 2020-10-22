<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'description'
    ];
    public function user()
    {
        return $this->belongsTo('App\User' , 'sub_id')->select(['id','firstname','lastname','email']);
    }
}
