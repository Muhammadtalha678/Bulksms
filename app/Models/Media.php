<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'media';

    protected $fillable = [
    		'title','slug','meta_description','description','media_img','media_gallery','embed_code','meta_description','created_at','updated_at','status'
    ];
}
