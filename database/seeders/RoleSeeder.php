<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Buyer']);

        Permission::create(['name' => 'admin.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'useres.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'useres.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'useres.update'])->syncRoles([$role1]);
        Permission::create(['name' => 'delivery.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'delivery.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'delivery.destroy'])->syncRoles([$role1]);
        Permission::create(['name' => 'delivery.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'history.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'history.destroy'])->syncRoles([$role1]);
        

        
    }
}
