<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                DateTimePicker::make('date_from')
                    ->required(),
                DateTimePicker::make('date_to')
                    ->required(),
                Toggle::make('published')
                    ->required(),
                Textarea::make('note')
                    ->columnSpanFull(),
            ]);
    }
}
