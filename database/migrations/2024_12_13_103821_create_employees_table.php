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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email');
            $table->String('phone')->default('NULL');
            $table->string('image')->default('NULL');
            $table->String('gender');
            $table->String('address');
            $table->String('designation');
            $table->String('skills');
            $table->Decimal('salary',18,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
