<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'code' => 'ADMINISTRATOR',
            'name' => 'Administrator',
            'description' => 'System Administrator'
        ]);
        
        $admin_u = DB::table('users')->where('name', 'Administrator')->first();
        $admin_r = DB::table('roles')->where('code', 'ADMINISTRATOR')->first();
        DB::table('users_roles')->insert([
            'user_id' => $admin_u->id,
            'role_id' => $admin_r->id
        ]);
    }
}
