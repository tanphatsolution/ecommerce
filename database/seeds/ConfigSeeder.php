<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app(Config::class)->create([
        	'key' => 'name',
        	'value' => 'ECM',
        	'type' => 'seo'
        ]);
        app(Config::class)->create([
        	'key' => 'keywords',
        	'value' => '',
        	'type' => 'seo'
        ]);
        app(Config::class)->create([
        	'key' => 'description',
        	'value' => '',
        	'type' => 'seo'
        ]);
        app(Config::class)->create([
        	'key' => 'facebook',
        	'value' => '',
        	'type' => 'social'
        ]);
        app(Config::class)->create([
        	'key' => 'youtube',
        	'value' => '',
        	'type' => 'social'
        ]);
        app(Config::class)->create([
        	'key' => 'email',
        	'value' => '',
        	'type' => 'string'
        ]);
        app(Config::class)->create([
        	'key' => 'phone',
        	'value' => '',
        	'type' => 'string'
        ]);
        app(Config::class)->create([
        	'key' => 'address',
        	'value' => '',
        	'type' => 'string'
        ]);
        app(Config::class)->create([
        	'key' => 'scripts',
        	'value' => '',
        	'type' => 'text'
        ]);
        app(Config::class)->create([
        	'key' => 'logo',
        	'value' => '',
        	'type' => 'string'
        ]);
        app(Config::class)->create([
        	'key' => 'slogan',
        	'value' => '',
        	'type' => 'string'
        ]);
        app(Config::class)->create([
        	'key' => 'introduce',
        	'value' => '',
        	'type' => 'text'
        ]);
    }
}
