<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use HasApiTokens, HasFactory, Notifiable, MustVerifyEmailTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fredom',
        'avatar',
        'introduction',
        'occupation',
        'realname'
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

    // 用户拥有的友联
    public function links(){

        return $this->hasMany(Link::class);
    }

    // 用户拥有的作品分类
    public function productioncategories()
    {
        return $this->hasMany(ProductionCategory::class);
    }

    // 用户拥有的作品内容
    public function productioncontents()
    {
        return $this->hasMany(ProductionContent::class);
    }

    // 用户拥有的服务项目
    public function serveices()
    {
        return $this->hasMany(Service::class);
    }
}
