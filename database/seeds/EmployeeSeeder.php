<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'first_name' => Str::random(5),
            'last_name' => Str::random(5),
            'department_id' => 1,
            'email' => Str::random(10).'@test.com',
            'phone' => Str::random(10)
        ]);
    }
}
