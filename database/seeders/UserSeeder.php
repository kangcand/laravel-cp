<?php
namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // untuk menghapus semua data dari model User
        DB::table('users')->delete();

        //sample user
        \App\Models\User::create([
            'name'     => 'Candra',
            'email'    => 'candra@gmail.com',
            'password' => bcrypt('rahasia'),
        ]);

    }
}
