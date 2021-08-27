<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $hidden = ['pivot'];

    protected $fillable = ['title', 'description', 'price', 'vegan', 'gluten', 'spice'];

    protected $casts = [
        'vegan' => 'boolean',
        'gluten' => 'boolean',
        'spice' => 'integer',
        'price' => 'float'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
