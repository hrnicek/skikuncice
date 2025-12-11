<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filamerce\FilamentTranslatable\Forms\Component\Translations;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()->schema([
                    Translations::make('translations')
                        ->vertical()
                        ->schema([
                            TextInput::make('title')
                                ->label('Titulek')
                                ->requiredDefaultLocale(),
                            RichEditor::make('content')
                                ->label('Obsah')
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
