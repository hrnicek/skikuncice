<?php

namespace App\Filament\Resources\RestaurantMenus\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class RestaurantMenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Základní informace')
                    ->schema([
                        Select::make('type')
                            ->label('Typ')
                            ->options([
                                'food' => 'Jídelní lístek',
                                'drinks' => 'Nápojový lístek',
                            ])
                            ->required(),
                        DatePicker::make('from_date')
                            ->label('Platné od')
                            ->default(now()->next('Monday'))
                            ->required(),
                        DatePicker::make('to_date')
                            ->label('Platné do')
                            ->default(now()->next('Monday')->endOfWeek())
                            ->required(),
                        Toggle::make('is_published')
                            ->label('Publikováno')
                            ->default(true),
                    ]),
                Section::make('Soubory jídelního lístku')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('food')
                            ->label('Jídelní lístek - jídlo')
                            ->required()
                            ->downloadable()
                            ->disk('public')
                            ->collection('files'),
                    ]),
            ]);
    }
}
