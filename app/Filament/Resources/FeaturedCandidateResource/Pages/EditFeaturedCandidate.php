<?php

namespace App\Filament\Resources\FeaturedCandidateResource\Pages;

use App\Filament\Resources\FeaturedCandidateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturedCandidate extends EditRecord
{
    protected static string $resource = FeaturedCandidateResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
