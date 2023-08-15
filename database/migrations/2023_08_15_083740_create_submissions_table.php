<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id');
            $table->foreignId('item_set_id');
            $table->foreignId('item_id');
            $table->integer('quantity');
            $table->enum('keterangan', ['lengkap', 'tidak lengkap']);
            $table->string('user_mernyerahkan_alat_kotor');
            $table->string('user_menerima_alat_kotor');
            $table->string('user_mernyerahkan_alat_steril');
            $table->string('user_menerima_alat_steril');
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
        Schema::dropIfExists('submissions');
    }
}
