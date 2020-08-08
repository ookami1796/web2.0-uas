<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGadgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gadgets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('merk');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('seller')->nullable();
            $table->string('cover')->nullable();
            $table->float('price')->unsigned()->default(0);
            $table->integer('stock')->unsigned()->default(0);
            $table->enum('status', ['PUBLISH', 'DRAFT'])->default('PUBLISH');
            $table->timestamps(); // created_at, updated_at
            $table->softDeletes(); // deleted_at
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gadgets');
    }
}
