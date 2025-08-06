<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyFormSetting extends Model
{
    protected $table = 'property_form_settings';

    protected $fillable = [
        'user_id',
        'section',
        'field',
        'is_enabled',
    ];

    protected $casts = [
        'is_enabled' => 'boolean',
    ];
}
