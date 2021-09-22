<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * 应进行类型转换的属性
     *
     * @var array
     */
    protected $casts = [
        'guarantee' => 'array',
    ];

    protected $fillable = [
        'title', 'describe', 'price', 'guarantee', 'ytd', 'user_id'
    ];
}
