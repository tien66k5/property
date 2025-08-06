<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyPriority extends Model
{
    protected $table = 'property_priorities';

    protected $fillable = ['property_id', 'priority_package_id', 'start_date', 'end_date'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function priorityPackage(): BelongsTo
    {
        return $this->belongsTo(PriorityPackage::class);
    }
}