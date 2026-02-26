<?php

namespace App\Filament\Resources\ContactInfos\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class ContactInfosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')
                    ->label('Tipe Kontak')
                    ->searchable(),
                TextColumn::make('value')
                    ->label('Isi Kontak')
                    ->searchable(),
            ])
            ->actions([
                EditAction::make(), 
                DeleteAction::make(),
            ]);
    }
}