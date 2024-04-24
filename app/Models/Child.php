<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dob', 'profile', 'img_url'];

    public function details()
    {
        return $this->hasOne(ChildDetail::class, 'child_id');
    }
}
