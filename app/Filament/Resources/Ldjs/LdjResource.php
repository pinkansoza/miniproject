<?php

namespace App\Filament\Resources\Ldjs;

use App\Filament\Resources\Ldjs\Pages\CreateLdj;
use App\Filament\Resources\Ldjs\Pages\EditLdj;
use App\Filament\Resources\Ldjs\Pages\ListLdjs;
use App\Filament\Resources\Ldjs\Schemas\LdjForm;
use App\Filament\Resources\Ldjs\Tables\LdjsTable;
use App\Models\Ldj;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LdjResource extends Resource
{
    protected static ?string $model = Ldj::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $recordTitleAttribute = 'ldj';

    protected static ?string $navigationLabel = 'Lembaga Dakwah Jurusan';

    protected static ?string $pluralLabel = 'Lembaga Dakwah Jurusan';

    protected static ?string $label = 'Lembaga Dakwah Jurusan';

    public static function form(Schema $schema): Schema
    {
        return LdjForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LdjsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLdjs::route('/'),
            'create' => CreateLdj::route('/create'),
            'edit' => EditLdj::route('/{record}/edit'),
        ];
    }
}
