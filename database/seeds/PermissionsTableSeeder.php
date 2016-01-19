<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'code' => 'OWN_LIST',
            'name' => 'List own created data.',
            'description' => 'View list of data created by related user.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'OWN_VIEW',
            'name' => 'View detail of own created data.',
            'description' => 'View detail of one selected data created by related user. Read-only access.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'OWN_ADD',
            'name' => 'Create new data for self.',
            'description' => 'Make a new entry to group of data own by related user.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'OWN_EDIT',
            'name' => 'Modify own data.',
            'description' => 'Make modification to own created data.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'OWN_DELETE',
            'name' => 'Delete own data',
            'description' => 'Delete owned data.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'GROUP_LIST',
            'name' => 'List group created data.',
            'description' => 'View list of data created by group or subordinate.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'GROUP_VIEW',
            'name' => 'View detail of group created data.',
            'description' => 'View detail of one selected data created by group or subordinate. Read-only access.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'GROUP_ADD',
            'name' => 'Create new data of group or subordinate.',
            'description' => 'Make a new entry to data belong to group or subordinate.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'GROUP_EDIT',
            'name' => 'Modify data of group or subordinate.',
            'description' => 'Make modification to data belong to group or subordinate.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'GROUP_DELETE',
            'name' => 'Delete data of group or subordinate.',
            'description' => 'Delete selected data belong to group or subordinate.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'GROUP_APPROVE',
            'name' => 'Approve data created by subordinate.',
            'description' => 'Approve selected data created by subordinate.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'GROUP_REJECT',
            'name' => 'Reject data created by subordinate.',
            'description' => 'Reject selected data belong to subordinate.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'OTHER_LIST',
            'name' => 'List group created by other.',
            'description' => 'View list of data created by other group or person.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'OTHER_VIEW',
            'name' => 'View detail of other created data.',
            'description' => 'View detail of one selected data created by other group or person. Read-only access.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'OTHER_ADD',
            'name' => 'Create new data for other group or person.',
            'description' => 'Make a new entry to data belong to other group or person.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'OTHER_EDIT',
            'name' => 'Modify data of other group or person.',
            'description' => 'Make modification to data belong to other group or person.'
        ]);
        
        DB::table('permissions')->insert([
            'code' => 'OTHER_DELETE',
            'name' => 'Delete data of other group or person.',
            'description' => 'Delete selected data belong to other group or person.'
        ]);
    }
}
