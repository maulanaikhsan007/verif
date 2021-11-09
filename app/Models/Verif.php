<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verif extends Model
{
    protected $table = 'verif';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama','npm','jurusan'];
}
