<?php

namespace App\Filament\Resources\PartenerReviewResource\Pages;

use App\Filament\Resources\PartenerReviewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartenerReview extends EditRecord
{
    protected static string $resource = PartenerReviewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
