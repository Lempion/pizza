<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DeleteOldTemporaryFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-old-temporary-files';

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
        $directory = 'public/' . config('paths.temporary');
        $files = Storage::files($directory);
        $expirationTime = Carbon::now()->subHours(5);

        foreach ($files as $file) {
            $fileLastModified = Storage::lastModified($file);
            $fileModifiedTime = Carbon::createFromTimestamp($fileLastModified);

            if ($fileModifiedTime->isBefore($expirationTime)) {
                Storage::delete($file);
                $this->info("Удален файл: $file");
            }
        }

        $this->info('Удаление завершено.');
    }

}
