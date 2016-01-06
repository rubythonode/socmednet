<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            'code' => 'USERS',
            'name' => 'Users Management'
        ]);
        
        DB::table('modules')->insert([
            'code' => 'ANNOUNCEMENT',
            'name' => 'Announcement'
        ]);
        
        DB::table('modules')->insert([
            'code' => 'EVENTS',
            'name' => 'Events'
        ]);
        
        DB::table('modules')->insert([
            'code' => 'MAIL',
            'name' => 'Webmail'
        ]);
        
        DB::table('modules')->insert([
            'code' => 'LEAVE',
            'name' => 'Leave Management'
        ]);
        
        DB::table('modules')->insert([
            'code' => 'CLAIM',
            'name' => 'Claim Management'
        ]);
    }
}
