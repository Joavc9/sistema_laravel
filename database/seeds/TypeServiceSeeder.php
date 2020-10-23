<?php

use Illuminate\Database\Seeder;

class TypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_types')->insert([
            'name' => 'lavar',
        ]);
        DB::table('services_types')->insert([
            'name' => 'reparar',
        ]);
        DB::table('services_types')->insert([
            'name' => 'cocinar',
        ]);
    }
}
