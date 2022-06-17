<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Site;
use App\Models\Osticket;
use App\Models\Action;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Osticket::factory(100)->create();
        Action::factory(200)->create();
        Site::factory(20)->create();

        // $this->call(SiteSeeder::class);
        // $this->call(OsticketSeeder::class);
        // $this->call(ActiontSeeder::class);

    }
}
