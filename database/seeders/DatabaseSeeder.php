<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userCount = intval(env('USER_COUNT', 1000000));

        for($i=0; $i < intdiv($userCount, 10000); $i++) {
            User::insert(
                User::factory(10000)->make()->toArray()
            );
        }

        User::insert(
            User::factory($userCount % 10000)->make()->toArray()
        );
    }
}
