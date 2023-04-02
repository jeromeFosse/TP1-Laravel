<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Etudiant;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ville_id')->constrained();
            $table->string('nom');
            $table->string('addresse');
            $table->string('telephone');
            $table->string('courriel')->unique();
            $table->date('date_naissance');
            $table->timestamps();
        });

        Etudiant::factory()->count(100)->create();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
