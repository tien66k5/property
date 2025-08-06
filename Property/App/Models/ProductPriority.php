<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPriority extends Model
{
    protected $table = 'product_prioritie';

    protected $fillable = ['property_id', 'priority_package_id', 'duration_days', 'start_date', 'end_date'];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function priorityPackage(): BelongsTo
    {
        return $this->belongsTo(PriorityPackage::class, 'priority_package_id');
    }
}