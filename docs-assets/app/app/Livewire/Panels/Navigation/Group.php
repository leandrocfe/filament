<?php

namespace App\Livewire\Panels\Navigation;

use Filament\Navigation\NavigationItem;
use Filament\Pages\Page;

class Group extends Page
{
    protected static string $view = 'livewire.panels.navigation.empty';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make()
                    ->label('Bank Accounts')
                    ->url(fn (): string => '#')
                    ->group('Settings')
                    ->icon('heroicon-o-currency-dollar'),
            ]);
    }
}
