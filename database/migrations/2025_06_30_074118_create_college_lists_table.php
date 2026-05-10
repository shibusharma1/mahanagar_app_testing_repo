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
        Schema::create('college_lists', function (Blueprint $table) {
            $table->id();
                        $table->unsignedInteger('serial_no');
            $table->string('palika');
            $table->string('district')->default('मोरङ');
            $table->string('school_code');
            $table->string('school_name');
            $table->string('principal')->nullable();
            $table->string('contact_number')->nullable();
            $table->text('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_lists');
    }
};
