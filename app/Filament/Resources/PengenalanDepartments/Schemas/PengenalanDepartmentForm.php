<?php

namespace App\Filament\Resources\PengenalanDepartments\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;

class PengenalanDepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Departemen')
                    ->required()
                    ->placeholder('Contoh: Dept. PH'),

                // Input untuk Upload Foto
                FileUpload::make('image')
                    ->label('Foto Departemen')
                    ->image() // Supaya hanya bisa upload gambar
                    ->directory('departments') // Foto akan disimpan di folder storage/app/public/departments
                    ->required()
                    ->imageEditor(),
                
                Textarea::make('content')
                    ->label('Deskripsi Department')
                    ->placeholder('Jelaskan singkat mengenai department ini...')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}