<?php

namespace App\Filament\Resources\ContactInfos;

use App\Filament\Resources\ContactInfos\Pages;
use \App\Filament\Resources\ContactInfos\Schemas\ContactInfoForm;
use App\Filament\Resources\ContactInfos\Tables\ContactInfosTable;
use App\Models\ContactInfo;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use BackedEnum;

class ContactInfoResource extends Resource
{
    protected static ?string $model = ContactInfo::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-phone';

    protected static ?string $recordTitleAttribute = 'type';

    protected static ?string $navigationLabel = 'Info Kontak';

    protected static ?string $pluralLabel = 'Info Kontak';

    protected static ?string $label = 'Info Kontak';

    public static function form(Schema $schema): Schema
    {
        return ContactInfoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactInfosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactInfos::route('/'),
            'create' => Pages\CreateContactInfo::route('/create'),
            'edit' => Pages\EditContactInfo::route('/{record}/edit'),
        ];
    }
}