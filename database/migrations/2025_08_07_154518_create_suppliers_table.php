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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier_code', 20)->unique();
            $table->string('company');
            $table->string('representative');
            $table->string('telephone', 14)->unique();
            $table->string('email', 255)->unique();
            $table->text('address');

            $table->integer('type_supplier_id')->unsigned();
            $table->foreign('type_supplier_id')->references('id')->on('type_suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
