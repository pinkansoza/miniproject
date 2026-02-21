<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->label('Nama Pengaturan'),
                TextColumn::make('value')
                    ->label('Judul Kabinet Susunan Pengurus')
                    ->limit(50),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }
}