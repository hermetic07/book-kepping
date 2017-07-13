<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Account;
class CreateAccounttitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('accounts', function (Blueprint $table) {
          $table->increments('id');
          $table->string("account_name");
          $table->string("normal_balance");
          $table->timestamps();
      });

      Account::create([
          'account_name' => 'cash',
          'normal_balance' => 'debit',
      ]);
      Account::create([
          'account_name' => 'equipment',
          'normal_balance' => 'debit',
      ]);
      Account::create([
          'account_name' => 'accounts receivable',
          'normal_balance' => 'debit',
      ]);
      Account::create([
          'account_name' => 'supplies',
          'normal_balance' => 'debit',
      ]);
      Account::create([
          'account_name' => 'expense',
          'normal_balance' => 'debit',
      ]);
      Account::create([
          'account_name' => 'accounts payable',
          'normal_balance' => 'credit',
      ]);
      Account::create([
          'account_name' => 'salaries payable',
          'normal_balance' => 'credit',
      ]);
      Account::create([
          'account_name' => 'notes payable',
          'normal_balance' => 'credit',
      ]);
      Account::create([
          'account_name' => 'capital',
          'normal_balance' => 'credit',
      ]);
      Account::create([
          'account_name' => 'withdrawal',
          'normal_balance' => 'credit',
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
