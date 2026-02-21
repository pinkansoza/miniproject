<?php

namespace App\Filament\Resources\OrganizationStructures;

use App\Filament\Resources\OrganizationStructures\Pages;
use App\Filament\Resources\OrganizationStructures\Schemas\OrganizationStructureForm;
use App\Filament\Resources\OrganizationStructures\Tables\OrganizationStructuresTable;
use App\Models\OrganizationStructure;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use BackedEnum;

class OrganizationStructureResource extends Resource
{
    protected static ?string $model = OrganizationStructure::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $recordTitleAttribute = 'department_name';

    protected static ?string $navigationLabel = 'Susunan Pengurus';

    protected static ?string $pluralLabel = 'Susunan Pengurus';

    protected static ?string $label = 'Susunan Pengurus';

    public static function form(Schema $schema): Schema
    {
        return OrganizationStructureForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrganizationStructuresTable::configure($table);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrganizationStructures::route('/'),
            'create' => Pages\CreateOrganizationStructure::route('/create'),
            'edit' => Pages\EditOrganizationStructure::route('/{record}/edit'),
        ];
    }
}
