<?php

namespace App\Livewire\Panels\Navigation;

use Filament\Navigation\NavigationItem;
use Filament\Pages\Page;

class SidebarCollapsibleOnDesktop extends Page
{
    protected static string $view = 'livewire.panels.navigation.empty';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make()
                    ->label('Products')
                    ->sort(2)
                    ->icon('heroicon-o-document-text')
                    ->url(fn (): string => '#'),
            ])
            ->sidebarCollapsibleOnDesktop();
    }
}
