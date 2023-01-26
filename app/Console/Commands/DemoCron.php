<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Str;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create User after certain time.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
           $name = Str::random(15);
           $email = Str::random(10)."@gmail.com";
           $password = '$2y$10$ih1cZgIbshGPwm6XT2m8Q.vos.mNL2F8XRjnJmsGhuN4dt8vN3Pt.';

           User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($email),
           ]);

           $this->info('Successfully Created.');
    }
}
