<?php

namespace App\Console\Commands;

use App\Models\IncomeTax;
use App\Models\IncomeTaxLayer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\IncomeTaxLayerSlice;

class UpdateIncomeTax extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:income-tax';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update IncomeTax with the Active IncomeTax in the API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $url = 'http://185.227.111.191:8085/api/income-taxSite';
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', $url);
            $data = json_decode($response->getBody()->getContents(), true);

            if (empty($data)) {
                return $this->error('The API response is empty.');
                }
                    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                    IncomeTax::truncate();
                    IncomeTaxLayer::truncate();
                    IncomeTaxLayerSlice::truncate();
                    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
                    $incomeTax = IncomeTax::create($data);
                    foreach($data['layers'] as $layers) {
                        $layer = $incomeTax->incomeTaxLayer()->create($layers);
                        array_walk($layers['slices'], function (&$slice) use ($incomeTax) {
                            $slice['income_tax_id'] = $incomeTax->id;
                        });
                        $layer->incomeTaxLayerSlice()->createMany($layers['slices']);
                    }
                    return $this->info('Income Tax Updated Successfully ');
                } catch (\Exception $e) {
                return $this->error('An error occurred while connecting to the API.');
        }
    }
}
