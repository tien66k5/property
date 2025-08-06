<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\LegalDocumentResource\Pages;

use Modules\Property\App\Filament\Resources\LegalDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLegalDocument extends ListRecords
{
    protected static string $resource = LegalDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
