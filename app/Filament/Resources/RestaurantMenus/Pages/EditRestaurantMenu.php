<?php

namespace App\Filament\Resources\RestaurantMenus\Pages;

use App\Filament\Resources\RestaurantMenus\RestaurantMenuResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRestaurantMenu extends EditRecord
{
    protected static string $resource = RestaurantMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
