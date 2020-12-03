<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $u = new \App\Models\User();
        $u->username = 'admin';
        $u->password = Hash::make('admin');
        $u->is_admin = true;
        $u->save();

        $u = new \App\Models\User();
        $u->username = 'user';
        $u->password = Hash::make('user');
        $u->save();
    }
}
