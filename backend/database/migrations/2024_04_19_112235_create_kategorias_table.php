<?php

use App\Models\kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id('id');
            $table->string('kategorianev');
            $table->timestamps();
        });

        kategoria::create([
            'kategorianev' => 'Természetvédelem'
        ]);

        kategoria::create([
            'kategorianev' => 'Sport'
        ]);

        kategoria::create([
            'kategorianev' => 'Informatika'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorias');
    }
};
