<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing id column
            $table->string('name'); // This will create a VARCHAR(255) column
            $table->string('email')->unique(); // This will create a VARCHAR(255) column and ensure email uniqueness
            $table->string('phone', 20); // This will create a VARCHAR(20) column
            $table->text('address')->nullable(); // This will create a TEXT column
            $table->text('message')->nullable(); // This will create a TEXT column
            $table->boolean('privacy_policy'); // This will create a BOOLEAN column
            $table->timestamps(); //
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}; 