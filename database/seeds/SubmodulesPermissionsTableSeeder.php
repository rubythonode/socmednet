<?php

use Illuminate\Database\Seeder;

class SubmodulesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_ownlist = DB::table('permissions')->where('code', 'OWN_LIST')->first();
        $permissions_ownview = DB::table('permissions')->where('code', 'OWN_VIEW')->first();
        $permissions_ownadd = DB::table('permissions')->where('code', 'OWN_ADD')->first();
        $permissions_ownedit = DB::table('permissions')->where('code', 'OWN_EDIT')->first();
        $permissions_owndelete = DB::table('permissions')->where('code', 'OWN_DELETE')->first();
        
        $permissions_grouplist = DB::table('permissions')->where('code', 'GROUP_LIST')->first();
        $permissions_groupview = DB::table('permissions')->where('code', 'GROUP_VIEW')->first();
        $permissions_groupadd = DB::table('permissions')->where('code', 'GROUP_ADD')->first();
        $permissions_groupedit = DB::table('permissions')->where('code', 'GROUP_EDIT')->first();
        $permissions_groupdelete = DB::table('permissions')->where('code', 'GROUP_DELETE')->first();
        $permissions_groupapprove = DB::table('permissions')->where('code', 'GROUP_APPROVE')->first();
        $permissions_groupreject = DB::table('permissions')->where('code', 'GROUP_REJECT')->first();
        
        $permissions_otherlist = DB::table('permissions')->where('code', 'OTHER_LIST')->first();
        $permissions_otherview = DB::table('permissions')->where('code', 'OTHER_VIEW')->first();
        $permissions_otheradd = DB::table('permissions')->where('code', 'OTHER_ADD')->first();
        $permissions_otheredit = DB::table('permissions')->where('code', 'OTHER_EDIT')->first();
        $permissions_otherdelete = DB::table('permissions')->where('code', 'OTHER_DELETE')->first();
        
        $submodule_admusers = DB::table('submodules')->where('code', 'ADM_USERS')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admusers->id,
            'permission_id' => $permissions_otherlist->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admusers->id,
            'permission_id' => $permissions_otherview->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admusers->id,
            'permission_id' => $permissions_otheradd->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admusers->id,
            'permission_id' => $permissions_otheredit->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admusers->id,
            'permission_id' => $permissions_otherdelete->id
        ]);
        
        $submodule_admgroup = DB::table('submodules')->where('code', 'ADM_GROUP')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admgroup->id,
            'permission_id' => $permissions_otherlist->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admgroup->id,
            'permission_id' => $permissions_otherview->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admgroup->id,
            'permission_id' => $permissions_otheradd->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admgroup->id,
            'permission_id' => $permissions_otheredit->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admgroup->id,
            'permission_id' => $permissions_otherdelete->id
        ]);
        
        $submodule_admpermissions = DB::table('submodules')->where('code', 'ADM_PERMISSIONS')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admpermissions->id,
            'permission_id' => $permissions_otherlist->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admpermissions->id,
            'permission_id' => $permissions_otherview->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admpermissions->id,
            'permission_id' => $permissions_otheradd->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admpermissions->id,
            'permission_id' => $permissions_otheredit->id
        ]);
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_admpermissions->id,
            'permission_id' => $permissions_otherdelete->id
        ]);
        
        $submodule_calcalendar = DB::table('submodules')->where('code', 'CAL_CALENDAR')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calcalendar->id,
            'permission_id' => $permissions_ownview->id
        ]);
        
        $submodule_calevent = DB::table('submodules')->where('code', 'CAL_EVENT')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_ownlist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_ownview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_ownadd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_ownedit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_owndelete->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_grouplist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_groupview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_groupadd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_groupedit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_groupdelete->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_otherlist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_otherview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_otheradd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_otheredit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calevent->id,
            'permission_id' => $permissions_otherdelete->id
        ]);
        
        $submodule_calreminder = DB::table('submodules')->where('code', 'CAL_REMINDER')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calreminder->id,
            'permission_id' => $permissions_ownlist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calreminder->id,
            'permission_id' => $permissions_ownview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calreminder->id,
            'permission_id' => $permissions_ownadd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calreminder->id,
            'permission_id' => $permissions_ownedit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_calreminder->id,
            'permission_id' => $permissions_owndelete->id
        ]);
        
        $submodule_mailbox = DB::table('submodules')->where('code', 'MAI_MAILBOX')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mailbox->id,
            'permission_id' => $permissions_ownlist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mailbox->id,
            'permission_id' => $permissions_ownview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mailbox->id,
            'permission_id' => $permissions_ownadd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mailbox->id,
            'permission_id' => $permissions_ownedit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mailbox->id,
            'permission_id' => $permissions_owndelete->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mailbox->id,
            'permission_id' => $permissions_otherlist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mailbox->id,
            'permission_id' => $permissions_otheradd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mailbox->id,
            'permission_id' => $permissions_otheredit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mailbox->id,
            'permission_id' => $permissions_otherdelete->id
        ]);
        
        $submodule_manleave = DB::table('submodules')->where('code', 'MAN_LEAVE')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_ownlist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_ownview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_ownadd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_ownedit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_owndelete->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_grouplist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_groupview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_groupapprove->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_groupreject->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_otherlist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_otherview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_otheradd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_otheredit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_otherdelete->id
        ]);
        
        $submodule_manclaim = DB::table('submodules')->where('code', 'MAN_CLAIM')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manclaim->id,
            'permission_id' => $permissions_ownlist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manclaim->id,
            'permission_id' => $permissions_ownview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manclaim->id,
            'permission_id' => $permissions_ownadd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manclaim->id,
            'permission_id' => $permissions_ownedit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manclaim->id,
            'permission_id' => $permissions_owndelete->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manclaim->id,
            'permission_id' => $permissions_grouplist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manclaim->id,
            'permission_id' => $permissions_groupview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_groupapprove->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_manleave->id,
            'permission_id' => $permissions_groupreject->id
        ]);
        
        $submodule_mantimesheet = DB::table('submodules')->where('code', 'MAN_TIMESHEET')->first();
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mantimesheet->id,
            'permission_id' => $permissions_ownlist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mantimesheet->id,
            'permission_id' => $permissions_ownview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mantimesheet->id,
            'permission_id' => $permissions_ownadd->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mantimesheet->id,
            'permission_id' => $permissions_ownedit->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mantimesheet->id,
            'permission_id' => $permissions_owndelete->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mantimesheet->id,
            'permission_id' => $permissions_grouplist->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mantimesheet->id,
            'permission_id' => $permissions_groupview->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mantimesheet->id,
            'permission_id' => $permissions_groupapprove->id
        ]);
        
        DB::table('submodules_permissions')->insert([
            'submodule_id' => $submodule_mantimesheet->id,
            'permission_id' => $permissions_groupreject->id
        ]);
    }
}
