<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\SocialProfile;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function facebook_perfil(){
        $social_profile=$this->socialProfiles->first();
        if ($social_profile){
            return $social_profile->social_avatar;
        }else{
            return 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.malavida.com%2Fes%2Fsoft%2Fanonymous-esp%2Fandroid%2F&psig=AOvVaw07P7-GBXLydtB8RyMF1ybA&ust=1630731896056000&source=images&cd=vfe&ved=0CAkQjRxqFwoTCNix5_GD4vICFQAAAAAdAAAAABAD';
        } 
    }
    //relacion uno a muchos
    public function socialProfiles(){
        return $this->hasMany(SocialProfile::class);
    }
}
