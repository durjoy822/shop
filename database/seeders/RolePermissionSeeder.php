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
    public function run(): void
    {
        //create roles

        $roleSuperAdmin = Role::create([
            'name' => 'Super Admin',
            'description' => 'This is Super Admin'
        ]);

        $roleAdmin = Role::create([
            'name' => ' Admin',
            'description' => ' This is Admin',
        ]);


        //Permission list as array

        $permissions=[

            [
                'group_name'=>'dashboard permission',
                'permissions'=>[
                    'dashboard',
                ],
            ],
            [
                'group_name'=>'categories permission',
                'permissions'=>[
                    'categories.create',
                    'categories.edit',
                    'categories.destroy',
                ],
            ],
            [
                'group_name'=>'sub categories permission',
                'permissions'=>[
                    'subcategories.create',
                    'subcategories.edit',
                    'subcategories.destroy',
                ],
            ],
            [
                'group_name'=>'roles permission',
                'permissions'=>[
                    'roles.create',
                    'roles.edit',
                    'roles.destroy',
                ],
            ],
        ]; 

        //create and assings permission
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
        
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                $permission = Permission::create([
                    'name' => $permissions[$i]['permissions'][$j],
                    'group_name' => $permissionGroup,
                ]);
            }
        }
           
            $roleSuperAdmin->givePermissionTo([

                'dashboard',
    
                'categories.create',
                'categories.edit',
                'categories.destroy',
    
                'subcategories.create',
                'subcategories.edit',
                'subcategories.destroy',
    
                'roles.create',
                'roles.edit',
                'roles.destroy',
    
    
            ]);
    
    
            $roleSuperAdmin->givePermissionTo([
                //
            ]);
        }

}
