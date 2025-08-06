<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyFurniture extends Model
{
    protected $table = 'property_furnitures';

    protected $fillable = ['property_id', 'furniture_type_id', 'quantity'];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function furnitureType(): BelongsTo
    {
        return $this->belongsTo(FurnitureType::class, 'furniture_type_id');
    }
}