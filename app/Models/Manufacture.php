<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'manu_id';
    use HasFactory;
}
