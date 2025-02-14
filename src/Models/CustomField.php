<?php

namespace Firefly\FilamentBlog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomField extends Model
{
    protected $fillable = ['key', 'value'];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function getTable()
    {
        return config('filamentblog.tables.prefix') . 'custom_fields';
    }
}
