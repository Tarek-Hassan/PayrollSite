<?php

namespace App\Filament\Resources\PartenerReviewResource\Pages;

use App\Filament\Resources\PartenerReviewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartenerReviews extends ListRecords
{
    protected static string $resource = PartenerReviewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
