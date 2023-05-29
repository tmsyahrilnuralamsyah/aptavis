<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasemen extends Model
{
    protected $table = "klasemen";
    protected $fillable = ['klub','kota','ma','me','s','k','gm','gk','sg','poin'];
}
