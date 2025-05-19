<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class TotalShipments extends Widget
{
    protected static string $view = 'filament.widgets.total-shipments';

    public $totalShipments;

    public function mount()
    {
        $this->totalShipments = \App\Models\Shipment::count();
    }
}
