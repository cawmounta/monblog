<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'date_pub',
        'author',
        'status',
        'category_id'
];
/**
 * Cette fonction permet de récuperer la gategorie d'un article
 */
public function category(){
    return $this->belongsTo(Category::class);
}
}
