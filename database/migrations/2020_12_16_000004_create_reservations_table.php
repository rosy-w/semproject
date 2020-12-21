<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reservations';

    /**
     * Run the migrations.
     * @table reservations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('reservation_id');
            $table->string('name', 45);
            $table->string('phone', 45);
            $table->integer('people')->nullable();
            $table->string('message', 255)->nullable();
            $table->string('email', 45)->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->integer('user_id');
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
       Schema::dropIfExists($this->tableName);
     }
}
