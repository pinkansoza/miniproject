<?php

namespace App\Filament\Resources\LinkServices\Pages;

use App\Filament\Resources\LinkServices\LinkServiceResource;
use Filament\Resources\Pages\EditRecord;

class EditLinkService extends EditRecord
{
    protected static string $resource = LinkServiceResource::class;

    // Fungsi agar setelah klik 'Save', kembali ke tabel utama
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}