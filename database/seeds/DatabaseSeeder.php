<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DependencesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionUserTableSeeder::class);
        $this->call(MentalHealthsTableSeeder::class);
        $this->call(GendersTableSeeder::class);
    }
}
