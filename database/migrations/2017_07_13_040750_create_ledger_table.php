<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLedgerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ledger', function (Blueprint $table) {
          $table->increments('id');
          $table->text("ledger_id");
          $table->text("title");
          $table->text("description")->nullable();
          $table->float("amount");
          $table->text("debcred");
          $table->text("normal_balance")->nullable();
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
        //
    }
}
