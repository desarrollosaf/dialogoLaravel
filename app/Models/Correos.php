<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correos extends Model
{
    use HasFactory;
    protected $table = 'Correos';
//    public $timestamps = false;
    protected $guarded = ["id"];
}
