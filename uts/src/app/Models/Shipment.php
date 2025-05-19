<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_contact',
        'type',
        'flight_number',
        'departure_country',
        'arrival_country',
        'airlines',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(product::class);
    }
}
