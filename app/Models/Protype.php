<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'type_id';
    use HasFactory; 
}
