<?php

namespace App\Filament\Resources\PengenalanDepartments;

use App\Filament\Resources\PengenalanDepartments\Pages;
use App\Filament\Resources\PengenalanDepartments\Schemas\PengenalanDepartmentForm;
use App\Filament\Resources\PengenalanDepartments\Tables\PengenalanDepartmentsTable;
use App\Models\PengenalanDepartment;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use BackedEnum;

class PengenalanDepartmentResource extends Resource
{
    protected static ?string $model = PengenalanDepartment::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PengenalanDepartmentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PengenalanDepartmentsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengenalanDepartments::route('/'),
            'create' => Pages\CreatePengenalanDepartment::route('/create'),
            'edit' => Pages\EditPengenalanDepartment::route('/{record}/edit'),
        ];
    }
}