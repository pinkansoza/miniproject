<?php

namespace App\Filament\Resources\LinkServices\Pages;

use App\Filament\Resources\LinkServices\LinkServiceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLinkService extends CreateRecord
{
    protected static string $resource = LinkServiceResource::class;

    // Fungsi agar setelah klik 'Create', kembali ke tabel utama
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}