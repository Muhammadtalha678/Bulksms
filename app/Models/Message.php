<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'message';

    protected $fillable = [
    	'title','slug','meta_keyword','meta_description','status','created_at','updated_at'
    ];
}
