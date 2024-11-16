<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author_id', 'categori_id', 'slug', 'content'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categori(): BelongsTo
    {
        return $this->belongsTo(Categori::class);
    }
}
