<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = public_path('dump.sql');
        $db = [
            'host' => isset($DATABASE_URL['host'])? $DATABASE_URL['host'] : null,
            'port' => isset($DATABASE_URL['port'])? $DATABASE_URL['port'] : null,
            'database' =>isset($DATABASE_URL['path'])? ltrim($DATABASE_URL['path'], "/") : null,
            'username' => isset($DATABASE_URL['user'])? $DATABASE_URL['user'] : null,
            'password' => isset($DATABASE_URL['pass'])? $DATABASE_URL['pass'] : null,
        ];
        exec("pgsql --user={$db['username']} --password={$db['password']} --host={$db['host']} --database={$db['database']} < $sql ");
        \Log::info("SQL Import Done");
    }
}

