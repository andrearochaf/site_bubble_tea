<?php

use App\Models\Command;
use App\Models\Tea;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandHasTeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_has_teas', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->ForeignIdfor(Command::class);
            $table->ForeignIdfor(Tea::class);
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
        Schema::dropIfExists('command_has_teas');
    }
}
