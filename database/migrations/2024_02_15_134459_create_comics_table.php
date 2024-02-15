<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('name',60)->unique();
            $table->date('publication_date');
            $table->decimal('price');
            $table->boolean('avaible')->default(true);
            $table->string('img')->default('https://tse2.mm.bing.net/th?id=OIP.k_Tpsn8ljznLcJVwn0-ipAHaDt&pid=Api&P=0&h=180');

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
        Schema::dropIfExists('comics');
    }
};
