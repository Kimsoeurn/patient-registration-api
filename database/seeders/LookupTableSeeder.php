<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class LookupTableSeeder extends Seeder
{
    private function getSqlFile($file): string
    {
        return base_path(). DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'lookup' . DIRECTORY_SEPARATOR . $file;
    }
    public function run()
    {
        DB::unprepared(file_get_contents($this->getSqlFile('provinces.sql')));
        $this->command->info('Provinces table seeded!');

        DB::unprepared(file_get_contents($this->getSqlFile('districts.sql')));
        $this->command->info('Districts table seeded!');

        DB::unprepared(file_get_contents($this->getSqlFile('communes.sql')));
        $this->command->info('Communes table seeded!');

        DB::unprepared(file_get_contents($this->getSqlFile('villages.sql')));
        $this->command->info('Villages table seeded!');
    }
}
