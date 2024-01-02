<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'label' => 'Admin',
            'value' => 1,
            'description' => 'Admin profile',
            'permissions' => json_encode([
                'admin' => true,
                'read' => true,
                'delete' => true,
                'edit' => true,
                'create' => true,
            ]),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('profiles')->insert([
            'label' => 'user',
            'value' => 2,
            'description' => 'User profile',
            'permissions' => json_encode([
                'admin' => false,
                'read' => true,
                'delete' => false,
                'edit' => false,
                'create' => false,
            ]),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
