<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipment_id',
        'item_name',
        'quantity',
        'unit',
        'flight_number',
        'company_country',
    ];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
}
