<?php

namespace App\Filament\Resources\RestaurantMenus;

use App\Filament\Resources\RestaurantMenus\Pages\CreateRestaurantMenu;
use App\Filament\Resources\RestaurantMenus\Pages\EditRestaurantMenu;
use App\Filament\Resources\RestaurantMenus\Pages\ListRestaurantMenus;
use App\Filament\Resources\RestaurantMenus\Schemas\RestaurantMenuForm;
use App\Filament\Resources\RestaurantMenus\Tables\RestaurantMenusTable;
use App\Models\RestaurantMenu;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class RestaurantMenuResource extends Resource
{
    protected static ?string $model = RestaurantMenu::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Jídelní lístky';

    protected static ?string $navigationLabel = 'Lístek';

    protected static ?string $recordTitleAttribute = 'date_from';

    public static function form(Schema $schema): Schema
    {
        return RestaurantMenuForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RestaurantMenusTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRestaurantMenus::route('/'),
            'create' => CreateRestaurantMenu::route('/create'),
            'edit' => EditRestaurantMenu::route('/{record}/edit'),
        ];
    }
}
