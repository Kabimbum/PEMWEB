<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shipment;

class ShipmentSeeder extends Seeder
{
    public function run(): void
    {
        Shipment::create([
            'company_name' => 'Garuda Express',
            'company_contact' => '08123456789',
            'type' => 'IMPORT',
            'flight_number' => 'GA123',
            'departure_country' => 'Singapore',
            'arrival_country' => 'Indonesia',
            'airlines' => 'Garuda Indonesia',
            'status' => 'approved',
        ]);

        Shipment::create([
            'company_name' => 'Lion Export Ltd',
            'company_contact' => '08234567890',
            'type' => 'EXPORT',
            'flight_number' => 'LN987',
            'departure_country' => 'Indonesia',
            'arrival_country' => 'Malaysia',
            'airlines' => 'Lion Air',
            'status' => 'pending',
        ]);
    }
}
