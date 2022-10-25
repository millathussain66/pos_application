<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $fillable = ['title'];


    function product()
    {
        return $this->hasMany(Product::class);
    }


    public static function arrayForSelect(){
        $arr =[];
        $catagorys = Catagory::all();
        foreach ($catagorys as $catagori) {
            $arr[$catagori->id] =$catagori->title;
        }
        return $arr;
    }
}
