<?php

namespace App\Filament\Pages;

use App\Settings\WebcamSettings;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Grid;
use BackedEnum;

class ManageWebcams extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-video-camera';

    protected static ?string $navigationLabel = 'Webkamery';

    protected static ?string $title = 'Nastavení webkamer';

    protected static string $settings = WebcamSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)
                    ->schema([
                        Section::make('Webkamera 1')
                            ->columnSpan(1)
                            ->schema([
                                Toggle::make('webcam1_active')
                                    ->label('Aktivní'),
                                TextInput::make('webcam1_name')
                                    ->label('Název')
                                    ->placeholder('Např. Areál'),
                                TextInput::make('webcam1_url')
                                    ->label('URL adresa')
                                    ->url()
                                    ->placeholder('https://...'),
                            ]),
                        Section::make('Webkamera 2')
                            ->columnSpan(1)
                            ->schema([
                                Toggle::make('webcam2_active')
                                    ->label('Aktivní'),
                                TextInput::make('webcam2_name')
                                    ->label('Název'),
                                TextInput::make('webcam2_url')
                                    ->label('URL adresa')
                                    ->url(),
                            ]),
                        Section::make('Webkamera 3')
                            ->columnSpan(1)
                            ->schema([
                                Toggle::make('webcam3_active')
                                    ->label('Aktivní'),
                                TextInput::make('webcam3_name')
                                    ->label('Název'),
                                TextInput::make('webcam3_url')
                                    ->label('URL adresa')
                                    ->url(),
                            ]),
                        Section::make('Webkamera 4')
                            ->columnSpan(1)
                            ->schema([
                                Toggle::make('webcam4_active')
                                    ->label('Aktivní'),
                                TextInput::make('webcam4_name')
                                    ->label('Název'),
                                TextInput::make('webcam4_url')
                                    ->label('URL adresa')
                                    ->url(),
                            ]),
                    ]),
            ]);
    }
}
