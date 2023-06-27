<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
            ['name' => 'read-dashboard', 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            ['name' => 'read-roles', 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            ['name' => 'create-roles', 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            ['name' => 'update-roles', 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            ['name' => 'delete-roles', 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            ['name' => 'read-users', 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            ['name' => 'create-users', 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            ['name' => 'update-users', 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            ['name' => 'delete-users', 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
        ]);
    }
}
