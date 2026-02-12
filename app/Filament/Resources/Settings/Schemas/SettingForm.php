<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        // Gunakan $schema->components sesuai pola PengenalanDepartmentForm
        return $schema->components([
            TextInput::make('key')
                ->label('Key Pengaturan')
                ->disabled() // Agar key 'org_title' tidak diubah manual
                ->required(),

            Textarea::make('value')
                ->label('Isi Pengaturan')
                ->placeholder('Masukkan judul atau isi pengaturan di sini...')
                ->required()
                ->rows(3),
        ]);
    }
}