<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('name')->label('Nama')->searchable(),
               TextColumn::make('email')->label('Email'),
               TextColumn::make('message')->label('Pesan')->limit(30),
               TextColumn::make('created_at')->label('Waktu')->dateTime(),
            ])
            ->actions([
                ViewAction::make()
                    ->label('Lihat Pesan')
                    ->after(function ($record) {
                        
                        $record->update(['is_read' => true]);
                    })

                    ->after(fn () => redirect(static::getUrl('index'))),
                DeleteAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }
}