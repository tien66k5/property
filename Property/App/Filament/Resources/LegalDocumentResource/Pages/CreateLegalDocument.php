<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\LegalDocumentResource\Pages;

use Modules\Property\App\Filament\Resources\LegalDocumentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLegalDocument extends CreateRecord
{
    protected static string $resource = LegalDocumentResource::class;
}