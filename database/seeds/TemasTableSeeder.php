<?php

use Illuminate\Database\Seeder;

class TemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('temas')->insert([
        	['nom' => 'tematica1'],
        	['nom' => 'tematica2']
        ]);
    }
}
