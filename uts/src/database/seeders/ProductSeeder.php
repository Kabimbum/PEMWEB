<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Shipment;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $shipments = Shipment::all();

        if ($shipments->isEmpty()) {
            $this->command->warn('No shipments found. Please run ShipmentSeeder first.');
            return;
        }

        foreach ($shipments as $shipment) {
            Product::create([
                'shipment_id' => $shipment->id,
                'item_name' => 'Elektronik',
                'quantity' => 100,
                'unit' => 'pcs',
                'flight_number' => $shipment->flight_number,
                'company_country' => $shipment->departure_country,
            ]);

            Product::create([
                'shipment_id' => $shipment->id,
                'item_name' => 'Dokumen',
                'quantity' => 50,
                'unit' => 'kg',
                'flight_number' => $shipment->flight_number,
                'company_country' => $shipment->departure_country,
            ]);
        }
    }
}
