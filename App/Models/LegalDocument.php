<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalDocument extends Model
{
    protected $fillable = ['name', 'description', 'document_type'];

    protected $casts = [
        'document_type' => 'string',
    ];
}
