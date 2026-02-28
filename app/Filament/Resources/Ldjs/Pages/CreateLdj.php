<?php

namespace App\Filament\Resources\Ldjs\Pages;

use App\Filament\Resources\Ldjs\LdjResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLdj extends CreateRecord
{
    protected static string $resource = LdjResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
