<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('key')
                ->label('Nama Pengaturan')
                ->disabled()
                ->required(),

            Textarea::make('value')
                ->label('Judul Kabinet')
                ->rows(3)
                ->required(),
        ]);
    }
}