<?php

namespace App\Filament\Resources\Ldjs\Pages;

use App\Filament\Resources\Ldjs\LdjResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLdjs extends ListRecords
{
    protected static string $resource = LdjResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
