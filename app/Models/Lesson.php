<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';
    protected $primaryKey = 'id';

    protected $fillable = ['nama_mk', 'sks', 'semester'];

    public function college()
    {
        return $this->belongsToMany('App\Models\College')
        ->withPivot('krs')
    	->withTimestamps();
    }
}
