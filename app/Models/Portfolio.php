<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';

    protected $fillable = [
        'title',
        'thumbnail',
        'client',
        'category',
        'date',
        'description',
        'footage'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


}
