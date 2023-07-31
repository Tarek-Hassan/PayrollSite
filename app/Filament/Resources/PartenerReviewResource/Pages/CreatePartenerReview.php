<?php

namespace App\Filament\Resources\PartenerReviewResource\Pages;

use App\Filament\Resources\PartenerReviewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePartenerReview extends CreateRecord
{
    protected static string $resource = PartenerReviewResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
