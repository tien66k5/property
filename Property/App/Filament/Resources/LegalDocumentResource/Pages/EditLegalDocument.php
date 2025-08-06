<?php

declare(strict_types=1);

namespace Modules\Property\App\Filament\Resources\LegalDocumentResource\Pages;

use Modules\Property\App\Filament\Resources\LegalDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLegalDocument extends EditRecord
{
    protected static string $resource = LegalDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}