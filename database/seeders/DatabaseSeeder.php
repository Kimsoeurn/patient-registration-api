<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();
        \DB::table('patients')->truncate();

        $this->call(LookupTableSeeder::class);

        \App\Models\User::factory(10)->create()->each(function ($user) {
            Patient::factory(10)->create(['user_id' => $user]);
        });
    }
}
