<?php

namespace App\Filament\Resources\Forms\Schemas;

use Filament\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use LaraZeus\Bolt\Facades\Bolt;

class FormForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('name')
                    ->required()
                    ->columnSpanFull(),

                Repeater::make('sections')
                    ->hiddenLabel()
                    ->schema([
                        Textarea::make('name')
                    ])
                    ->relationship()
                    ->columnSpanFull()
                    ->grid(3),
            ]);
    }
}
