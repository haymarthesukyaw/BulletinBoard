<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable=[
        'title','description','status','create_user_id','updated_user_id','deleted_user_id'
    ];
}
