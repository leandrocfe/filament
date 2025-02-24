<?php

namespace App\Livewire\Panels\Navigation;

use Filament\Navigation\NavigationItem;
use Filament\Pages\Page;

class BadgeTooltip extends Page
{
    protected static string $view = 'livewire.panels.navigation.empty';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make()
                    ->label('Users')
                    ->url(fn (): string => '#')
                    ->icon('heroicon-o-user-group')
                    ->badge(12)
                    ->badgeTooltip('The number of users'),
            ]);
    }
}
