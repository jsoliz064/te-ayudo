<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SocialProfile extends Model
{
    use HasFactory;
    //relacion uno a muchos inversa
    protected $fillable = ['user_id', 'social_id', 'social_name', 'social_avatar'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
