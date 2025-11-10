<?php

namespace App\Filament\Resources\RestaurantMenus\Pages;

use App\Filament\Resources\RestaurantMenus\RestaurantMenuResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRestaurantMenus extends ListRecords
{
    protected static string $resource = RestaurantMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
