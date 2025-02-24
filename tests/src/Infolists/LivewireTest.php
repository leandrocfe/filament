<?php

use Filament\Infolists;
use Filament\Tests\Infolists\Fixtures\Livewire;
use Filament\Tests\TestCase;

use function Filament\Tests\livewire;

uses(TestCase::class);

it('can evaluate livewire closure dependency by name', function () {
    livewire(TestComponentWithInfolist::class)
        ->assertOk()
        ->assertSee('First Entry Label')
        ->assertSee('First Entry State')
        ->assertSee('Second Entry Label')
        ->assertSee('Second Entry State')
        ->assertSee('Third Entry Label')
        ->assertSee('Third Entry State (dynamic)');
});

class TestComponentWithInfolist extends Livewire
{
    public function mount(): void
    {
        $this->data([
            'first_entry' => 'First Entry State',
            'second_entry' => 'Second Entry State',
        ]);
    }

    public function infolist(Infolists\Infolist $infolist): Infolists\Infolist
    {
        return $infolist
            ->state($this->data)
            ->schema(function (self $livewire) {
                expect($livewire)->toBe($this);

                return [
                    Infolists\Components\TextEntry::make('first_entry')
                        ->label('First Entry Label'),
                ];
            });
    }

    public function infolistWithCustomName(Infolists\Infolist $infolist): Infolists\Infolist
    {
        return $infolist
            ->state($this->data)
            ->schema(function (self $livewire) {
                expect($livewire)->toBe($this);

                return [
                    Infolists\Components\TextEntry::make('second_entry')
                        ->label('Second Entry Label'),
                    Infolists\Components\TextEntry::make('third_entry')
                        ->label('Third Entry Label')
                        ->getStateUsing(function (self $livewire) {
                            expect($livewire)->toBe($this);

                            return 'Third Entry State (dynamic)';
                        }),
                ];
            });
    }

    public function render(): string
    {
        return <<<'BLADE'
		{{ $this->infolist }}
		{{ $this->infolistWithCustomName }}
		BLADE;
    }
}
