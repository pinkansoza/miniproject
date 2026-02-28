<?php

namespace App\Filament\Resources\Ldjs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;


class LdjForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
            TextInput::make('nama_jurusan')
                ->required()
                ->label('Nama Lembaga Dakwah Jurusan'),

            FileUpload::make('logo')
                ->label('Upload Logo')
                ->image()
                ->required()
                ->directory('ldj-logos'),

            Textarea::make('deskripsi')
                ->label('Deskripsi LDJ')
                ->placeholder('Jelaskan singkat mengenai LDJ ini...')
                ->required()
                ->rows(5),

            TextInput::make('instagram_link')
                ->url()
                ->required()
                ->label('Link Instagram'),
        ]);
    }
}
