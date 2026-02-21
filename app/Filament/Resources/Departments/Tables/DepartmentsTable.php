<?php

namespace App\Filament\Resources\Departments\Tables;

use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;

class DepartmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto Departmen'),
                TextColumn::make('name')
                    ->label('Nama Departmen')
                    ->searchable()
                    ->sortable(),
            ])
            ->actions([
                EditAction::make(), 
                DeleteAction::make(),
            ]);
    }
}
