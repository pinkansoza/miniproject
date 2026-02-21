<?php

namespace App\Filament\Resources\Galleries\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class GalleriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto'),
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                TextColumn::make('date_of_event')
                    ->label('Tanggal Kegiatan')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->actions([
                EditAction::make(), 
                DeleteAction::make(),
        ]);
    }
}