<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class S3Check extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 's3:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $this->info(Storage::disk('s3')->put('test.txt', 'test'));
//        Storage::disk('s3')->url('test.txt');
        Storage::disk('s3')->exists('test.txt');
//        $this->info(Storage::disk('s3')->get('test.txt'));
//        $this->info(Storage::disk('s3')->delete('test.txt'));
//        $this->info(json_encode(Storage::disk('s3')->files('path'), JSON_PRETTY_PRINT));
    }
}
