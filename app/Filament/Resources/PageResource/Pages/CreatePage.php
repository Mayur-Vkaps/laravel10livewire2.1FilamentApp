<?php

namespace App\Filament\Resources\PageResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\PageResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Page created')
            ->body('Page  has been created successfully.');
    }
}
