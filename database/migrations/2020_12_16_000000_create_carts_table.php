<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'carts';

    /**
     * Run the migrations.
     * @table carts
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cart_id');
            $table->integer('user_id');
            $table->integer('total_amount');
            $table->timestamps();

            $table->primary(['cart_id', 'food_id']);
        
        });
        Schema::create('cart_item', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('cart_id');
            $table->integer('item_id');
            $table->integer('quantity')->nullable();
            $table->integer('total_price')->nullable();
            $table->timestamps();
            $table->primary(['cart_id','item_id']);
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
       Schema::dropIfExists('cart_item');
     }
}
