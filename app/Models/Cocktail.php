<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cocktail extends Model
{
    use HasFactory;

    //sono le key dei dati presenti nella seeder
    protected $fillable = ['name', 'category', 'isAlcoholic', 'glass', 'instruction', 'thumb', 'ingredients', 'measures'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
