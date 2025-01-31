<?php

namespace App\Livewire;

use Filament\Navigation\MenuItem;
use Filament\Pages\Page;

class Topbar extends Page
{
    protected static string $view = 'livewire.topbar';

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
