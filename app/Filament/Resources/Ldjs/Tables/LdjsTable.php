<?php

namespace App\Filament\Resources\Ldjs\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn; 

class LdjsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo'),
                TextColumn::make('nama_jurusan')->searchable(),
                TextColumn::make('instagram_link')->copyable(),
            ])

            ->actions([
                EditAction::make(), 
                DeleteAction::make(),
        ]);
            
    }
}
