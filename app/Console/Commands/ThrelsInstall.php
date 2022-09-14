<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ThrelsInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'threls:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // update the .env database value to sqlite
        $this->updateEnv([
            'DB_CONNECTION' => 'sqlite',
            'DB_DATABASE' => database_path('database.sqlite'),
        ]);


        return 0;
    }

    public function updateEnv($array)
    {
        // get .env file path
        $path = app()->environmentFilePath();

        // loop through the array elements and update the .env file
        foreach ($array as $key => $value) {
            if (file_exists($path)) {
                file_put_contents($path, str_replace(
                    $key . '=' . env($key),
                    $key . '=' . $value,
                    file_get_contents($path)
                ));
            }
        }

        return true;
    }
}
