<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Packet;
use App\Models\User;
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
        $roles = [
            'admin',
            'superadmin',
        ];
        Admin::create([
            'name' => 'admin',
            'roles' => json_encode($roles),
            'email' => 'admin@admin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ]);
        User::create([
            'packet_id' => 1,
           
            'username' => 'reseller1',
            'name' => 'reseller1',
            'email' => 'reseller1@reseller1.com',
            'active' => 1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ]);

        Packet::create([
            'name' => 'BRONZE',
            'price' => 50000,

        ]);
    }
}
