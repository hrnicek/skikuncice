<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Jméno')
                    ->required(),
                TextInput::make('email')
                    ->label('Emailová adresa')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->label('Heslo')
                    ->password()
                    ->required(),
            ]);
    }
}
