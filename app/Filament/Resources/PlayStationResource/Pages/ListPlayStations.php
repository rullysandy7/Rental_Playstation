<?php

namespace App\Filament\Resources\PlayStationResource\Pages;

use App\Filament\Resources\PlayStationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayStations extends ListRecords
{
    protected static string $resource = PlayStationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
