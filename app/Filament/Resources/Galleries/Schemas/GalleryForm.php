<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Foto')
                    ->required(),

                FileUpload::make('image')
                    ->label('Pilih Foto')
                    ->image()
                    ->directory('galeri-fmi') // <--- Pastikan baris ini ada!
                    ->required(),

                // ... kode lainnya tetap sama

                Textarea::make('description')
                    ->label('Tambahkan Link Google Drive')
                    ->columnSpanFull()
                    ->required(),


                DatePicker::make('date_of_event')
                    ->label('Tanggal Kegiatan')
                    ->native(false)
                    ->displayFormat('d M Y')
                    ->required(),
            ]);
    }
}