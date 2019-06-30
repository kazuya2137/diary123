<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $diaries = [
            [
            'title' =>'hogehoge',
            'body' =>'hugahuga',
            ],
            [
            'title' =>'hogehoge',
            'body' =>'hugahuga',
            ],
            [
            'title' =>'hogehoge',
            'body' =>'hugahuga',
            ],
        ];

        foreach ($diaries as $diary) {

            DB::table('diaries')->insert([
                'title' => $diary['title'],
                'body' => $diary['body'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
