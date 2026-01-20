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
        Schema::create('managers', function (Blueprint $table) {
<<<<<<< HEAD:laravel_templates/database/migrations/2026_01_11_061308_create_managers_table.php
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
=======
           $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
>>>>>>> ab19eb0c227e9f9a050b00f24f67ca170961b5fd:example-app4/database/migrations/2026_01_11_070024_create_managers_table.php
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
