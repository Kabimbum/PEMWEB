<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\TotalShipments;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            TotalShipments::class,
            // tambahkan widget lain kalau perlu
        ];
    }
}
