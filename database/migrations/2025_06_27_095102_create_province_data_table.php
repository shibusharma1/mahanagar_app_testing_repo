<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
Schema::create('province_data', function (Blueprint $table) {
    $table->string('state_code', 10);
    $table->string('state_name', 100);
    $table->string('state_name_nep', 100);
    $table->string('district_code', 50)->nullable();
    $table->string('district_name', 200)->nullable();
    $table->string('district_name_nep', 200)->nullable();
    $table->string('local_body_code', 10)->nullable();
    $table->string('local_body_name', 100)->nullable();
    $table->string('local_body_name_nep', 256)->nullable();
    $table->integer('local_body_type_id')->nullable();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('province_data');
    }
};
