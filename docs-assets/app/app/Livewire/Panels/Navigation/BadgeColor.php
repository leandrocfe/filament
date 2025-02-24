<?php

namespace App\Livewire\Panels\Navigation;

use Filament\Navigation\NavigationItem;
use Filament\Pages\Page;
use Filament\Support\Colors\Color;

class BadgeColor extends Page
{
    protected static string $view = 'livewire.panels.navigation.empty';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make()
                    ->label('Orders')
                    ->url(fn (): string => '#')
                    ->icon('heroicon-o-shopping-cart')
                    ->badge(32, Color::Red),
            ]);
    }
}
