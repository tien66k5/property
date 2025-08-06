<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomFurniture extends Model
{
    protected $table = 'custom_furnitures';

    protected $fillable = ['property_id', 'name', 'quantity'];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}