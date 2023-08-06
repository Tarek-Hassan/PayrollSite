<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('layer_types')->truncate();

        $layer_types = [
        [
            'name_ar'=>'نسبة ثابته',
            'name_en'=>'Fixed Rate',
        ],
        [
            'name_ar'=>'تصاعدية',
            'name_en'=>'Ascending Layers',
        ],
        [
            'name_ar'=>'تنازلية',
            'name_en'=>'Descending Layers',
        ],
        [
            'name_ar'=>'مختلطة',
            'name_en'=>'Mixed Layers ',
        ],

    ];

        DB::table('layer_types')->insert($layer_types);

    }
}
