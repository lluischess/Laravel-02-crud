<?php

use Illuminate\Database\Seeder;

class LlibresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('llibres')->insert([
        	['titol' => 'llibre1',
        	'publicacio' => '01-01-01',
        	'tematica' => 'tematica1'],
        	['titol' => 'llibre2',
        	'publicacio' => '01-01-02',
        	'tematica' => 'tematica2'],
        	['titol' => 'llibre3',
        	'publicacio' => '01-01-03',
        	'tematica' => 'tematica1'],
        	['titol' => 'llibre4',
        	'publicacio' => '01-01-04',
        	'tematica' => 'tematica2']
        	]);
    }
}
