<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //  Create roles
        $roleSuperAdmin = Role::create([
            'name' => 'SuperAdmin',
            'description' => 'This is SuperAdmin',
        ]);
        $roleAdmin = Role::create([
            'name' => 'Admin',
            'description' => 'This is Admin',
        ]);
        $roleAdmin = Role::create([
            'name' => 'Guest',
            'description' => 'This is Guest',
        ]);

        //  permission List as array
        $permissions = [
            [
                'group_name' => 'dashboard permission',
                'permissions' => [
                    'dashboard',
                ],
            ],
            [
                'group_name' => 'roles permission',
                'permissions' => [
                    'roles.index',
                    'roles.create',
                    'roles.show',
                    'roles.edit',
                    'roles.destroy',
                ],
            ],
            [
                'group_name' => 'currency permission',
                'permissions' => [
                    'currency.index',
                    'currency.create',
                    'currency.show',
                    'currency.edit',
                    'currency.destroy',
                ],
            ],
            [
                'group_name' => 'users permission',
                'permissions' => [
                    'users.index',
                    'users.create',
                    'users.show',
                    'users.edit',
                    'users.destroy',
                ],
            ],
            [
                'group_name' => 'rooms permission',
                'permissions' => [
                    'room.index',
                    'room.create',
                    'room.show',
                    'room.edit',
                    'room.destroy',
                ],
            ],
            [
                'group_name' => 'language permission',
                'permissions' => [
                    'language.index',
                    'language.create',
                    'language.translate',
                    'language.edit',
                    'language.destroy',
                ],
            ],
            [
                'group_name' => 'settings permission',
                'permissions' => [
                    'settings',
                    'optimize',
                ],
            ],
            [
                'group_name' => 'facilities permission',
                'permissions' => [
                    'facilities.index',
                    'facilities.create',
                    'facilities.show',
                    'facilities.edit',
                    'facilities.destroy',
                ],
            ],
            [
                'group_name' => 'complements permission',
                'permissions' => [
                    'complements.index',
                    'complements.create',
                    'complements.show',
                    'complements.edit',
                    'complements.destroy',
                ],
            ],
            [
                'group_name' => 'roomtype permission',
                'permissions' => [
                    'roomtype.index',
                    'roomtype.create',
                    'roomtype.show',
                    'roomtype.edit',
                    'roomtype.destroy',
                ],
            ],
            [
                'group_name' => 'blog permission',
                'permissions' => [
                    'blog.index',
                    'blog.create',
                    'blog.show',
                    'blog.edit',
                    'blog.destroy',
                ],
            ],
            [
                'group_name' => 'booking permission',
                'permissions' => [
                    'booking.index',
                    'booking.create',
                    'booking.show',
                    'booking.edit',
                    'booking.destroy',
                ],
            ],

        ];

        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];

            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                Permission::create([
                    'name' => $permissions[$i]['permissions'][$j],
                    'group_name' => $permissionGroup,
                ]);
            }
        }

        $roleSuperAdmin->givePermissionTo([
            'dashboard',

            'roles.index',
            'roles.create',
            'roles.show',
            'roles.edit',
            'roles.destroy',

            'room.index',
            'room.create',
            'room.show',
            'room.edit',
            'room.destroy',

            'users.index',
            'users.create',
            'users.show',
            'users.edit',
            'users.destroy',

            'settings',
            'optimize',

            'currency.index',
            'currency.create',
            'currency.show',
            'currency.edit',
            'currency.destroy',

            'facilities.index',
            'facilities.create',
            'facilities.show',
            'facilities.edit',
            'facilities.destroy',

            'complements.index',
            'complements.create',
            'complements.show',
            'complements.edit',
            'complements.destroy',

            'language.index',
            'language.create',
            'language.translate',
            'language.edit',
            'language.destroy',

            'roomtype.index',
            'roomtype.create',
            'roomtype.show',
            'roomtype.edit',
            'roomtype.destroy',

            'blog.index',
            'blog.create',
            'blog.show',
            'blog.edit',
            'blog.destroy',

            'booking.index',
            'booking.create',
            'booking.show',
            'booking.edit',
            'booking.destroy',
        ]);

        $roleAdmin->givePermissionTo([
            //
        ]);
    }
}

        //create and assings permission
//         for ($i = 0; $i < count($permissions); $i++) {
//             $permissionGroup = $permissions[$i]['group_name'];

//             for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
//                 $permission = Permission::create([
//                     'name' => $permissions[$i]['permissions'][$j],
//                     'group_name' => $permissionGroup,
//                 ]);
//             }
//         }
//             $roleSuperAdmin->givePermissionTo([
//             ]);
//             $roleSuperAdmin->givePermissionTo([
//                 //
//             ]);
//         }

// } for ($i = 0; $i < count($permissions); $i++) {

// }