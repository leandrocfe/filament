<?php

namespace App\Livewire\Panels\Navigation;

use Filament\Pages\Page;

class DisabledNavigation extends Page
{
    protected static string $view = 'livewire.panels.navigation.empty';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigation(false);
    }
}
