<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // public $table = 'contacts';
    // public $fileable = ['first_name','last_name','username','user_record_id','city','division','postal_code','permission'];
    protected $guarded = ['_token'];
}
