<?php

namespace App\Filament\Resources\OrganizationStructures\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class OrganizationStructuresTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('department_name')
                    ->label('Nama Departemen')
                    ->searchable(),

                TextColumn::make('members')
                    ->label('Jumlah Anggota')
                    ->state(function ($record): int {
                        return count($record->members ?? []);
                    })
                    ->formatStateUsing(fn ($state): string => "{$state} Orang")
                    ->badge()
                    ->color('success'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
