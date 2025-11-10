<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filamerce\FilamentTranslatable\Forms\Component\Translations;

class PostForm
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
                                ->requiredDefaultLocale()
                                ->maxLength(255)
                                ->label('Titulek'),
                            RichEditor::make('content')
                                ->label('Obsah')
                                ->requiredDefaultLocale()
                                ->columnSpanFull(),
                        ])->columnSpan(2),

                    Section::make()->schema([
                        DateTimePicker::make('published_at')
                            ->label('Datum publikování')
                            ->displayFormat('d.m.Y H:i')
                            ->required(),
                    ])->columnSpan(1),

                ])
                    ->columnSpanFull()
                    ->columns(2),
            ]);
    }
}
