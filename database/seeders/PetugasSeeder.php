<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            'namapetugas'=>'Admin2',
            'email'=>'admin2@gmail.com',
            'hp'=>'01290321092',
            'password'=>Hash::make('admin123'),
        ]);
    }
}
