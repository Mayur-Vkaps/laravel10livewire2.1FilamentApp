<?php

namespace App\Filament\Resources\MemberResource\Pages;

use Filament\Pages\Actions;
use Filament\Notifications\Notification;
use App\Filament\Resources\MemberResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Member created')
            ->body('Member  has been created successfully.');
    }
}
