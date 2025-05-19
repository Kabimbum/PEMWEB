<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_contact')->nullable();
            $table->enum('type', ['IMPORT', 'EXPORT']);
            $table->string('flight_number');
            $table->string('departure_country'); // negara keberangkatan
            $table->string('arrival_country');   // negara tujuan
            $table->string('airlines');          // maskapai penerbangan
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
}
