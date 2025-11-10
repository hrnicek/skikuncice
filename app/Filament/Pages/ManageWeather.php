<?php

namespace App\Filament\Pages;

use App\Settings\WeatherSettings;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageWeather extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Stav sjezdovek';

    protected static ?string $title = 'Stav sjezdovek';

    protected static string $settings = WeatherSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    TextInput::make('piste_snow_depth_cm')
                        ->label('Hloubka sníhu na sjezdovkách (cm)')
                        ->required(),
                    TextInput::make('off_piste_snow_depth_cm')
                        ->label('Hloubka sníhu mimo sjezdovky (cm)')
                        ->required(),
                    TextInput::make('new_snowfall_cm')
                        ->label('Nový sníh (za posledních 24 hodin) (cm)')
                        ->required(),
                    Toggle::make('show_stats')
                        ->label('Zobrazit stav sjezdovek')
                        ->required(),
                ]),
            ]);
    }
}
