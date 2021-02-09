<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $table = 'krs';
    protected $primaryKey = 'id';

    protected $fillable = ['colleges_id', 'lessons_id'];
 
}
