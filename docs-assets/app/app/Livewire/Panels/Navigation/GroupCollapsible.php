<?php

namespace App\Livewire\Panels\Navigation;

use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Page;

class GroupCollapsible extends Page
{
    protected static string $view = 'livewire.panels.navigation.empty';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationGroups([
                NavigationGroup::make('Settings')->collapsed(),
            ])
            ->navigationItems([
                NavigationItem::make()
                    ->label('Bank Accounts')
                    ->url(fn (): string => '#')
                    ->group('Settings')
                    ->icon('heroicon-o-currency-dollar'),
            ]);
    }
}
