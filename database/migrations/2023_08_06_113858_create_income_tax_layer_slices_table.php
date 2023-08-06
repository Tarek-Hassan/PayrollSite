<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeTaxLayerSlicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_tax_layer_slices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('income_tax_id')->unsigned()->constrained('income_taxes');
            $table->foreignId('income_tax_layer_id')->unsigned()->constrained('income_tax_layers');
            $table->string('discount_type')->comment("one_time/reccuring");
            
            $table->double('from')->default(0);
            $table->double('to')->default(0);
            $table->double('rate')->default(0);
            $table->double('discount')->default(0);

            $table->double('ratio')->default(0);
            $table->double('max_tax_value')->default(0);
            $table->double('slice_net_value')->default(0);
            $table->double('minimum_net')->default(0);
            $table->double('maximum_net')->default(0);

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
        Schema::dropIfExists('income_tax_layer_slices');
    }
}
