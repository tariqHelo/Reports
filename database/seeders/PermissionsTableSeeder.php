<?php

namespace Database\Seeders;
use App\Models\Permission;

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
           $permissions = [
           [
           'id' => '1',
           'title' => 'user_management_access',
           ],

           ///permission
           [
           'id' => '2',
           'title' => 'permission_create',
           ],
           [
           'id' => '3',
           'title' => 'permission_edit',
           ],
           [
           'id' => '4',
           'title' => 'permission_show',
           ],
           [
           'id' => '5',
           'title' => 'permission_delete',
           ],
           [
           'id' => '6',
           'title' => 'permission_access',
           ],

           ////Role
           [
           'id' => '7',
           'title' => 'role_create',
           ],
           [
           'id' => '8',
           'title' => 'role_edit',
           ],
           [
           'id' => '9',
           'title' => 'role_show',
           ],
           [
           'id' => '10',
           'title' => 'role_delete',
           ],
           [
           'id' => '11',
           'title' => 'role_access',
           ],
           


           /////User
           
           [
           'id' => '12',
           'title' => 'user_edit',
           ],
           [
           'id' => '13',
           'title' => 'user_show',
           ],
           [
           'id' => '14',
           'title' => 'user_delete',
           ],
           [
           'id' => '15',
           'title' => 'user_access',
           ],
           [
           'id' => '16',
           'title' => 'user_create',
           ],

           

        ////Master 
            [
            'id' => '17',
            'title' => 'Master',
            ],

       ///publicAdministration
            [
            'id' => '18',
            'title' => 'publicAdministration_access',
            ],
            [
            'id' => '19',
            'title' => 'publicAdministration_delete',
            ],
            [
            'id' => '20',
            'title' => 'publicAdministration_create',
            ],
            [
            'id' => '21',
            'title' => 'publicAdministration_edit',
            ],

       ///Branches
            [
            'id' => '22',
            'title' => 'Branches_access',
            ],
            [
            'id' => '23',
            'title' => 'Branches_edit',
            ],
            [
            'id' => '24',
            'title' => 'Branches_delete',
            ],
            [
            'id' => '25',
            'title' => 'Branches_create',
            ],


            ///Branches
            [
            'id' => '27',
            'title' => 'Administration_access',
            ],
            [
            'id' => '28',
            'title' => 'Administration_edit',
            ],
            [
            'id' => '29',
            'title' => 'Administration_delete',
            ],
            [
            'id' => '30',
            'title' => 'Administration_create',
            ],

            ///Sections
            [
            'id' => '31',
            'title' => 'Sections_access',
            ],
            [
            'id' => '32',
            'title' => 'Sections_edit',
            ],
            [
            'id' => '33',
            'title' => 'Sections_delete',
            ],
            [
            'id' => '34',
            'title' => 'Sections_create',
            ],


            ///TasksManger
            [
            'id' => '35',
            'title' => 'Tasks_Manger',
            ],
////
            [
            'id' => '36',
            'title' => 'Taskstatus_access',
            ],
            [
            'id' => '37',
            'title' => 'Taskstatus_delete',
            ],
            [
            'id' => '38',
            'title' => 'Taskstatus_create',
            ],
            [
            'id' => '39',
            'title' => 'Taskstatus_edit',
            ],

            [
            'id' => '40',
            'title' => 'Taskstype_access',
            ],
            [
            'id' => '41',
            'title' => 'Taskstype_delete',
            ],
            [
            'id' => '42',
            'title' => 'Taskstype_create',
            ],
            [
            'id' => '43',
            'title' => 'Taskstype_edit',
            ],

            [
            'id' => '44',
            'title' => 'Tasks_access',
            ],
            [
            'id' => '45',
            'title' => 'Tasks_delete',
            ],
            [
            'id' => '46',
            'title' => 'Tasks_create',
            ],
            [
            'id' => '47',
            'title' => 'Tasks_edit',
            ],


            [
            'id' => '48',
            'title' => 'Reports',
            ],

            [
            'id' => '49',
            'title' => 'Settings',
            ],
            [
            'id' => '50',
            'title' => 'Help',
            ],


         
           ];

           Permission::insert($permissions);

    }
}
