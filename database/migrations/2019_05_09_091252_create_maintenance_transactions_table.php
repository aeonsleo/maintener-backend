<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenanceTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('maintenance_id');
            $table->date('scheduled_date');
            $table->date('transaction_date');
            $table->float('amount', 8, 2);
            $table->timestamps();
        });

        Schema::table('maintenance_transactions', function(Blueprint $table) {
            $table->foreign('maintenance_id')->references('id')->on('maintenances')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenance_transactions');
    }
}
