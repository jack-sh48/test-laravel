<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ["id" , "title","parent_id" , "image" , "type" , "workout_type", "status", "created_datetime"];
}
