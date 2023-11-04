<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $appointmentManager = Role::create(['name' => 'Appointment Manager']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-appointment',
            'edit-appointment',
            'delete-appointment'
        ]);

        $appointmentManager->givePermissionTo([
            'create-appointment',
            'edit-appointment',
            'delete-appointment'
        ]);


        $client->givePermissionTo([
            'create-appointment',
            'edit-appointment',
            'delete-appointment'
        ]);
    }
}