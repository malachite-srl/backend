<?php

use Illuminate\Database\Seeder;

use Mesolite\Database\Seeds\CatSeeder;
use Mesolite\Database\Seeds\PermissionSeeder;
use Mesolite\Database\Seeds\WorkflowDoneNotification;
use Mesolite\Database\Seeds\FileSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(CatSeeder::class);
        $this->call(WorkflowDoneNotification::class);
        $this->call(FileSeeder::class);
    }
}
