<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'describe',
        'thumbnail',
        'production_categorie_id'
    ];
}
