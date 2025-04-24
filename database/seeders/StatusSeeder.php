<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['status_name' => 'Новый'],
            ['status_name' => 'В обработке'],
            ['status_name' => 'В работе'],
            ['status_name' => 'Заблокирован'],
            ['status_name' => 'Приостановлен'],
            ['status_name' => 'Архивный']
        ]);
    }
}
