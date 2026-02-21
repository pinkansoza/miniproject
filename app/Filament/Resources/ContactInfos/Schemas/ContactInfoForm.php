<?php

namespace App\Filament\Resources\ContactInfos\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ContactInfoForm
{
    public static function configure(Schema $schema): Schema 
    {
        return 
            $schema->components([
                TextInput::make('type')->required(),
                TextInput::make('icon')->required()->helperText('Contoh: fas fa-envelope'),
                Textarea::make('value')->required(),
        ]);
    }
}