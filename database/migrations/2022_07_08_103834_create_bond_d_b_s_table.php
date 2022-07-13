<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBondDBSTable extends Migration
{
    public function up()
    {
        Schema::create('bond_d_b_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bond_id')->constrained('api_d_b_s');
            $table->timestamp('sale_date')->default(date('Y-m-d', strtotime('now')));
            $table->integer('bond_count')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('bond_d_b_s');
    }
}
