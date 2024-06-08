<?php

namespace App\Filament\Widgets;

use App\Models\Cuenta;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CuentasOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cuentas Activas', Cuenta::query()->where('estado', true)->count()),
            Stat::make('Cuentas Inactivas', Cuenta::query()->where('estado', false)->count()),
        ];
    }
}
