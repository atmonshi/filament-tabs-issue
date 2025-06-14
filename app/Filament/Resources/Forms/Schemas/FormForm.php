<?php

namespace App\Filament\Resources\Forms\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FormForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->columnSpanFull(),

                Repeater::make('sections')
                    ->hiddenLabel()
                    ->schema([
                        TextInput::make('name'),

                        Repeater::make('fields')
                            ->hiddenLabel()
                            ->grid()
                            ->schema([
                                TextInput::make('name')
                            ])
                            ->relationship()
                            ->columnSpanFull(),
                    ])
                    ->relationship()
                    ->columnSpanFull(),
            ]);
    }
}
