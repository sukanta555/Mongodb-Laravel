<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('mongodb')->create('employees', function (Blueprint $collection) {
            $collection->index('_id');
            $collection->string('name');
            $collection->string('email');
            $collection->string('phone');
            $collection->date('date_of_birth');
            $collection->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mongodb')->dropIfExists('employees');
    }
};
