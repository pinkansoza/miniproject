<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Input untuk Nama Departemen (Contoh: Dept. PH)
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
                    ->imageEditor(), // Opsional: Supaya admin bisa potong/crop foto
            ]);
    }
}