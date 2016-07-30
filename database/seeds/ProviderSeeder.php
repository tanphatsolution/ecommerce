<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Provider::class, 30)->create();
    }
}
