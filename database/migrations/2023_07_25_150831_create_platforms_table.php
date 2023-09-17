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
        Schema::create('platforms', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->longText('description');
            $table->string('url');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        DB::table('platforms')->insert([
            'image'=>'/home/images/prepwise.png',
            'description'=>'Coaching for UG students who wish to pursue their higher studies in Premier Universities',
            'url'=>'/'
        ]);

        DB::table('platforms')->insert([
            'image'=>'/home/images/UG Plus.png',
            'description'=>'Coaching for UG students who wish to pursue their higher studies in Premier Universities',
            'url'=>'/'
        ]);

        DB::table('platforms')->insert([
            'image'=>'/home/images/S2IIM.png',
            'description'=>'Coaching for UG students who wish to pursue their higher studies in Premier Universities',
            'url'=>'/'
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platforms');
    }
};
