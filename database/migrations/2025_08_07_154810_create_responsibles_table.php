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
        Schema::create('responsibles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('responsible_code', 20)->unique();            
            $table->string('name');
            $table->string('identification', 16)->unique();
            $table->date('birthdate');
            $table->string('birthplace');
            $table->string('age', 3);
            $table->string('sex', 8);
            $table->string('telephone', 14)->unique();
            $table->string('email')->unique();
            $table->string('country');
            $table->string('nationality');
            $table->string('department');
            $table->string('municipality');
            $table->string('address');
            $table->string('marital_status', 15);
            $table->string('academic_level', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsibles');
    }
};
