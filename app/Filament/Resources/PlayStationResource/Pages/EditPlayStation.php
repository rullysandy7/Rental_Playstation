<?php

namespace App\Filament\Resources\PlayStationResource\Pages;

use App\Filament\Resources\PlayStationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlayStation extends EditRecord
{
    protected static string $resource = PlayStationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
