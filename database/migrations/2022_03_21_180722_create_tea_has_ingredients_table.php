<?php

use App\Models\Tea;
use App\Models\Ingredient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeaHasIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tea_has_ingredients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Tea::class);
            $table->foreignIdFor(Ingredient::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tea_has_ingredients');
    }
}
