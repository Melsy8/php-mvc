<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visual extends Model
{
    use HasFactory;
    protected $table = "digis";
    protected $fillable = ['id','Attribute','Digimon'];
}
