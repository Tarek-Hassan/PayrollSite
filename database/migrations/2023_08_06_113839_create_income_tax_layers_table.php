<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeTaxLayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_tax_layers', function (Blueprint $table) {
            $table->id();
            $table->double('min')->default(0);
            $table->double('max')->default(0);
            $table->double('net_min')->default(0);
            $table->double('net_max')->default(0);
            $table->foreignId('layer_type_id')->unsigned()->constrained('layer_types');
            $table->foreignId('income_tax_id')->unsigned()->constrained('income_taxes');
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
        Schema::dropIfExists('income_tax_layers');
    }
}
