<?php

namespace App\Models;

use App\Models\Author;
use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(category::class);
    }
}
