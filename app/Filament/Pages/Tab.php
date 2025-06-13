<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class Tab extends Page
{
    protected string $view = 'filament.pages.tab';

    public ?array $data = [];

    public function mount()
    {
        $this->form->fill();
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->statePath('data')
            ->components([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Tab 1')
                            ->schema([
                                TextInput::make('name_a')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Tab 2')
                            ->schema([
                                TextInput::make('email_a')
                                    ->default('first email')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Tab 3')
                            ->schema([
                                TextInput::make('car_type')
                                    ->default('car type')
                                    ->required(),
                            ]),
                    ]),
            ]);
    }

    public function create(): void
    {
        dd($this->form->getState());
    }
}
