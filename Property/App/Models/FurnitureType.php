<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FurnitureType extends Model
{
    protected $fillable = ['name', 'description'];

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_furnitures', 'furniture_type_id', 'property_id')
            ->withPivot('quantity');
    }
    
}

   