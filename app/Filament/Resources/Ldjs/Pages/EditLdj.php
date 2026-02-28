<?php

namespace App\Filament\Resources\Ldjs\Pages;

use App\Filament\Resources\Ldjs\LdjResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLdj extends EditRecord
{
    protected static string $resource = LdjResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}