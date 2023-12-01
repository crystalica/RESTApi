<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sandi',
            'email' => 'sandi@sandi.com',
            'password' => Hash::make('rahasia123'),
        ]);
        DB::table('students')->insert([
            'nim' =>'4332211001',
            'nama_lengkap' => 'Sandi Ridho Illahi',
            'program_studi' => 'RKS',
            'alamat' => 'Batu Aji',

        ]);
    }
    
    
}
