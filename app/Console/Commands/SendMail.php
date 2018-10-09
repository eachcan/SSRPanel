<?php

namespace App\Console\Commands;

use App\Mail\activeUser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test to send mail';

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
     * @return mixed
     */
    public function handle()
    {
        try {
            Mail::to("eachcan@163.com")->send(new activeUser("网站名", "http://myvpn.tk/a/" . mt_rand(10000, 99999)));
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }
}
