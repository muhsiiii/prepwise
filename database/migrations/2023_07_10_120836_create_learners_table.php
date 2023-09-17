<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('learners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('icon');
            $table->timestamps();
        });

        DB::table('learners')->insert([
            'title'=>"4+ YEARS",
            'icon'=>"/home/images/ct.png"
        ]);

        DB::table('learners')->insert([
            'title'=>"5000+ STUDENTS",
            'icon'=>"/home/images/ab.png"
        ]);

        DB::table('learners')->insert([
            'title'=>"2500+ SUCCESS STORIES",
            'icon'=>"/home/images/cd.png"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learners');
    }
};
