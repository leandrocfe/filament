<?php

namespace Filament\Tests\Infolists\Fixtures;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Livewire\Component;

class Livewire extends Component implements HasForms, HasInfolists
{
    use InteractsWithForms;
    use InteractsWithInfolists;

    public $data;

    public static function make(): static
    {
        return new static;
    }

    public function data($data): static
    {
        $this->data = $data;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }
}
