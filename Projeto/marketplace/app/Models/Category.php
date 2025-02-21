<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'descrption', 'slug'];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
