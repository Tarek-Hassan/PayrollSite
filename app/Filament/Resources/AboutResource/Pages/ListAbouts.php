<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;
    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }


    protected function getTitle(): string
    {
        return 'List About Us';
    }
}
