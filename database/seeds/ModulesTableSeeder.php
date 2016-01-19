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
            'code' => 'ADMIN',
            'name' => 'Administration',
            'description' => 'System administration modules.'
        ]);
        
        DB::table('modules')->insert([
            'code' => 'CALENDAR',
            'name' => 'Calendar & Events',
            'description' => 'Calendar, events and reminders module.'
        ]);
        
        DB::table('modules')->insert([
            'code' => 'MAIL',
            'name' => 'Email',
            'description' => 'Email modules to do mailing purpose.'
        ]);
        
        DB::table('modules')->insert([
            'code' => 'MANAGEMENT',
            'name' => 'Management',
            'description' => 'Company management module and system.'
        ]);
    }
}
