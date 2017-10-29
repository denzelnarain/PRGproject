<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $auther = Role::create([
            'name' => 'Auther',
            'slug' => 'auther',
            'permission' => ['create-post' => true,
            ]
        ]);

        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permission' => [
                'update-post' => true
            ]
        ]);
     
    }
}
