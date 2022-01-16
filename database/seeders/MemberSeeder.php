<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        //
        DB::table('membre')->insert([
            'firstname' => Str::random(10),
            'email' => Str::random(10),
        ]);
    }
}
