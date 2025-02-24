<?php

use App\Livewire\ActionsDemo;
use App\Livewire\Forms\FieldsDemo;
use App\Livewire\Forms\GettingStartedDemo;
use App\Livewire\Forms\LayoutDemo as FormsLayoutDemo;
use App\Livewire\Infolists\EntriesDemo;
use App\Livewire\Infolists\LayoutDemo as InfolistsLayoutDemo;
use App\Livewire\NotificationsDemo;
use App\Livewire\Panels\Navigation\ActiveIcon;
use App\Livewire\Panels\Navigation\Badge;
use App\Livewire\Panels\Navigation\BadgeColor;
use App\Livewire\Panels\Navigation\BadgeTooltip;
use App\Livewire\Panels\Navigation\ChangeIcon;
use App\Livewire\Panels\Navigation\CustomItems;
use App\Livewire\Panels\Navigation\DisabledNavigation;
use App\Livewire\Panels\Navigation\Group;
use App\Livewire\Panels\Navigation\GroupCollapsible;
use App\Livewire\Panels\Navigation\GroupNotCollapsible;
use App\Livewire\Panels\Navigation\SidebarCollapsibleOnDesktop;
use App\Livewire\Panels\Navigation\SidebarFullyCollapsibleOnDesktop;
use App\Livewire\Panels\Navigation\SortItems;
use App\Livewire\Panels\Navigation\TopNavigation;
use App\Livewire\Panels\Navigation\UserMenuCustomization;
use App\Livewire\TablesDemo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/actions', ActionsDemo::class);
Route::get('/notifications', NotificationsDemo::class);
Route::get('/tables', TablesDemo::class);

Route::group(['prefix' => 'forms'], function () {
    Route::get('fields', FieldsDemo::class);
    Route::get('getting-started', GettingStartedDemo::class);
    Route::get('layout', FormsLayoutDemo::class);
});

Route::prefix('infolists')->group(function () {
    Route::get('entries', EntriesDemo::class);
    Route::get('layout', InfolistsLayoutDemo::class);
});

Route::prefix('panels')->group(function () {
    Route::prefix('navigation')->group(function () {
        Route::get('user-menu-customization', UserMenuCustomization::class);
        Route::get('disabled-navigation', DisabledNavigation::class);
        Route::get('active-icon', ActiveIcon::class);
        Route::get('change-icon', ChangeIcon::class);
        Route::get('sort-items', SortItems::class);
        Route::get('custom-items', CustomItems::class);
        Route::get('top-navigation', TopNavigation::class);
        Route::get('sidebar-collapsible-on-desktop', SidebarCollapsibleOnDesktop::class);
        Route::get('sidebar-fully-collapsible-on-desktop', SidebarFullyCollapsibleOnDesktop::class);
        Route::get('badge', Badge::class);
        Route::get('badge-color', BadgeColor::class);
        Route::get('badge-tooltip', BadgeTooltip::class);
        Route::get('group', Group::class);
        Route::get('group-collapsible', GroupCollapsible::class);
        Route::get('group-not-collapsible', GroupNotCollapsible::class);
    });
});
