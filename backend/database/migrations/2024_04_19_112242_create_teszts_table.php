<?php

use App\Models\teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id('id');
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->integer('helyes');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });

        teszt::create([
            'kerdes' => 'blabla',
            'v1' => 'bla1',
            'v2' => 'bla2',
            'v3' => 'bla3',
            'v4' => 'bla4',
            'helyes' => 1,
            'kategoriaId' => 1
        ]);

        teszt::create([
            'kerdes' => 'blabla2',
            'v1' => 'bla1',
            'v2' => 'bla2',
            'v3' => 'bla3',
            'v4' => 'bla4',
            'helyes' => 3,
            'kategoriaId' => 2
        ]);

        teszt::create([
            'kerdes' => 'blabla3',
            'v1' => 'bla1',
            'v2' => 'bla2',
            'v3' => 'bla3',
            'v4' => 'bla4',
            'helyes' => 4,
            'kategoriaId' => 3
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
