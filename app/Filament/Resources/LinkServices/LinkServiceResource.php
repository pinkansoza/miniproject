<?php

namespace App\Filament\Resources\LinkServices;

use App\Filament\Resources\LinkServices\Pages;
use App\Filament\Resources\LinkServices\Schemas\LinkServiceForm;
use App\Filament\Resources\LinkServices\Tables\LinkServicesTable;
use App\Models\LinkService;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use BackedEnum;

class LinkServiceResource extends Resource
{
    protected static ?string $model = LinkService::class;

    protected static bool $shouldSkipAuthorization = true;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-link';

    public static function form(Schema $schema): Schema
    {
        return LinkServiceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LinkServicesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLinkServices::route('/'),
            'create' => Pages\CreateLinkService::route('/create'),
            'edit' => Pages\EditLinkService::route('/{record}/edit'),
        ];
    }
}