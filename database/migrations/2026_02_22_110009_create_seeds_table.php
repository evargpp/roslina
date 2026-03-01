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
        Schema::create('seeds', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->date('acquired_at')->nullable();     // data pozyskania
            $table->date('expires_at')->nullable();      // data trwałości
            $table->decimal('quantity', 10, 2)->nullable();    // ilość
            $table->text('desc')->nullable();

            $table->foreignId('unit_id')
                ->constrained('units')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('producer_id')
                ->constrained('producers')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('species_id')
                ->constrained('species')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seeds');
    }
};
