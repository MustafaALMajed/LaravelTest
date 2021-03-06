<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // to change the table name protected $table = 'new name';
    // Primary key
    //public $primaryKey = 'post_id';
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
