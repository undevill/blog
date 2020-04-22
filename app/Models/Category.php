<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'create_by', 'modified_by'];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = \Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'),
            '-');
    }
    public function children() {
        return $this->hasMany(self::class, 'parent_id');
    }
}
