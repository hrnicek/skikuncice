<?php

namespace App\Filament\Resources\Accommodations\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AccommodationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    TextInput::make('name')
                        ->label('Název')
                        ->required(),
                    Textarea::make('description')
                        ->label('Popis')
                        ->columnSpanFull(),
                ]),
            ]);
    }
}
