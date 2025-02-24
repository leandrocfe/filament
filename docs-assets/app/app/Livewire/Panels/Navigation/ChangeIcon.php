<?php

namespace App\Livewire\Panels\Navigation;

use Filament\Navigation\NavigationItem;
use Filament\Pages\Page;

class ChangeIcon extends Page
{
    protected static string $view = 'livewire.panels.navigation.empty';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make()
                    ->label('Settings')
                    ->url(fn (): string => '#')
                    ->icon('heroicon-o-document-text'),
            ]);
    }
}
