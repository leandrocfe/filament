<?php

namespace App\Livewire\Panels\Navigation;

use Filament\Navigation\MenuItem;
use Filament\Pages\Page;

class UserMenuCustomization extends Page
{
    protected static string $view = 'livewire.panels.navigation.empty';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->userMenuItems([
                MenuItem::make()
                    ->label('Settings')
                    ->url(fn (): string => '#')
                    ->icon('heroicon-o-cog-6-tooth'),
            ]);
    }
}
