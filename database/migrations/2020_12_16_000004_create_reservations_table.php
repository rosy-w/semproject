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
            $table->string('name', 45)->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('message', 45)->nullable();
            $table->dateTime('date_time')->nullable();
            $table->integer('user_id');

            $table->index(["user_id"], 'FK_ReservationUser_idx');


            $table->foreign('user_id', 'FK_ReservationUser_idx')
                ->references('user_id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
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
