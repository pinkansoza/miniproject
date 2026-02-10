<?php

namespace App\Filament\Resources\Contacts\Pages;

use App\Filament\Resources\Contacts\ContactResource;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    // Di App\Filament\Resources\Contacts\Pages\ListContacts.php
protected function getHeaderActions(): array
{
    return [
        \Filament\Actions\Action::make('markAllAsRead')
            ->label('Tandai Semua Dibaca')
            ->color('gray')
            ->icon('heroicon-m-check-badge')
            ->action(function () {
                // Update semua yang is_read-nya masih false (0)
                \App\Models\Contact::where('is_read', false)->update(['is_read' => true]);
                
                // Notifikasi sukses
                \Filament\Notifications\Notification::make()
                    ->title('Semua pesan ditandai dibaca')
                    ->success()
                    ->send();

                // PENTING: Refresh halaman agar badge sidebar ikut update
                return redirect(static::getResource()::getUrl('index'));
            }),
    ];
}
}