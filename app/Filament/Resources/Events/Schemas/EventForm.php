<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Titulek')
                        ->required(),
                    Textarea::make('perex')
                        ->label('Perex')
                        ->required()
                        ->columnSpanFull(),
                    DateTimePicker::make('date_from')
                        ->label('Datum od')
                        ->required(),
                    DateTimePicker::make('date_to')
                        ->label('Datum do')
                        ->required(),
                    Toggle::make('show_time')
                        ->label('Zobrazit čas')
                        ->required(),
                    RichEditor::make('content')
                        ->label('Obsah')
                        ->required()
                        ->columnSpanFull(),
                    Toggle::make('published')
                        ->label('Publikováno')
                        ->required(),
                    Textarea::make('note')
                        ->label('Poznámka')
                        ->columnSpanFull(),
                ]),

            ]);
    }
}
