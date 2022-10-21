<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['group_id', 'name', 'phone', 'email', 'address'];


    public function group()
    {
        return $this->belongsTo(Group::class);
    }









}
