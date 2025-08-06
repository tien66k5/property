<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PriorityPackage extends Model
{
    protected $fillable = ['name', 'price', 'duration_days', 'is_old', 'priority_level', 'start_time'];

    protected $casts = [
        'is_old' => 'boolean',
        'price' => 'float',
        'duration_days' => 'integer',
        'priority_level' => 'integer',
    ];

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_priorities', 'priority_package_id', 'property_id')
            ->withPivot('start_date', 'end_date');
    }
}
