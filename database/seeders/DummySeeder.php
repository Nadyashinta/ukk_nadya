<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PharIo\Manifest\Email;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $userdata =[
        [
          'name' => 'admin',
          'Email' => 'admin@gmail.com',
          'role' => 'admin',
          'password' => bcrypt('admin_ukk')
        ],
        [
            'name' => 'petugas',
            'Email' => 'petugas@gmail.com',
            'role' => 'petugas',
            'password' => bcrypt('petugas_ukk')
          ],
          [
            'name' => 'peminjam',
            'Email' => 'peminjam@gmail.com',
            'role' => 'peminjam',
            'password' => bcrypt('peminjam_ukk')
          ],
        ];

        foreach($userdata as $key => $val){
            User::create($val);
       }
    }
}
