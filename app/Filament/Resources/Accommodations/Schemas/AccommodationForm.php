<?php

namespace App\Filament\Resources\Accommodations\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filamerce\FilamentTranslatable\Forms\Component\Translations;

class AccommodationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                    Section::make()->schema([
                    Translations::make('translations')
                       ->schema([
                        TextInput::make('name')
                            ->label('Název'),
                        RichEditor::make('content')
                            ->label('Popis')
                            ->columnSpanFull(),
                    ]),
                ]),
                Section::make('Kontakty a dostupnost')->schema([
                    TextInput::make('address')
                        ->label('Adresa')
                        ->columnSpanFull(),
                    TextInput::make('email')
                        ->label('Email')
                        ->email(),
                    TextInput::make('phone')
                        ->label('Telefon')
                        ->tel(),
                    TextInput::make('phone2')
                        ->label('Telefon 2')
                        ->tel(),
                    TextInput::make('website')
                        ->label('Web')
                        ->url(),
                    Toggle::make('is_available')
                        ->label('Dostupné'),
                ]),
                Section::make('Média')->schema([
                    SpatieMediaLibraryFileUpload::make('image')
                        ->label('Náhledový obrázek')
                        ->disk('public')
                        ->preserveFilenames()
                        ->downloadable()
                        ->collection('image'),
                     SpatieMediaLibraryFileUpload::make('images')
                        ->label('Náhledový obrázek')
                        ->disk('public')
                        ->preserveFilenames()
                        ->downloadable()
                        ->collection('images'),
                    
                ]),
            ]);
    }
}
