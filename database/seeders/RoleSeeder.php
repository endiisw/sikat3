<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::create([
            'name' => 'Administrator',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $superAdmin->givePermissionTo('read-dashboard');
        $superAdmin->givePermissionTo(['read-roles','create-roles','update-roles','delete-roles']);
        $superAdmin->givePermissionTo(['read-users','create-users','update-users','delete-users']);
        $superAdmin->givePermissionTo(['read-permissions','create-permissions','update-permissions','delete-permissions']);
    }
}
