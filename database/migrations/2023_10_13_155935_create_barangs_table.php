<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->unsigned()->nullable();
            $table->foreignId('satuan')->unsigned()->nullable();

            $table->string('image')->nullable();
            $table->string('kode')->unique();
            $table->string('nama');
            $table->integer('stok')->default(0);
            $table->integer('stok_minimal')->default(0);
            
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('set null');
            $table->foreign('satuan')->references('id')->on('satuans')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
