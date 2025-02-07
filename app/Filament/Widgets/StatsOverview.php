<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Saldo Tabungan', 'Rp. 234.000')
                ->description('32k increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up', IconPosition::Before)
                ->color('success'),
            Stat::make('Suku Bunga', '21% p.a')
            ->description('32k increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up', IconPosition::Before)
                ->color('danger'),
            Stat::make('Pendapatan Bunga', 'Rp. 4.000'),
            Stat::make('Total Saldo : ', 'Rp. 234.000')
        ];
    }
}
