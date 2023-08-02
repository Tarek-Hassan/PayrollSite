<?php

namespace App\Filament\Resources\FeaturedCandidateResource\Pages;

use App\Filament\Resources\FeaturedCandidateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturedCandidates extends ListRecords
{
    protected static string $resource = FeaturedCandidateResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
