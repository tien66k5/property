<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'status'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function properties()
    {
        return $this->morphedByMany(Property::class, 'categoryable');
    }
}
