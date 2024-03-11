<?php

namespace App\Filament\Resources\FaqResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\FaqResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateFaq extends CreateRecord
{
    protected static string $resource = FaqResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('FAQ created')
            ->body('FAQ  has been created successfully.');
    }

}
