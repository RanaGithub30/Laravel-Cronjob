<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Quote;

class QuoteCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Random Quotes';

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
        $quotes = [
            'Live as if you were to die tomorrow. Learn as if you were to live forever.',
            'That which does not kill us makes us stronger.',
            'Do what you can, with what you have, where you are.',
            'Be yourself; everyone else is already taken.',
            'This above all: to thine own self be true.',
            'If you cannot do great things, do small things in a great way.',
            'If opportunity doesn’t knock, build a door.'
        ];
        
        Quote::create([
            'random_id' => mt_rand(10000000, 99999999),
            'quotes' => $quotes[mt_rand(0, 6)],
        ]);        

        $this->info('Quote Successfully Created.');
    }
}
