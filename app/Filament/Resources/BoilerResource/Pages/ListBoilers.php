<?php

namespace App\Filament\Resources\BoilerResource\Pages;

use App\Filament\Resources\BoilerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBoilers extends ListRecords
{
    protected static string $resource = BoilerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
