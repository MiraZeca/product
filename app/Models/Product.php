<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    // Dodaj polja koja želiš da dozvoliš za masovno dodeljivanje
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'image1_path',
        'image2_path',
        'image3_path',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
