<?php

use Illuminate\Database\Seeder;

class SubmodulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module_admin = DB::table('modules')->where('code', 'ADMIN')->first();
        
        DB::table('submodules')->insert([
            'module_id' => $module_admin->id,
            'code' => 'ADM_USERS',
            'name' => 'Manage Users.',
            'description' => 'Manage available users in the system.'
        ]);
        
        DB::table('submodules')->insert([
            'module_id' => $module_admin->id,
            'code' => 'ADM_GROUP',
            'name' => 'Manage Groups.',
            'description' => 'Manage available groups in the system.'
        ]);
        
        DB::table('submodules')->insert([
            'module_id' => $module_admin->id,
            'code' => 'ADM_PERMISSIONS',
            'name' => 'Manage Group Permissions.',
            'description' => 'Manage permissions applied to the group.'
        ]);
        
        $module_calendar = DB::table('modules')->where('code', 'CALENDAR')->first();
        
        DB::table('submodules')->insert([
            'module_id' => $module_calendar->id,
            'code' => 'CAL_CALENDAR',
            'name' => 'Calendar page or widget.',
            'description' => 'Module to show calendar on page or widget.'
        ]);
        
        DB::table('submodules')->insert([
            'module_id' => $module_calendar->id,
            'code' => 'CAL_EVENT',
            'name' => 'Events Module',
            'description' => 'Create or show events in the calendar or remider.'
        ]);
        
        DB::table('submodules')->insert([
            'module_id' => $module_calendar->id,
            'code' => 'CAL_REMINDER',
            'name' => 'Reminder Module.',
            'description' => 'Create private reminder to remind anything.'
        ]);
        
        $module_mail = DB::table('modules')->where('code', 'MAIL')->first();
        
        DB::table('submodules')->insert([
            'module_id' => $module_mail->id,
            'code' => 'MAI_MAILBOX',
            'name' => 'Mailboxes.',
            'description' => 'Module to manage mailboxes.'
        ]);
        
        $module_management = DB::table('modules')->where('code', 'MANAGEMENT')->first();
        
        DB::table('submodules')->insert([
            'module_id' => $module_management->id,
            'code' => 'MAN_LEAVE',
            'name' => 'Leave Management.',
            'description' => 'Leave Management module to manage employee leave.'
        ]);
        
        DB::table('submodules')->insert([
            'module_id' => $module_management->id,
            'code' => 'MAN_CLAIM',
            'name' => 'Claim Management',
            'description' => 'Module to manage claim request.'
        ]);
        
        DB::table('submodules')->insert([
            'module_id' => $module_management->id,
            'code' => 'MAN_TIMESHEET',
            'name' => 'Timesheet.',
            'description' => 'Create and manage timesheet report.'
        ]);
    }
}
