<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Titulek')
                        ->required(),
                    RichEditor::make('content')
                        ->label('Obsah')
                        ->required()
                        ->columnSpanFull(),
                    DateTimePicker::make('published_at')
                        ->label('Datum publikování')
                        ->displayFormat('d.m.Y H:i')
                        ->required(),
                ])
                    ->columns(3),
            ]);
    }
}
