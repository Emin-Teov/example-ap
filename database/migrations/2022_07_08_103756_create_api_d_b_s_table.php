<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateApiDBSTable extends Migration
{
    public function up()
    {
        Schema::create('api_d_b_s', function (Blueprint $table) {
            $table->id();
            $table->timestamp('emission_date')->default(date('Y-m-d', strtotime('now')));
            $table->timestamp('last_cycle_date')->default(date('Y-m-d', strtotime('+1 years')));
            $table->float('nominal_value');
            $table->integer('pay_period');
            $table->integer('per_period');
            $table->integer('per');
        });
    }

    public function down()
    {
        Schema::dropIfExists('api_d_b_s');
    }
}
