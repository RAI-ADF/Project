<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('kaders')->insert([
            'nama' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'hak_akses' => 0,
            'password' => bcrypt('superadmin123'),
        ]);
    }
}
