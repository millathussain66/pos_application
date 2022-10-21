<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Group extends Model
{
    use HasFactory;

        protected $fillable = ['id','title'];



    /**
     * Array For Select
     * Select All Velu From Groups
     */

     public static function arrayForSelect()
     {
        $arr =[];
        $groups = Group::all();
        foreach ($groups as $group) {
            $arr[$group->id] =$group->title;
        }
        return $arr;
     }

     public function user()
     {
       return $this->hasMany(User::class);
     }







}
