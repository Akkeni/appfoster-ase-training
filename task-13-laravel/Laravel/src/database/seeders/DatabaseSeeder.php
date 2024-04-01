<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call([
            //UsersTableSeeder::class,
            //BooksTableSeeder::class,
            HostsTableSeeder::class,
            ProjectsTableSeeder::class
        ]);
    }
}
