<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

    public static function generateSlug($name){
        return Str::slug($name, '_');
            }

            public static function post(){
                return $this->belongsToMany(Post::class);
            }

}
