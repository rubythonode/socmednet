<?php

use Illuminate\Database\Seeder;

class RolesSubmodulesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_u = DB::table('users')->where('name', 'Administrator')->first();
        $submodules_user = DB::table('submodules')->where('code', 'ADM_USERS')->first();
        DB::table('submodules')->insert([
            'user_id' => $admin_u->id,
            'role_id' => $admin_r->id
        ]);
    }
}
