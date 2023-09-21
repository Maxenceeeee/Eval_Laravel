<?php

use App\Models\aeroports;
use App\Models\compagnies;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();

            $table->integer('numero_vol',10);
            $table->date('date_depart');
            $table->integer('heure_depart',2);
            $table->date('date_arrive');
            $table->integer('heure_arrive',2);
            $table->foreignIdFor(compagnies::class)->constrained();
            $table->foreignIdFor(aeroports::class)->constrained();
            $table->foreignIdFor(aeroports::class)->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vols');
    }
}
