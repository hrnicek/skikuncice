<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filamerce\FilamentTranslatable\Forms\Component\Translations;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()->schema([
                    Translations::make('translations_general')
                        ->vertical()
                        ->schema([
                            TextInput::make('title')
                                ->label('Titulek')
                                ->requiredDefaultLocale(),
                            Textarea::make('content')
                                ->label('Obsah')
                                ->rows(5)
                                ->requiredDefaultLocale()
                                ->columnSpanFull(),
                        ])->columnSpan(2),
                    
                    Section::make()->schema([
                        DateTimePicker::make('published_at')
                            ->label('Datum publikování'),
                        Toggle::make('is_published')
                            ->label('Publikováno')
                            ->required(),
                    ])->columnSpan(1),
                ])
                 ->columnSpanFull()
            ]);
    }
}
