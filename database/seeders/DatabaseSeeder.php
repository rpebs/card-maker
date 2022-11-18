<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Ramadhany',
            'pekerjaan' => 'Web Developer',
            'deskripsi' => 'Saya adalah seorang web developer junior yang membuat web menggunakan laravel',
        ]);
    }
}
