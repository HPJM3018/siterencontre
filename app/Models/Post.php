<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'caption',
        'image',  
    ];

    
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
