<?php

namespace App\Filament\Resources\PengenalanDepartments\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class PengenalanDepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Departemen')
                    ->required()
                    ->placeholder('Contoh: Pengurus Harian'),

                FileUpload::make('image')
                    ->label('Foto Departemen')
                    ->image()
                    ->directory('departments')
                    ->required()
                    ->imageEditor(),
                
                Textarea::make('description')
                    ->label('Deskripsi Department')
                    ->placeholder('Jelaskan singkat mengenai department ini...')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}