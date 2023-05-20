<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProfileUser;

class Comment extends Model
{
    use HasFactory;
    public function profile()
    {
        return $this->belongsTo(ProfileUser::class, 'user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
