<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'colleges';
    protected $primaryKey = 'id';
    
    protected $fillable = ['nama', 'tgl_lahir', 'nis', 'email', 'jurusan'];

    public function lesson()
    {
        return $this->belongsToMany('App\Models\Lesson', 'krs');
    }
}
