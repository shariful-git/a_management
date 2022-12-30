<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = array('post', 'post_bk', 'user_id', 'status');

    public function user() 
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
